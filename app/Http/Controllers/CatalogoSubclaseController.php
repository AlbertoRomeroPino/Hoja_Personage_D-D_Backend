<?php

namespace App\Http\Controllers;

use App\Models\CatalogoSubclase;
use Illuminate\Http\Request;

class CatalogoSubclaseController extends Controller
{
    public function index()
    {
        return response()->json(CatalogoSubclase::with('clase')->get());
    }

    public function show($id)
    {
        $subclase = CatalogoSubclase::with('clase')->findOrFail($id);
        return response()->json($subclase);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'clase_id' => 'required|exists:catalogo_clases,id',
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
        ]);

        $subclase = CatalogoSubclase::create($validated);
        return response()->json($subclase, 201);
    }

    public function update(Request $request, $id)
    {
        $subclase = CatalogoSubclase::findOrFail($id);

        $validated = $request->validate([
            'clase_id' => 'sometimes|exists:catalogo_clases,id',
            'nombre' => 'sometimes|string',
            'descripcion' => 'nullable|string',
        ]);

        $subclase->update($validated);
        return response()->json($subclase);
    }

    public function destroy($id)
    {
        $subclase = CatalogoSubclase::findOrFail($id);
        $subclase->delete();
        return response()->json(['message' => 'Subclase eliminada']);
    }
}
