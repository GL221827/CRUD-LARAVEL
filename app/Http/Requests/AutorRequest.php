<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
{
    //Determina si el usuario está autorizado para hacer esta solicitud.
    public function authorize(): bool
    {
        //En este caso siempre retorna true porque no se requiere autenticación para validar el request
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
            //validacion antes que se ejecute el metodo update o create en el controller
        'codigo_autor' => 'required|string|max:6|unique:autores,codigo_autor,' . $this->codigo_autor . ',codigo_autor',
        'nombre_autor' => 'required|string|max:50',
        'nacionalidad' => 'required|string|max:50',
        ];
    }
}
