<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Professor;

class ProfessorPolicy
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


    public function modify(User $user, Professor $professor){
        //return $user->id === $professor->user_id;
        return $user->owns($professor);
    }
}
