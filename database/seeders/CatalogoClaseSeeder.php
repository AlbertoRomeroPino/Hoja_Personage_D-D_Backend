<?php

namespace Database\Seeders;

use App\Models\CatalogoClase;
use App\Models\CatalogoSubclase;
use Illuminate\Database\Seeder;

class CatalogoClaseSeeder extends Seeder
{
    public function run(): void
    {
        $clases = [
            ['nombre' => 'Bárbaro', 'dado_golpe' => 'd12'],
            ['nombre' => 'Bardo', 'dado_golpe' => 'd8'],
            ['nombre' => 'Brujo', 'dado_golpe' => 'd8'],
            ['nombre' => 'Clérigo', 'dado_golpe' => 'd8'],
            ['nombre' => 'Druida', 'dado_golpe' => 'd8'],
            ['nombre' => 'Escudero', 'dado_golpe' => 'd10'],
            ['nombre' => 'Guerrero', 'dado_golpe' => 'd10'],
            ['nombre' => 'Hechicero', 'dado_golpe' => 'd6'],
            ['nombre' => 'Ladrón', 'dado_golpe' => 'd8'],
            ['nombre' => 'Mago', 'dado_golpe' => 'd6'],
            ['nombre' => 'Monje', 'dado_golpe' => 'd8'],
            ['nombre' => 'Pícaro', 'dado_golpe' => 'd8'],
            ['nombre' => 'Paladín', 'dado_golpe' => 'd10'],
            ['nombre' => 'Ranger', 'dado_golpe' => 'd10'],
        ];

        foreach ($clases as $clase) {
            CatalogoClase::create($clase);
        }
    }
}
