<?php

declare(strict_types=1);

namespace App\Repositories\BaseCategory;

use App\Repositories\BaseRepositoryInterface;
use App\Models\Base;

interface BaseCategoryRepositoryInterface extends BaseRepositoryInterface
{

    public function extra(array $payload = []): array;

}
