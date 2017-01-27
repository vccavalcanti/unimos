<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContratanteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()){
            return true;
        }
        else
        {
            return false;
        }
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
            'cpf' => 'required|digits_between:11,11|numeric',
            'rg'  => 'required|digits_between:9,9|numeric',
            'dob' => 'required', 'date',
            'user_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatorio',
            'cpf.digits_between' => 'O campo CPF necessita de 11 digitos',
            'cpf.numeric' => 'O campo CPF deve ser preenchido apenas com numeros',
            'rg.required' => 'O campo RG é obrigatorio',
            'rg.digits_between' => 'O campo RG necessita de 9 digitos',
            'rg.numeric' => 'O campo RG deve ser preenchido apenas com numeros',
            'dob.required' => 'Selecione a data de nascimento',
            'dob.date' => 'Escolher data de nascimento date',
            'user_id.required' => 'Necessario estar logado com usuario ativo para vincular perfil de professor',

        ];
    }
}
