<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UnidadeEnsinoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        if(Auth::user()){
//            return true;
//        }
//        else
//        {
//            return false;
//        }
        return true;
    }

    public function forbiddenResponse()
    {
        abort(403);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_fantasia' => ['required'],
            'nome_pj' => ['required'],
            'cnpj' => ['required', 'numeric'],
            'telefone' => ['required', 'numeric'],
            'rua' => ['required'],
            'numero' => ['required'],
            'cep' => ['required'],
            'bairro' => ['required'],
            'cidade' => ['required'],
            'uf_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],


        ];
    }

    public function messages()
    {
        return [
            'nome_fantasia.required' => 'O campo nome fantasia é obrigatorio',
            'nome_pj.required' => 'O campo nome PJ é obrigatorio',
            'telefone.required' => 'O campo nome PJ é obrigatorio',
            'rua.required' => 'O campo Rua é obrigatorio',
            'numero.required' => 'O campo Numero PJ é obrigatorio',
            'cep.required' => 'O campo CEP é obrigatorio',
            'bairro.required' => 'O campo Bairro é obrigatorio',
            'cidade.required' => 'O campo Cidade é obrigatorio',
            'cnpj.required' => 'favor preencher o CNPJ"',
            'cnpj.numeric' => 'o campo CNPJ deve ser preenchido apenas com numeros',
            'uf_id.required' => 'favor escolher o Estado',
            'user_id.required' => 'Erro ao vincular perfil ao usuario',
            'user_id.numeric' => 'Erro ao vincular perfil ao usuario',
            'descricao.required' => 'Preencher descricao do espaco'
        ];
    }
}
