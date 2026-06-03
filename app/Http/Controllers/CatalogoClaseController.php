<?php

namespace App\Http\Controllers;

use App\Models\CatalogoClase;
use Illuminate\Http\Request;

class CatalogoClaseController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoClase::with('subclases')->get());
    }

    public function show($id)
    {
        $clase = CatalogoClase::with(['subclases', 'personajes'])->findOrFail($id);
        return response()->json($clase);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:catalogo_clases',
            'dado_golpe' => 'required|string',
        ]);

        $clase = CatalogoClase::create($validated);
        return response()->json($clase, 201);
    }

    public function update(Request $request, $id)
    {
        $clase = CatalogoClase::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:catalogo_clases,nombre,' . $id,
            'dado_golpe' => 'sometimes|string',
        ]);

        $clase->update($validated);
        return response()->json($clase);
    }

    public function destroy($id)
    {
        $clase = CatalogoClase::findOrFail($id);
        $clase->delete();
        return response()->json(['message' => 'Clase eliminada']);
    }
}
