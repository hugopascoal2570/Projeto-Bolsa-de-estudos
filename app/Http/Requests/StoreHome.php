<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHome extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
        ];
    }

    public function messages()
    {

        return [
            'password.required' => 'por favor insira um nome ',
            'password.min' => 'insira pelo menos 3 caracteres',
            'password.max' => 'você só pode inserir 50 caracteres',
            'email.required' => 'você deve inserir um  email',
            'email.unique' => 'esse email já está cadastrado em nossa base de dados',
            'email.email' => 'insira um usuário válido',


        ];
    }
}
