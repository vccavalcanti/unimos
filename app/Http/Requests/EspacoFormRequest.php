<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Support\Facades\Auth;

class EspacoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {    
        if($this->user()->hasRole(['unidadeEnsino', 'articulador', 'superadministrador']))
        {
            return true;
        }else {
            $this->error = 'Desculpe, voce nao possui permissão para adicionar espaços';
            return false;
        }
    }

    /**
     * This method will be invoked if authorize() fails
     */
    public function forbiddenResponse()
    {
        //return redirect('error')->with('error_message', $this->error);
        //return response(view('errors.403'), 403);
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
            'nome' => ['required', 'min:5'],
            'tipo_cobranca' => ['required'],
            'valor' => ['required', 'numeric'],
            'unidadeEnsino_id' => ['required'],
            'descricao' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.min' => 'Nome deve ter ao menos 5 caracteres',
            'valor.required' => 'favor preencher o campo "valor"',
            'valor.numeric' => 'o campo valor precisa ser um valor numerico',
            'unidadeEnsino_id.required' => 'escolher a Unidade de Ensino a qual pertence o espaço',
            'descricao.required' => 'Preencher descricao do espaco'
        ];
    }
    
}
