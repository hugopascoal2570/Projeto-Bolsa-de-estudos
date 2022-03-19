<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'cpf' => 'required|unique:users',
            'phone' => 'required',
            'birthdate' => 'required',
            'nacionalidade' => 'required',
            'photo' => 'required'

        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'por favor insira um nome ',
            'name.min' => 'insira pelo menos 3 caracteres',
            'name.max' => 'você só pode inserir 100 caracteres',
            'email.required' => 'você deve inserir um  email',
            'email.unique' => 'esse email já está cadastrado em nossa base de dados',
            'email.email' => 'insira um usuário válido',
            'password.required' => 'insira uma senha',
            'cpf.required' => 'insira um cpf',
            'cpf.unique' => 'cpf já cadastrado',
            'phone.required' => 'informe um telefone',
            'birthdate.required' => 'informe sua data de aniversário',
            'nacionalidade.required' => 'informe sua nacionalidade',
            'photo.required' => 'por favor envie uma foto sua'

        ];
    }
}
