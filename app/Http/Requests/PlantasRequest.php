<?php

namespace projetoIrrigacao\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantasRequest extends FormRequest {
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
            'nome' => 'required|max:255',
            'apelido' => 'required|max:255',
            'imagem' => 'image|nullable'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute é obrigatório.',
            'imagem.image' => 'O campo :attribute deve ser uma imagem válida.'
        ];
    }
}
