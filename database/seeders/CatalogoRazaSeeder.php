<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoRazaSeeder extends Seeder
{
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('catalogo_razas')->upsert([
            ['nombre' => 'Humano', 'velocidad_base' => 30, 'descripcion' => 'Versátil y adaptable, con fuerte ambición.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Elfo', 'velocidad_base' => 30, 'descripcion' => 'Ágil y perceptivo, con afinidad por la naturaleza y la magia.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Enano', 'velocidad_base' => 25, 'descripcion' => 'Robusto y resistente, experto en forja y defensa.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Mediano', 'velocidad_base' => 25, 'descripcion' => 'Pequeño, escurridizo y con gran suerte.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Tiflin', 'velocidad_base' => 30, 'descripcion' => 'Raza con herencia infernal y características carismáticas.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['nombre' => 'Vespois', 'velocidad_base' => 30, 'descripcion' => 'Raza con rasgos insectoides y gran afinidad con la naturaleza.', 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ], ['nombre'], ['velocidad_base', 'descripcion', 'created_at', 'updated_at']);
    }
}
