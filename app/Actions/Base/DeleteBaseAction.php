<?php

namespace App\Actions\Base;

use App\Models\Base;
use App\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteBaseAction
{
    use AsAction;

    public function __construct(public readonly BaseRepositoryInterface $repository)
    {
    }

    public function handle(Base $base): bool
    {
        return DB::transaction(function () use ($base) {
            return $this->repository->delete($base);
        });
    }
}
