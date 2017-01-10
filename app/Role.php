<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\User;

class Role extends Model
{
    public function users() {
        //return $this->belongsToMany('App\User');
        return $this->belongsToMany(User::class, 'user_role', 'role_id', 'user_id'); //classe, tabela pivo, FK, OtherKey,relation - opcional


    }
}
