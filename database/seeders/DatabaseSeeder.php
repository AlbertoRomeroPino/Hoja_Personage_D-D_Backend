<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CatalogoAlineamientoSeeder::class,
            CatalogoRazaSeeder::class,
            CatalogoSubrazaSeeder::class,
            CatalogoTransfondoSeeder::class,
            CatalogoHabilidadSeeder::class,
            CatalogoObjetoSeeder::class,
            CatalogoConjuroSeeder::class,
            PersonajeSeeder::class,
            AtributoPersonajeSeeder::class,
            CompetenciaHabilidadSeeder::class,
            InventarioSeeder::class,
            ConjuroConocidoSeeder::class,
            CatalogoCondicionSeeder::class,
            CatalogoClaseSeeder::class,
            CatalogoSubclaseSeeder::class,
            CatalogoRasgoSeeder::class,
            CatalogoIdiomaSeeder::class,
            CatalogoProficienciaEquipoSeeder::class,
        ]);
    }
}
