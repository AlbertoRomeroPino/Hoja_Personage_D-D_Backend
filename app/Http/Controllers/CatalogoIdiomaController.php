<?php

namespace App\Http\Controllers;

use App\Models\CatalogoIdioma;
use Illuminate\Http\Request;

class CatalogoIdiomaController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoIdioma::all());
    }

    public function show($id)
    {
        $idioma = CatalogoIdioma::with('personajes')->findOrFail($id);
        return response()->json($idioma);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:catalogo_idiomas',
        ]);

        $idioma = CatalogoIdioma::create($validated);
        return response()->json($idioma, 201);
    }

    public function update(Request $request, $id)
    {
        $idioma = CatalogoIdioma::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:catalogo_idiomas,nombre,' . $id,
        ]);

        $idioma->update($validated);
        return response()->json($idioma);
    }

    public function destroy($id)
    {
        $idioma = CatalogoIdioma::findOrFail($id);
        $idioma->delete();
        return response()->json(['message' => 'Idioma eliminado']);
    }
}
