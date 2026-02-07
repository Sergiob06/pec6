<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titol'=>'required|min:5',
            'contingut'=>'required|min:50',
        ];
    }

    public function messages()
{
    return [
        'titol.required' => 'El título del post es obligatorio',
        'titol.min' => 'El título debe tener al menos 5 caracteres',

        'contingut.required' => 'El contenido del post es obligatorio',
        'contingut.min' => 'El contenido debe tener al menos 50 caracteres',
    ];
}

}
