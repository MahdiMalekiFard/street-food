<?php

namespace App\Actions\Base;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Base;
use App\Repositories\BaseCategory\BaseCategoryRepositoryInterface;
use App\Services\File\FileService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class StoreBaseAction
{
    use AsAction;

    public function __construct(
        private readonly BaseCategoryRepositoryInterface $repository,
        private readonly SyncTranslationAction $syncTranslationAction,
        private readonly FileService $fileService,
    )
    {
    }

    /**
     * @param array{
     *     title:string,
     *     slug:string,
     *     description:string,
     *     published:bool,
     *     image:string,
     * } $payload
     * @return Base
     * @throws Throwable
     */
    public function handle(array $payload): Base
    {
        return DB::transaction(function () use ($payload) {
            /** @var Base $model */
            $model = $this->repository->store(Arr::only($payload, ['published', 'slug']));
            $this->syncTranslationAction->handle($model, Arr::only($payload, ['title', 'description']));

            $this->fileService->addMedia($model);

            return $model->refresh();
        });
    }
}
