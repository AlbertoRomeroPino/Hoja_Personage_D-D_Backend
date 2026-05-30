<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtributoPersonajeSeeder extends Seeder
{
    public function run(): void
    {
        $boboboId = DB::table('personajes')->where('nombre', 'Bobobo-Bo Bo-bobo')->value('id');
        $buzzId = DB::table('personajes')->where('nombre', 'Buzz')->value('id');

        if ($boboboId) {
            DB::table('atributos_personaje')->updateOrInsert([
                'personaje_id' => $boboboId,
            ], [
                'fuerza' => 13,
                'destreza' => 15,
                'constitucion' => 14,
                'inteligencia' => 13,
                'sabiduria' => 12,
                'carisma' => 20,
                'salvacion_fuerza' => true,
                'salvacion_destreza' => true,
                'salvacion_constitucion' => false,
                'salvacion_inteligencia' => false,
                'salvacion_sabiduria' => false,
                'salvacion_carisma' => false,
            ]);
        }

        if ($buzzId) {
            DB::table('atributos_personaje')->updateOrInsert([
                'personaje_id' => $buzzId,
            ], [
                'fuerza' => 12,
                'destreza' => 13,
                'constitucion' => 13,
                'inteligencia' => 15,
                'sabiduria' => 19,
                'carisma' => 18,
                'salvacion_fuerza' => false,
                'salvacion_destreza' => false,
                'salvacion_constitucion' => false,
                'salvacion_inteligencia' => true,
                'salvacion_sabiduria' => true,
                'salvacion_carisma' => false,
            ]);
        }
    }
}
