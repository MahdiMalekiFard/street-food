<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Base;
use App\Models\User;
use App\Services\Permissions\PermissionsService;

class BasePolicy
{

    public function viewAny(User $user): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Index'));
    }

    public function view(User $user, Base $base): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Show'));
    }

    public function create(User $user): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Store'));
    }

    public function update(User $user, Base $base): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Update'));
    }

    public function delete(User $user, Base $base): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Delete'));
    }

    public function restore(User $user, Base $base): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class, 'Restore'));
    }

    public function forceDelete(User $user, Base $base): bool
    {
        return $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Base::class));
    }
}
