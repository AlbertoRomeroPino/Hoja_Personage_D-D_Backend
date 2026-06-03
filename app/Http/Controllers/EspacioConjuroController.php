<?php

namespace App\Http\Controllers;

use App\Models\EspacioConjuro;
use Illuminate\Http\Request;

class EspacioConjuroController extends Controller
{
    public function index()
    {
        return response()->json(EspacioConjuro::with('personaje')->get());
    }

    public function show($id)
    {
        $espacio = EspacioConjuro::with('personaje')->findOrFail($id);
        return response()->json($espacio);
    }

    public function porPersonaje($personaje_id)
    {
        $espacios = EspacioConjuro::where('personaje_id', $personaje_id)
            ->orderBy('nivel_conjuro')
            ->get();
        return response()->json($espacios);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'personaje_id' => 'required|exists:personajes,id',
            'nivel_conjuro' => 'required|integer|min:0|max:9',
            'espacios_maximos' => 'required|integer|min:0',
            'espacios_gastados' => 'nullable|integer|min:0',
        ]);

        $espacio = EspacioConjuro::create($validated);
        return response()->json($espacio, 201);
    }

    public function update(Request $request, $id)
    {
        $espacio = EspacioConjuro::findOrFail($id);

        $validated = $request->validate([
            'espacios_maximos' => 'sometimes|integer|min:0',
            'espacios_gastados' => 'sometimes|integer|min:0',
        ]);

        $espacio->update($validated);
        return response()->json($espacio);
    }

    public function gastarEspacio($id)
    {
        $espacio = EspacioConjuro::findOrFail($id);

        if ($espacio->espacios_gastados < $espacio->espacios_maximos) {
            $espacio->espacios_gastados++;
            $espacio->save();
        }

        return response()->json($espacio);
    }

    public function recuperarEspacio($id)
    {
        $espacio = EspacioConjuro::findOrFail($id);

        if ($espacio->espacios_gastados > 0) {
            $espacio->espacios_gastados--;
            $espacio->save();
        }

        return response()->json($espacio);
    }

    public function destroy($id)
    {
        $espacio = EspacioConjuro::findOrFail($id);
        $espacio->delete();
        return response()->json(['message' => 'Espacio de conjuro eliminado']);
    }
}
