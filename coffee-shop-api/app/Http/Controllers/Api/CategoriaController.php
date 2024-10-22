<?php

namespace App\Http\Controllers\Api;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string',
            'nivel' => 'required|integer',
            'presupuesto' => 'required|numeric',
        ]);

        $categoria = Categoria::create($validated);

        return response()->json($categoria, 201);
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function update(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:100',
            'descripcion' => 'string',
            'nivel' => 'integer',
            'presupuesto' => 'numeric',
        ]);

        $categoria->update($validated);

        return response()->json($categoria);
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
