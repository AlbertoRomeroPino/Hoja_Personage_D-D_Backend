<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoHabilidadSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_habilidades')->upsert([
            ['nombre' => 'Atletismo', 'atributo_regente' => 'Fuerza', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Perspicacia', 'atributo_regente' => 'Sabiduría', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Medicina', 'atributo_regente' => 'Sabiduría', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Naturaleza', 'atributo_regente' => 'Inteligencia', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Persuasión', 'atributo_regente' => 'Carisma', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Religión', 'atributo_regente' => 'Sabiduría', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Trato con animales', 'atributo_regente' => 'Sabiduría', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['atributo_regente', 'created_at', 'updated_at']);
    }
}
