<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserCad extends FormRequest
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
            'cpf' => 'required|unique:users',
            'phone' => 'required',
            'birthdate' => 'required|date_format:Y-m-d|after_or_equal:1920-01-01',
            'nacionalidade' => 'required',
            'image' => 'required'

        ];
    }
    public function messages()
    {

        return [
            'name.required' => 'por favor insira um nome ',
            'name.min' => 'insira pelo menos 3 caracteres',
            'name.max' => 'você só pode inserir 100 caracteres',
            'cpf.required' => 'insira um cpf',
            'cpf.unique' => 'cpf já cadastrado',
            'phone.required' => 'informe um telefone',
            'birthdate.required' => 'informe sua data de aniversário',
            'birthdate.date' => 'informe uma data válida',
            'nacionalidade.required' => 'informe sua nacionalidade',
            'image.required' => 'por favor envie uma foto sua'

        ];
    }
}
