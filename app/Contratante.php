<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratante extends Model
{
    protected $dates = [
        'dob'
    ];
    
    protected $fillable = [
        'rg', 'cpf', 'rua', 'sexo','dob','numero', 'cep', 'complemento', 'bairro', 'cidade', 'uf_id', 'telefone',
          'user_id', 'preferencia_contato'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    
}
