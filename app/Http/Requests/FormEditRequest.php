<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEditRequest extends FormRequest
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
        return [
            'file' => 'nullable',
            'name' => 'required',
            'email' => 'required|email',
        ];
    }


    public function messages(){
        return
        [

            'name.required' => 'O campo nome precisa estar preenchido',
            'email.required' => 'O campo email precisa estar preenchido',
            'email.email' => 'O email precisa ter um formato valido email@examplo.com',
            
        ];
    }
}
