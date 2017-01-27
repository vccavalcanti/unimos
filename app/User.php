<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use App\UnidadeEnsino;
use App\Espaco;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }


    public function UnidadeEnsino(){
        return $this->hasMany(UnidadeEnsino::class);
    }

    public function Professor(){
        return $this->hasOne(Professor::class);
    }

    public function Contratante(){
        return $this->hasOne(Contratante::class);
    }

    public function Espacos()
    {
        //Relacao entre User e Espaco atraves da unidade de ensino
        //parametros: 1 - entidade final do relacionamento, 2 - entidade intermediaria, 3 - FK da tabela intermediaria que liga ao ID de users
        // 4 - fk da tabela final que liga a tabela intermediaria, 5 - pk da tabela users (que eh referenciada pela fk da intermediaria(
        return $this->hasManyThrough(Espaco::class, UnidadeEnsino::class, 'user_id', 'unidadeEnsino_id', 'id');
    }

}
