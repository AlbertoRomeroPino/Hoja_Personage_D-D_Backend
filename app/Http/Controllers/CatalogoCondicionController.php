<?php

namespace App\Http\Controllers;

use App\Models\CatalogoCondicion;
use Illuminate\Http\Request;

class CatalogoCondicionController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoCondicion::all());
    }

    public function show($id)
    {
        $condicion = CatalogoCondicion::with('personajes')->findOrFail($id);
        return response()->json($condicion);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:catalogo_condiciones',
            'descripcion' => 'nullable|string',
        ]);

        $condicion = CatalogoCondicion::create($validated);
        return response()->json($condicion, 201);
    }

    public function update(Request $request, $id)
    {
        $condicion = CatalogoCondicion::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:catalogo_condiciones,nombre,' . $id,
            'descripcion' => 'nullable|string',
        ]);

        $condicion->update($validated);
        return response()->json($condicion);
    }

    public function destroy($id)
    {
        $condicion = CatalogoCondicion::findOrFail($id);
        $condicion->delete();
        return response()->json(['message' => 'Condición eliminada']);
    }
}
