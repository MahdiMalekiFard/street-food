<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;

class ProfilePolicy
{

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Profile $profile): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Profile $profile): bool
    {
        return true;
    }

    public function delete(User $user, Profile $profile): bool
    {
        return true;
    }

    public function restore(User $user, Profile $profile): bool
    {
        return true;
    }

    public function forceDelete(User $user, Profile $profile): bool
    {
        return true;
    }
}
