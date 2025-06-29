<?php

namespace App\Actions\Base;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Base;
use App\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateBaseAction
{
    use AsAction;

    public function __construct(
        private readonly BaseRepositoryInterface $repository,
        private readonly SyncTranslationAction $syncTranslationAction,
    ) {}


    /**
     * @param Base                                          $base
     * @param array{title:string,description:string}             $payload
     * @return Base
     */
    public function handle(Base $base, array $payload): Base
    {
        return DB::transaction(function () use ($base, $payload) {
            $this->repository->update($base, $payload);
            $this->syncTranslationAction->handle($base, Arr::only($payload, ['title', 'description', 'body']));

            return $base->refresh();
        });
    }
}
