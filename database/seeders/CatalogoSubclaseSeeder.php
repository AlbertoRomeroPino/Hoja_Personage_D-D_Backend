<?php

namespace Database\Seeders;

use App\Models\CatalogoSubclase;
use App\Models\CatalogoClase;
use Illuminate\Database\Seeder;

class CatalogoSubclaseSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener IDs de clases (asumiendo que CatalogoClaseSeeder ya corrió)
        $subclases = [
            // Bárbaro
            ['clase_id' => CatalogoClase::where('nombre', 'Bárbaro')->first()->id ?? 1, 'nombre' => 'Ruta del Berserker', 'descripcion' => 'Ataque temerario sin límites'],
            ['clase_id' => CatalogoClase::where('nombre', 'Bárbaro')->first()->id ?? 1, 'nombre' => 'Ruta del Campeón Tribal', 'descripcion' => 'Conexión con espíritus animales'],

            // Bardo
            ['clase_id' => CatalogoClase::where('nombre', 'Bardo')->first()->id ?? 2, 'nombre' => 'Colegio de la Elocuencia', 'descripcion' => 'Maestría en manipulación verbal'],
            ['clase_id' => CatalogoClase::where('nombre', 'Bardo')->first()->id ?? 2, 'nombre' => 'Colegio de los Espíritus', 'descripcion' => 'Conexión con los reinos sobrenaturales'],

            // Mago
            ['clase_id' => CatalogoClase::where('nombre', 'Mago')->first()->id ?? 10, 'nombre' => 'Escuela de Evocación', 'descripcion' => 'Maestría en magia de fuego y daño'],
            ['clase_id' => CatalogoClase::where('nombre', 'Mago')->first()->id ?? 10, 'nombre' => 'Escuela de Ilusión', 'descripcion' => 'Experto en engaños mágicos'],
            ['clase_id' => CatalogoClase::where('nombre', 'Mago')->first()->id ?? 10, 'nombre' => 'Escuela de Abjuración', 'descripcion' => 'Maestría en protecciones mágicas'],

            // Monje
            ['clase_id' => CatalogoClase::where('nombre', 'Monje')->first()->id ?? 11, 'nombre' => 'Camino de la Mano Abierta', 'descripcion' => 'Maestría en combate desarmado'],
            ['clase_id' => CatalogoClase::where('nombre', 'Monje')->first()->id ?? 11, 'nombre' => 'Camino de la Sombra', 'descripcion' => 'Sigiloso y mortal'],

            // Pícaro
            ['clase_id' => CatalogoClase::where('nombre', 'Pícaro')->first()->id ?? 12, 'nombre' => 'Asesino', 'descripcion' => 'Especialista en matar sin ser visto'],
            ['clase_id' => CatalogoClase::where('nombre', 'Pícaro')->first()->id ?? 12, 'nombre' => 'Arcano', 'descripcion' => 'Toque mágico del ladrón'],
        ];

        foreach ($subclases as $subclase) {
            if ($subclase['clase_id']) {
                CatalogoSubclase::create($subclase);
            }
        }
    }
}
