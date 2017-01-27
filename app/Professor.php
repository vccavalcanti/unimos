<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'rg', 'cpf', 'rua', 'sexo','descricao','dob','numero', 'cep', 'complemento', 'bairro', 'cidade', 'uf_id', 'telefone',
        'pis', 'user_id' , 'articulador_id'
    ];

    protected $table = 'professores';

    protected $dates = [
    'dob'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

//    public function getDobAttribute($value)
//    {
//        $value = new \Carbon\Carbon($value);
//        return $value;
//        // Now modify and return the date
//    }

}
