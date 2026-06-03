<?php

namespace Database\Seeders;

use App\Models\CatalogoProficienciaEquipo;
use Illuminate\Database\Seeder;

class CatalogoProficienciaEquipoSeeder extends Seeder
{
    public function run(): void
    {
        $proficiencias = [
            // Armas Simples
            ['nombre' => 'Garrote', 'tipo' => 'arma', 'descripcion' => 'Arma simple de melee'],
            ['nombre' => 'Daga', 'tipo' => 'arma', 'descripcion' => 'Arma simple de melee'],
            ['nombre' => 'Lanza Corta', 'tipo' => 'arma', 'descripcion' => 'Arma simple de melee'],
            ['nombre' => 'Arco Corto', 'tipo' => 'arma', 'descripcion' => 'Arma simple a distancia'],

            // Armas Marciales
            ['nombre' => 'Espada Larga', 'tipo' => 'arma', 'descripcion' => 'Arma marcial de melee'],
            ['nombre' => 'Espada Bastarda', 'tipo' => 'arma', 'descripcion' => 'Arma marcial versátil'],
            ['nombre' => 'Hacha de Batalla', 'tipo' => 'arma', 'descripcion' => 'Arma marcial de melee'],
            ['nombre' => 'Arco Largo', 'tipo' => 'arma', 'descripcion' => 'Arma marcial a distancia'],
            ['nombre' => 'Ballesta Manual', 'tipo' => 'arma', 'descripcion' => 'Arma marcial a distancia'],

            // Armaduras
            ['nombre' => 'Armadura Ligera', 'tipo' => 'armadura', 'descripcion' => 'Cuero, cuero endurecido'],
            ['nombre' => 'Armadura Media', 'tipo' => 'armadura', 'descripcion' => 'Cota de malla, piel de dragón'],
            ['nombre' => 'Armadura Pesada', 'tipo' => 'armadura', 'descripcion' => 'Placa, armadura completa'],

            // Herramientas
            ['nombre' => 'Herramientas de Ladrón', 'tipo' => 'herramienta', 'descripcion' => 'Ganzúas y kit de escape'],
            ['nombre' => 'Herramientas de Herrador', 'tipo' => 'herramienta', 'descripcion' => 'Herrería y trabajos de metal'],
            ['nombre' => 'Kit de Alquimista', 'tipo' => 'herramienta', 'descripcion' => 'Preparación de pociones y venenos'],
        ];

        foreach ($proficiencias as $prof) {
            CatalogoProficienciaEquipo::create($prof);
        }
    }
}
