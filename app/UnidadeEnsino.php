<?php

namespace App;

use App\Espaco;
use Illuminate\Database\Eloquent\Model;

class UnidadeEnsino extends Model
{
    protected $table = 'unidades_ensino';

    protected $fillable = [
        'nome_fantasia', 'nome_pj', 'rua', 'numero', 'cep', 'complemento', 'bairro', 'cidade', 'uf_id', 'telefone',
        'cnpj', 'tipo', 'user_id'
    ];

    public function Espaco(){
        return $this->hasMany(Espaco::class,'unidadeEnsino_id');
    }
    
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function aulas()
    {
        return $this->hasManyThrough(Aula::class, Espaco::class, 'unidadeEnsino_id', 'espaco_id', 'id');
    }
    
}
