<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Actions\ArtGallery\DeleteArtGalleryAction;
use App\Actions\ArtGallery\StoreArtGalleryAction;
use App\Actions\ArtGallery\UpdateArtGalleryAction;
use App\Enums\ArtGalleryTypeEnum;
use App\Enums\BooleanEnum;
use App\Http\Requests\StoreArtGalleryRequest;
use App\Http\Requests\UpdateArtGalleryRequest;
use App\Models\ArtGallery;
use App\Models\Base;
use App\Repositories\ArtGallery\ArtGalleryRepository;
use App\Repositories\ArtGallery\ArtGalleryRepositoryInterface;
use App\Yajra\Column\ActionColumn;
use App\Yajra\Column\TitleColumn;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArtGalleryController extends BaseWebController
{
    /**
     * Display a listing of the resource.
     *
     * @throws Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(ArtGallery::query())
                             ->addIndexColumn()
                             ->addColumn('title', new TitleColumn)
                             ->addColumn('base_category', fn($row) => $row->base?->title)
                             ->addColumn('actions', new ActionColumn('admin.pages.artGallery.index_options'))
                             ->orderColumns(['id'], '-:column $1')
                             ->make(true);
        }
        return view('admin.pages.artGallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bases = Base::query()->where('published', BooleanEnum::ENABLE)->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->title];
        });

        return view('admin.pages.artGallery.create', compact('bases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreArtGalleryRequest $request
     *
     * @return mixed
     */
    public function store(StoreArtGalleryRequest $request)
    {
        StoreArtGalleryAction::run($request->validated());
        return redirect(route('admin.art-gallery.index'))->withToastSuccess(trans('general.store_success', ['model' => trans('artGallery.model')]));
    }

    /**
     * Display the specified resource.
     */
    public function show(ArtGallery $artGallery)
    {
        return view('admin.pages.artGallery.show', compact('artGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ArtGallery $artGallery
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(ArtGallery $artGallery)
    {
        $bases = Base::query()->where('published', BooleanEnum::ENABLE)->get()->mapWithKeys(function ($item) {
            return [$item->id => $item->title];
        });

        return view('admin.pages.artGallery.edit', compact('artGallery', 'bases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateArtGalleryRequest $request
     * @param ArtGallery              $artGallery
     *
     * @return mixed
     */
    public function update(UpdateArtGalleryRequest $request, ArtGallery $artGallery)
    {
        UpdateArtGalleryAction::run($artGallery, $request->validated());
        return redirect(route('admin.art-gallery.index'))->withToastSuccess(trans('general.update_success', ['model' => trans('artGallery.model')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ArtGallery $artGallery
     *
     * @return mixed
     */
    public function destroy(ArtGallery $artGallery)
    {
        DeleteArtGalleryAction::run($artGallery);
        return redirect(route('admin.art-gallery.index'))->withToastSuccess(trans('general.delete_success', ['model' => trans('artGallery.model')]));
    }

    public function galleryList($locale, Base $base, ArtGalleryRepositoryInterface $repository)
    {
        $baseId = session('base_id');

        $artGalleries = $repository->query()->where('base_id', $baseId)->get();
        return view('web.pages.gallery-list', compact('artGalleries'));
    }

    public function galleryDetail(string $locale, ArtGallery $artGallery)
    {
        return view('web.pages.gallery-detail', compact('artGallery'));
    }
}
