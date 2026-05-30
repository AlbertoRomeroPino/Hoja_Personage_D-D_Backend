<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    public function run(): void
    {
        $boboboId = DB::table('personajes')->where('nombre', 'Bobobo-Bo Bo-bobo')->value('id');
        $buzzId = DB::table('personajes')->where('nombre', 'Buzz')->value('id');

        $timestamp = Carbon::now();
        $objects = DB::table('catalogo_objetos')->whereIn('nombre', [
            'Bo (De Bobobo)',
            'Mochila (Afro)',
            'Cantimplora (Afro)',
            'Mechero',
            'Utensilios de cocina',
            '10 Antorchas',
            'Ración de comida para 10 días',
            'Cuerda de 40 Pies',
            'Kit de disfraces',
            'Lanza',
            'Escudo +2CA',
            'Cota de malla 13CA',
            'Mochila',
            'Petate',
            'Yesquero',
            'Cuerda de cáñamo de 50 Pies',
            'Canalizador druidico',
            'Suministro de alquimista',
        ])->pluck('id', 'nombre');

        if ($boboboId) {
            $entries = [];

            foreach (['Bo (De Bobobo)' => [1, true], 'Mochila (Afro)' => [1, false], 'Cantimplora (Afro)' => [1, false], 'Mechero' => [1, false], 'Utensilios de cocina' => [1, false], '10 Antorchas' => [10, false], 'Ración de comida para 10 días' => [1, false], 'Cuerda de 40 Pies' => [1, false], 'Kit de disfraces' => [1, false]] as $name => $data) {
                if (isset($objects[$name])) {
                    $entries[] = ['personaje_id' => $boboboId, 'objeto_id' => $objects[$name], 'cantidad' => $data[0], 'equipado' => $data[1], 'created_at' => $timestamp, 'updated_at' => $timestamp];
                }
            }

            foreach ($entries as $entry) {
                DB::table('inventario')->updateOrInsert([
                    'personaje_id' => $entry['personaje_id'],
                    'objeto_id' => $entry['objeto_id'],
                ], $entry);
            }
        }

        if ($buzzId) {
            $entries = [];

            foreach ([
                'Lanza' => [1, true],
                'Escudo +2CA' => [1, true],
                'Cota de malla 13CA' => [1, true],
                'Mochila' => [1, false],
                'Petate' => [1, false],
                'Utensilios de cocina' => [1, false],
                'Yesquero' => [1, false],
                '10 Antorchas' => [10, false],
                'Ración de comida para 10 días' => [1, false],
                'Cantimplora (Afro)' => [1, false],
                'Cuerda de cáñamo de 50 Pies' => [1, false],
                'Canalizador druidico' => [1, false],
                'Suministro de alquimista' => [1, false],
            ] as $name => $data) {
                if (isset($objects[$name])) {
                    $entries[] = ['personaje_id' => $buzzId, 'objeto_id' => $objects[$name], 'cantidad' => $data[0], 'equipado' => $data[1], 'created_at' => $timestamp, 'updated_at' => $timestamp];
                }
            }

            foreach ($entries as $entry) {
                DB::table('inventario')->updateOrInsert([
                    'personaje_id' => $entry['personaje_id'],
                    'objeto_id' => $entry['objeto_id'],
                ], $entry);
            }
        }
    }
}
