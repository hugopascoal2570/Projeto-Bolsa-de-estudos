<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'name' => 'required|min:4|max:100',


        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'por favor insira um nome para o curso',
            'name.min' => 'insira pelo menos 3 caracteres',
            'name.max' => 'você só pode inserir 100 caracteres',
        ];
    }
}
