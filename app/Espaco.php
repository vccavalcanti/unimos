<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UnidadeEnsino;

class Espaco extends Model
{

    protected $fillable = [
        'nome', 'descricao', 'tipo_cobranca', 'valor', 'unidadeEnsino_id'
    ];

    public function UnidadeEnsino(){
        return $this->belongsTo(UnidadeEnsino::class, 'unidadeEnsino_id');
    }
    
    public function aula(){
        return $this->hasMany(Aula::class);
    }
}
