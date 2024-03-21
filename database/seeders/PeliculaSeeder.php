<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        Pelicula::create([
            'imagen' => '1.jpg',
            'titulo' => 'Perfect Blue',
            'descripcion' => 'Mima, una cantante muy popular, decide abandonar su banda de música para empezar una carrera como actriz en una serie de televisión.',
            'genero_id' => 13,
            'ano_lanzamiento' => 1998,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '2.jpg',
            'titulo' => 'Ghost in the Shell',
            'descripcion' => 'Motoko Kusanagi es la líder de asalto de la Sección 9, una organización japonesa especializada en antiterrorismo y delitos informáticos, liderada por Daisuke Aramaki',
            'genero_id' => 5,
            'ano_lanzamiento' =>1995,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '3.jpg',
            'titulo' => 'Summer Wars',
            'descripcion' => 'Summer Wars gira en torno a Kenji Koise, un joven de diecisiete años nativo de Tokio y de carácter reservado al que le apasionan las matemáticas y la informática.',
            'genero_id' => 5,
            'ano_lanzamiento' => 2009,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '4.jpg',
            'titulo' => 'BLAME!',
            'descripcion' => 'En el lejano futuro tecnológico, la civilización ha alcanzado su forma última basada en la red.',
            'genero_id' => 5,
            'ano_lanzamiento' => 2017,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '5.jpg',
            'titulo' => 'Your Name',
            'descripcion' => 'Mitsuha Miyamizu es una chica de secundaria que vive en la pequeña ciudad de Itomori, cerca de la región de Hida.',
            'genero_id' => 12,
            'ano_lanzamiento' => 2016,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '6.jpg',
            'titulo' => 'El jardín de las palabras',
            'descripcion' => 'Un estudiante de 15 años y aspirante a zapatero opta por saltarse su primera clase y dibujar diseños de zapatos en el Jardín Nacional Shinjuku Gyoen. ',
            'genero_id' => 12,
            'ano_lanzamiento' => 2013,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '7.jpg',
            'titulo' => 'Hogar a la deriva',
            'descripcion' => 'La aventura se centra en Kōsuke y su amiga de la infancia Natsume.',
            'genero_id' => 4,
            'ano_lanzamiento' => 2022,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '8.jpg',
            'titulo' => 'Paprika',
            'descripcion' => 'La psiquiatra Atsuko Chiba utiliza un método de terapia revolucionario a través de los sueños.',
            'genero_id' => 13,
            'ano_lanzamiento' => 2006,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '9.jpg',
            'titulo' => 'Tokyo Godfathers',
            'descripcion' => 'En la víspera de Navidad, mientras caminan por el barrio de Shinjuku de Tokio,tres vagabundos, una antigua drag queen y una adolescente fugitiva descubren un bebé abandonado.',
            'genero_id' => 2,
            'ano_lanzamiento' => 2003,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '10.jpg',
            'titulo' => 'Hello World',
            'descripcion' => ' Es el año 2027 y la ciudad de Kioto ha experimentado un tremendo avance tecnológico.',
            'genero_id' => 5,
            'ano_lanzamiento' => 2019,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '11.jpg',
            'titulo' => 'La tumba de las luciérnagas',
            'descripcion' => 'Durante un ataque aéreo americano en la ciudad de Kobe, el joven Seita y su pequeña hermana Setsuko no consiguen llegar a tiempo al refugio en el que su madre los espera.',
            'genero_id' => 3,
            'ano_lanzamiento' => 1998,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '12.jpg',
            'titulo' => 'Steamboy',
            'descripcion' => 'El joven inventor Ray, criado en una familia de científicos, espera la vuelta de su padre y de su abuelo de América, donde continúan con sus investigaciones.',
            'genero_id' => 1,
            'ano_lanzamiento' => 2004,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '13.jpg',
            'titulo' => 'The End of Evangelion',
            'descripcion' => 'NERV se enfrenta al Decimoctavo Ángel, pero al final el destino del mundo dependerá de las elecciones de Shinji.',
            'genero_id' => 14,
            'ano_lanzamiento' => 1997,
            'estado' => 'Visto',
        ]);
        Pelicula::create([
            'imagen' => '14.jpg',
            'titulo' => 'Akira',
            'descripcion' => 'En el año 2019, han pasado 30 años desde que una explosión que destruyó por completo la megaciudad de Tokio.',
            'genero_id' => 5,
            'ano_lanzamiento' => 1998,
            'estado' => 'Pendiente',
        ]);
        Pelicula::create([
            'imagen' => '15.jpg',
            'titulo' => 'El castillo ambulante',
            'descripcion' => 'Sophie es una joven sombrerera cuyo camino se cruza con el de un excéntrico mago llamado Howl, mientras se proponía a visitar a su hermana.',
            'genero_id' => 4,
            'ano_lanzamiento' => 2004,
            'estado' => 'Pendiente',
        ]);
    }
}
