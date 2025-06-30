<?php

namespace App\Actions\Base;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Base;
use App\Repositories\BaseCategory\BaseCategoryRepositoryInterface;
use App\Services\File\FileService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateBaseAction
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
     * @param Base $base
     * @param array{
     *     title:string,
     *     description:string,
     *     published:bool,
     *     image:string,
     * }           $payload
     * @return Base
     */
    public function handle(Base $base, array $payload): Base
    {
        return DB::transaction(function () use ($base, $payload) {
            $this->repository->update($base, Arr::only($payload, ['published']));
            $this->syncTranslationAction->handle($base, Arr::only($payload, ['title', 'description']));

            $this->fileService->addMedia($base);

            return $base->refresh();
        });
    }
}
