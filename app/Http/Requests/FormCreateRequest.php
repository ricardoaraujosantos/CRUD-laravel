<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return 
        [
            'file' => 'nullable',
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'cpf' => 'required|unique:users|min:14',
            'password' => 'required|min:8',     
        ];
    }

    public function messages(){
        return
        [
            'name.required' => 'O campo nome precisa estar preenchido',
            'email.required' => 'O campo email precisa estar preenchido',
            'email.unique' => 'O e-mail informado ja esta cadastrado',
            'email.email' => 'O email precisa ter um formato valido email@examplo.com',
            'cpf.required' => 'O campo CPF precisa estar preenchido',
            'cpf.unique' => 'O CPF informado ja esta cadastrado',
            'cpf.min' => 'CPF invalido ou incompleto',
            'password.min' => 'A senha tem que conter no minimo 8 caracteres',
            'password.required' => 'O campo senha precisa estar preenchido',

        ];
    }
}
