<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaRequest extends FormRequest
    {
        public function rules()
        {
            return [
                'nombre' => 'required|string|max:100',
                'descripcion' => 'required|string',
                'nivel' => 'required|integer',
                'presupuesto' => 'required|numeric',
            ];
        }
    }
