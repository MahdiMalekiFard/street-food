<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Actions\Menu\DeleteMenuAction;
use App\Actions\Menu\StoreMenuAction;
use App\Actions\Menu\ToggleMenuAction;
use App\Actions\Menu\UpdateMenuAction;
use App\Enums\BooleanEnum;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Base;
use App\Models\Menu;
use App\Repositories\Menu\MenuRepositoryInterface;
use App\Services\AdvancedSearchFields\AdvancedSearchFieldsService;
use App\Yajra\Column\ActionColumn;
use App\Yajra\Column\CreatedAtColumn;
use App\Yajra\Column\PublishedColumn;
use App\Yajra\Column\TitleColumn;
use App\Yajra\Filter\TitleFilter;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MenuController extends BaseWebController
{
    /**
     * Display a listing of the resource.
     *
     * @throws Exception
     */
    public function index(Request $request, AdvancedSearchFieldsService $searchFieldsService)
    {
        if ($request->ajax()) {
            return Datatables::of(Menu::query())
                             ->addIndexColumn()
                             ->addColumn('actions', new ActionColumn('admin.pages.menu.index_options'))
                             ->addColumn('title', new TitleColumn)
                             ->filterColumn('title', new TitleFilter)
                             ->addColumn('base_category', fn($row) => $row->base?->title)
                             ->addColumn('published', new PublishedColumn)
                             ->addColumn('created_at', new CreatedAtColumn)
                             ->orderColumns(['id'], '-:column $1')
                             ->make(true);
        }
        return view('admin.pages.menu.index', [
            'filters' => $searchFieldsService->generate(Menu::class),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bases = Base::query()->where('published', BooleanEnum::ENABLE)->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->title];
        });

        return view('admin.pages.menu.create', compact('bases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMenuRequest $request
     *
     * @return mixed
     */
    public function store(StoreMenuRequest $request)
    {
        StoreMenuAction::run($request->validated());
        return redirect(route('admin.menu.index'))->withToastSuccess(trans('general.store_success', ['model' => trans('menu.model')]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('admin.pages.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(Menu $menu)
    {
        $bases = Base::query()->where('published', BooleanEnum::ENABLE)->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->title];
        });

        return view('admin.pages.menu.edit', compact('menu', 'bases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMenuRequest $request
     * @param Menu              $menu
     *
     * @return mixed
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        UpdateMenuAction::run($menu, $request->validated());
        return redirect(route('admin.menu.index'))->withToastSuccess(trans('general.update_success', ['model' => trans('menu.model')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     *
     * @return mixed
     */
    public function destroy(Menu $menu)
    {
        DeleteMenuAction::run($menu);
        return redirect(route('admin.menu.index'))->withToastSuccess(trans('general.delete_success', ['model' => trans('menu.model')]));
    }

    public function toggle(Menu $menu)
    {
        ToggleMenuAction::run($menu);
        return redirect(route('admin.menu.index'))->withToastSuccess(trans('general.toggle_success', ['model' => trans('menu.model')]));
    }

    public function menuList($locale, Base $base, MenuRepositoryInterface $repository)
    {
        $baseId = session('base_id');

        $menus = $repository->query()
                            ->where('published', BooleanEnum::ENABLE)
                            ->where('base_id', $baseId)
                            ->get();
        return view('web.pages.menu-list', compact('menus'));
    }
}
