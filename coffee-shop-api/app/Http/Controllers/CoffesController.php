<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoffesRequest;
use App\Models\Coffe;
use Illuminate\Http\Request;

class CoffesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coffes = Coffe::all();
        return view('coffes.index', compact('coffes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coffes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoffesRequest $request)
    {
        Coffe::create($request->all());

        // Cambiar la URL a plural para redireccionar correctamente
        return redirect('/coffes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('coffes.show', [
            'coffe' => Coffe::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('coffes.edit', [
            'coffe' => Coffe::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CoffesRequest $request, string $id)
    {
        $coffe = Coffe::find($id);
        $coffe->update($request->all());

        // Cambiar la URL a plural para redireccionar correctamente
        return redirect('/coffes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coffe = Coffe::find($id);

        $coffe->delete();

        // Cambiar la URL a plural para redireccionar correctamente
        return redirect('/coffes');
    }
}

