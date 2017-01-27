<?php

namespace App\Policies;

use App\User;
use App\UnidadeEnsino;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnidadeEnsinoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function modify(User $user, UnidadeEnsino $unidade){
        return $user->id === $unidade->user_id;
    }
}
