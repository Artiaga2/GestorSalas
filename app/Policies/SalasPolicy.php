<?php

namespace App\Policies;

use App\User;
use App\Salas;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the salas.
     *
     * @param  \App\User  $user
     * @param  \App\Salas  $salas
     * @return mixed
     */
    public function view(User $user, Salas $salas)
    {
        //
    }

    /**
     * Determine whether the user can create salas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the salas.
     *
     * @param  \App\User  $user
     * @param  \App\Salas  $salas
     * @return mixed
     */
    public function update(User $user, Salas $salas)
    {
        //
    }

    /**
     * Determine whether the user can delete the salas.
     *
     * @param  \App\User  $user
     * @param  \App\Salas  $salas
     * @return mixed
     */
    public function delete(User $user, Salas $salas)
    {
        return $user->id == $salas->user_id;
    }
}
