<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storemgClientesPost extends FormRequest
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
            'codigo' => 'required'
            'nombre' => 'required'
            'telefono' => 'required'
            'direccion' => 'required'
            'ciudad' => 'required'
            'pais' => 'required'
            'codigopostal' => 'required'
            'limitecredito' => 'required'
            'userid' => 'required'
        ];
    }
}
