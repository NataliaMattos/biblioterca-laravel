<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
            'isbn' => 'required',
            'titulo' => 'required',
            'ano' => 'required|max:4',
            'editora' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo :attribute é obrigatório ',
            'max' => 'Campo :attribute deve ter no máximo :max caracteres'
        ];
    }
}
