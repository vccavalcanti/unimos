<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tipo_aula;

class Aula extends Model
{   
    public function objeto(){
        return $this->belongsTo(Objeto::class);
    }

    public function professor(){
        return $this->belongsTo(User::class);
    }

    public function espaco(){
        return $this->belongsTo(Espaco::class);
    }
}
