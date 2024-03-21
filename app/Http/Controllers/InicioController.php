<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula; 
use App\Models\Serie; 

class InicioController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        $series = Serie::all(); 
        
        $images = [
            'img/10.gif',
            'img/14.gif',
        ];
        

        return view('inicio', ['peliculas' => $peliculas, 'series' => $series,'images' => $images]);
    }
    public function misListas()
    {
        $user = Auth::user();
        $peliculasPorVer = $user->peliculas()->wherePivot('lista', 'por_ver')->get();
        $peliculasVistas = $user->peliculas()->wherePivot('lista', 'visto')->get();
        $peliculasViendo = $user->peliculas()->wherePivot('lista', 'viendo')->get();
        $seriesPorVer = $user->series()->wherePivot('lista', 'por_ver')->get();
        $seriesVistas = $user->series()->wherePivot('lista', 'visto')->get();
        $seriesViendo = $user->series()->wherePivot('lista', 'viendo')->get();

        return view('mis_listas', compact('peliculasPorVer', 'peliculasVistas', 'peliculasViendo', 'seriesPorVer', 'seriesVistas', 'seriesViendo'));
    }
}



