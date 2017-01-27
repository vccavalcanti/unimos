<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Objeto;

class tipo_aula extends Model
{
    public function objeto(){
        return $this->hasMany(Objeto::class);
    }
}
