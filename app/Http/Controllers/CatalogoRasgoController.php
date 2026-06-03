<?php

namespace App\Http\Controllers;

use App\Models\CatalogoRasgo;
use Illuminate\Http\Request;

class CatalogoRasgoController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoRasgo::all());
    }

    public function show($id)
    {
        $rasgo = CatalogoRasgo::with('personajes')->findOrFail($id);
        return response()->json($rasgo);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:catalogo_rasgos',
            'descripcion' => 'nullable|string',
            'tipo' => 'required|in:rasgo,dote',
        ]);

        $rasgo = CatalogoRasgo::create($validated);
        return response()->json($rasgo, 201);
    }

    public function update(Request $request, $id)
    {
        $rasgo = CatalogoRasgo::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:catalogo_rasgos,nombre,' . $id,
            'descripcion' => 'nullable|string',
            'tipo' => 'sometimes|in:rasgo,dote',
        ]);

        $rasgo->update($validated);
        return response()->json($rasgo);
    }

    public function destroy($id)
    {
        $rasgo = CatalogoRasgo::findOrFail($id);
        $rasgo->delete();
        return response()->json(['message' => 'Rasgo eliminado']);
    }
}
