<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nombre' => 'string|max:100',
            'descripcion' => 'string',
            'nivel' => 'integer',
            'presupuesto' => 'numeric',
        ];
    }
}
