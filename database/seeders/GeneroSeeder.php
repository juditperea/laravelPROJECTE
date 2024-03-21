<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            
            ['nombre' => 'Acción'],
            ['nombre' => 'Comedia'],
            ['nombre' => 'Drama'],
            ['nombre' => 'Aventura'],
            ['nombre' => 'Ciencia Ficción'],
            ['nombre' => 'Thriller'],
            ['nombre' => 'Fantasía'],
            ['nombre' => 'Misterio'],
            ['nombre' => 'Terror'],
            ['nombre' => 'Suspense'],
            ['nombre' => 'Shonen'],
            ['nombre' => 'Shojo'],
            ['nombre' => 'Seinen'],
            ['nombre' => 'Mecha'],
        ];
        Genero::insert($generos);
    }
}
