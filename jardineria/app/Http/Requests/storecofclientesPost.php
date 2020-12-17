<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storecofclientesPost extends FormRequest
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
            'Codigo' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
            'Ciudad' => 'required',
            'Pais' => 'required',
            'CodigoPostal' => 'required',
            'LimiteCredito' => 'required',
            'userid' => 'required',

        ];
    }
}
