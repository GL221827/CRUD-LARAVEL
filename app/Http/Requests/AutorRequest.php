<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //validacion antes que se ejecute el metodo store o update en el controller
        'codigo_autor' => 'required|string|max:6|unique:autores,codigo_autor,' . $this->codigo_autor . ',codigo_autor',
        'nombre_autor' => 'required|string|max:50',
        'nacionalidad' => 'required|string|max:50',
        ];
    }
}
