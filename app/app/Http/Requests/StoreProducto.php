<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
            'name' => 'required',
            'nsueco' => 'required',
            'montaje' => 'required',
            'tipo' => 'required|max:3',
            'caract' => 'required',
            'instrucc' => 'required',
            'descrip' => 'required'
        ];
    }

    public function attributes(){
        return [
            'name' => 'nombre del producto',
            'nsueco' => 'nombre sueco',
            'caract' => 'caracteristicas',
            'instrucc' => 'instrucciones',
            'descrip' => 'descripcion',
        ];
    }
}
