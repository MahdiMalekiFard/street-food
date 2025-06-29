<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Actions\Base\DeleteBaseAction;
use App\Actions\Base\StoreBaseAction;
use App\Actions\Base\UpdateBaseAction;
use App\Http\Requests\StoreBaseRequest;
use App\Http\Requests\UpdateBaseRequest;
use App\Models\Base;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BaseController extends BaseWebController
{
    /**
     * Display a listing of the resource.
     *
     * @throws Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Base::query())
                             ->addIndexColumn()
                             ->addColumn('actions', function ($row) {
                                 return view('admin.pages.base.index_options', ['row' => $row]);
                             })
                             ->orderColumns(['id'], '-:column $1')
                             ->make(true);
        }
        return view('admin.pages.base.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.base.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBaseRequest $request
     *
     * @return mixed
     */
    public function store(StoreBaseRequest $request)
    {
        StoreBaseAction::run($request->validated());
        return redirect(route('admin.base.index'))->withToastSuccess(trans('general.store_success', ['model' => trans('base.model')]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Base $base)
    {
        return view('admin.pages.base.show',compact('base'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Base $base
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(Base $base)
    {
        return view('admin.pages.base.edit',compact('base'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBaseRequest $request
     * @param Base              $base
     *
     * @return mixed
     */
    public function update(UpdateBaseRequest $request, Base $base)
    {
        UpdateBaseAction::run($base,$request->validated());
        return redirect(route('admin.base.index'))->withToastSuccess(trans('general.update_success', ['model' => trans('base.model')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Base $base
     *
     * @return mixed
     */
    public function destroy(Base $base)
    {
        DeleteBaseAction::run($base);
        return redirect(route('admin.base.index'))->withToastSuccess(trans('general.delete_success', ['model' => trans('base.model')]));
    }
}
