<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Enums\BooleanEnum;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

class BaseRepository implements BaseRepositoryInterface
{
    public function __construct(public Model $model) {}

    public function query(array $payload = []): Builder|QueryBuilder
    {
        return $this->model->query();
    }

    public function paginate(?int $limit = null, array $payload = []): LengthAwarePaginator|Collection|array
    {
        if ($limit === null && request()->input('page_limit') !== -1) {
            $limit = request()->input('page_limit', 15);
        } elseif ($limit === -1) {
            return $this->query($payload)->get();
        }

        return $this->query($payload)->paginate($limit);
    }

    public function get(array $payload = []): Collection|array
    {
        return $this->query($payload)->get();
    }

    public function store(array $payload)
    {
        return $this->model->create($payload);
    }

    public function update($eloquent, array $payload)
    {
        $eloquent->update($payload);

        return $eloquent;
    }

    public function delete($eloquent): bool
    {
        return $eloquent->delete();
    }

    public function find(mixed $value, string $field = 'id', array $selected = ['*'], bool $firstOrFail = false, array $with = [])
    {
        $model = $this->getModel()->with($with)->select($selected)->where($field, $value);

        if ($firstOrFail) {
            return $model->firstOrFail();
        }

        return $model->first();
    }

    public function getModel(): Model
    {
        return $this->model;
    }

    public function toggle($model, string $field = 'published')
    {
        if ($model[$field] instanceof BooleanEnum) {
            $model[$field] = ! $model[$field]->value;
        } else {
            $model[$field] = ! $model[$field];
        }
        $model->save();

        return $model;
    }

    public function updateOrCreate(array $data, array $conditions = [])
    {
        return $this->model->updateOrCreate($conditions, $data);
    }

    public function data(array $payload = []): array
    {
        return [];
    }
}
