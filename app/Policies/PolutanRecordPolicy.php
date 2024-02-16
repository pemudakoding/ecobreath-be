<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\PolutanRecord;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PolutanRecordPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(roles: Role::volunteer->value);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PolutanRecord $polutanRecord): bool
    {
        return $user->hasRole(roles: Role::volunteer->value) && $polutanRecord->user_id === $user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(roles: Role::volunteer->value);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PolutanRecord $polutanRecord): bool
    {
        return $user->hasRole(roles: Role::volunteer->value) && $polutanRecord->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PolutanRecord $polutanRecord): bool
    {
        return $user->hasRole(roles: Role::volunteer->value) && $polutanRecord->user_id === $user->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PolutanRecord $polutanRecord): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PolutanRecord $polutanRecord): bool
    {
        //
    }
}
