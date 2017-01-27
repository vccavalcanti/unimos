<?php

namespace App\Policies;

use App\Contratante;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class ContratantePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function modify(User $user, Contratante $contratante){
        return $user->id === $contratante->user_id;
    }
}
