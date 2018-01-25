<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSalaRequest extends FormRequest
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
            'nombre' => [
                'required', 'max:40'
            ],
            'tipo' => [
                'required', 'max:120'
            ],
            'capacidad' => [
                'required', 'max:1000'
            ],
            'disponibilidad' => [
                'required'
            ],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'La sala debe tener un nombre',
            'nombre.max' => 'Nombre muy largo',
            'tipo.required' => 'La sala debe tener un Tipo',
            'tipo.max' => 'Tipo muy largo',
            'capacidad.required' => 'La sala debe tener una capacidad',
            'capacidad.max' => 'Capacidad muy grande',
            'disponibilidad.required' => 'La sala debe tener una disponibilidad'
        ];
    }
}
