<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocentesRequest extends FormRequest
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
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'abreviatura' => 'required|max:10',
            'identificacion' => 'required|numeric|unique:docentes|max:9999999999999',
            'tipo_identificacion' => 'required|min:3|max:9',
            //'email_personal' => 'email|max:255',
            'email_institucional' => 'required|email|max:255',
            'celular' => 'required|numeric|max:9999999999',
            'telefono' => 'required|numeric|max:999999',
            'nacionalidad' => 'required|max:15',
            'residencia' => 'required|max:20',
            'direccion' => 'required|max:100',
            'tipo_contrato' => 'required|max:15',
            'estado' => 'required|max:10'
        ];
    }
}
