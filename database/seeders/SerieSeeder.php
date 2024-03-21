<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serie;

class SerieSeeder extends Seeder
{
    public function run()
    {
        Serie::create([
            'imagen' => '16.jpg',
            'titulo' => 'Neon Genesis Evangelion',
            'descripcion' => 'Shinji, un joven de 14 años, se une a un pequeño escuadrón de pilotos bajo el mando de su padre.',
            'genero_id' => 4,
            'ano_inicio' => 1996,
            'ano_fin' => 1996,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 26,
        ]);
        Serie::create([
            'imagen' => '17.jpg',
            'titulo' => 'Serial Experiments Lain',
            'descripcion' => 'Tras recibir un extraño mensaje, la joven y solitaria Lain Iwakura inicia un camino que la llevará a adentrarse cada vez más en la red Wired.',
            'genero_id' => 4,
            'ano_inicio' => 1998,
            'ano_fin' => 1998,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 13,
        ]);
        Serie::create([
            'imagen' => '18.jpg',
            'titulo' => 'Cowboy Bebop',
            'descripcion' => 'Transcurre el año 2071. La tripulación de la nave Bebop, inicialmente compuesta por Spike Spiegel y Jet Black, viaja por todo el sistema solar en busca de recompensas.',
            'genero_id' => 1,
            'ano_inicio' => 1998,
            'ano_fin' => 1999,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 26,
        ]);
        Serie::create([
            'imagen' => '19.jpg',
            'titulo' => 'Hunter X Hunter',
            'descripcion' => 'Para cumplir sus sueños de convertirse en un cazador legendario como su padre, un joven debe pasar un riguroso examen y encontrar a su padre desaparecido.',
            'genero_id' => 3,
            'ano_inicio' => 2011,
            'ano_fin' => 2014,
            'estado' => 'Viendo',
            'numero_temporadas' => 6,
            'numero_episodios' => 148,
        ]);
        Serie::create([
            'imagen' => '20.jpg',
            'titulo' => 'One Piece',
            'descripcion' => 'El joven Monkey D. Luffy quiere llegar a ser el Rey de los Piratas y hacerse al fin con un legendario tesoro, el One Piece.',
            'genero_id' => 1,
            'ano_inicio' => 1999,
            'ano_fin' => 2023,
            'estado' => 'Viendo',
            'numero_temporadas' => 1,
            'numero_episodios' => 1093,
        ]);
        Serie::create([
            'imagen' => '21.jpg',
            'titulo' => 'Shingeki No Kyojin',
            'descripcion' => 'Con su ciudad en ruinas, el joven Eren Yeager decide combatir a los Titanes gigantes que amenazan con destruir la raza humana.',
            'genero_id' => 3,
            'ano_inicio' => 2013,
            'ano_fin' => 2023,
            'estado' => 'Visto',
            'numero_temporadas' => 4,
            'numero_episodios' => 139,
        ]);
        Serie::create([
            'imagen' => '22.jpg',
            'titulo' => 'Jojo Bizarre Adventure',
            'descripcion' => 'La vida de Giorno, un niño abandonado, cambia cuando ayuda a un mafioso a evitar la muerte. ',
            'genero_id' => 2,
            'ano_inicio' => 2012,
            'ano_fin' => 2019,
            'estado' => 'Pendiente',
            'numero_temporadas' => 5,
            'numero_episodios' => 152,
        ]);
        Serie::create([
            'imagen' => '23.jpg',
            'titulo' => 'Code Geass',
            'descripcion' => 'Año 2017 del calendario imperial. Lelouch, un joven cuyo derecho de sucesión al trono le fue arrebatado, se convierte en "Zero", el hombre enmascarado.',
            'genero_id' => 3,
            'ano_inicio' => 2006,
            'ano_fin' => 2007,
            'estado' => 'Visto',
            'numero_temporadas' => 2,
            'numero_episodios' => 30,
        ]);
        Serie::create([
            'imagen' => '24.jpg',
            'titulo' => 'Naruto',
            'descripcion' => 'Naruto Uzumaki es un niño marginado en la aldea ninja en la que vive.',
            'genero_id' => 8,
            'ano_inicio' => 1999,
            'ano_fin' => 2002,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 500,
        ]);
        Serie::create([
            'imagen' => '25.jpg',
            'titulo' => 'Berserk',
            'descripcion' => 'Cuando el joven mercenario Guts conoce a Griffith, líder de la Banda del Halcón, poco sabían ambos que sus destinos cambiarían para siempre.',
            'genero_id' => 4,
            'ano_inicio' => 1997,
            'ano_fin' => 1997,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 25,
        ]);
        Serie::create([
            'imagen' => '26.jpg',
            'titulo' => 'Bleach',
            'descripcion' => 'Ichigo Kurosaki es un estudiante de instituto de 15 años, que tiene una peculiaridad.',
            'genero_id' => 8,
            'ano_inicio' => 2004,
            'ano_fin' => 2020,
            'estado' => 'Viendo',
            'numero_temporadas' => 17,
            'numero_episodios' => 192,
        ]);
        Serie::create([
            'imagen' => '27.jpg',
            'titulo' => 'NANA',
            'descripcion' => 'Dos chicas de la misma edad y mismo nombre se conocieron en el tren para ir a Tokio. Sus nombres son NANA.',
            'genero_id' => 12,
            'ano_inicio' => 2006,
            'ano_fin' => 2007,
            'estado' => 'Visto',
            'numero_temporadas' => 2,
            'numero_episodios' => 48,
        ]);
        Serie::create([
            'imagen' => '28.jpg',
            'titulo' => 'Madoka Magica',
            'descripcion' => 'La estudiante de secundaria Madoka Kaname y su amiga, Sayaka Miki, se topan con una extraña criatura mágica llamada Kyūbey',
            'genero_id' => 9,
            'ano_inicio' => 2011,
            'ano_fin' => 2011,
            'estado' => 'Visto',
            'numero_temporadas' => 1,
            'numero_episodios' => 12,
        ]);
        Serie::create([
            'imagen' => '29.jpg',
            'titulo' => 'Jujutsu Kaisen',
            'descripcion' => 'Las emociones negativas creadas por los humanos se convierten en maldiciones y se esconden en la vida cotidiana.',
            'genero_id' => 3,
            'ano_inicio' => 2020,
            'ano_fin' => 2021,
            'estado' => 'Viendo',
            'numero_temporadas' => 2,
            'numero_episodios' => 24,
        ]);
        Serie::create([
            'imagen' => '30.jpg',
            'titulo' => 'Baki',
            'descripcion' => 'Baki es criado con la esperanza de que pueda ser un gran luchador como su padre.',
            'genero_id' => 3,
            'ano_inicio' => 2018,
            'ano_fin' => 2023,
            'estado' => 'Visto',
            'numero_temporadas' => 3,
            'numero_episodios' => 66,
        ]);

    }
}
