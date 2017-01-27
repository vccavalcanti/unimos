<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tipo_aula;


class Objeto extends Model
{
    public function tipo_aula(){
        return $this->belongsTo(Tipo_aula::class);
    }

    public function aula(){
        return $this->hasMany(Aula::class);
    }
}
