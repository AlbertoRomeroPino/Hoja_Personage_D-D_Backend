<?php

namespace Database\Seeders;

use App\Models\CatalogoIdioma;
use Illuminate\Database\Seeder;

class CatalogoIdiomaSeeder extends Seeder
{
    public function run(): void
    {
        $idiomas = [
            ['nombre' => 'Común'],
            ['nombre' => 'Élfico'],
            ['nombre' => 'Enano'],
            ['nombre' => 'Orco'],
            ['nombre' => 'Trasgo'],
            ['nombre' => 'Gnómico'],
            ['nombre' => 'Dracónico'],
            ['nombre' => 'Infernal'],
            ['nombre' => 'Celestial'],
            ['nombre' => 'Abismal'],
            ['nombre' => 'Silvano'],
            ['nombre' => 'Titánico'],
            ['nombre' => 'Primitivo'],
            ['nombre' => 'Lengua Profunda'],
        ];

        foreach ($idiomas as $idioma) {
            CatalogoIdioma::create($idioma);
        }
    }
}
