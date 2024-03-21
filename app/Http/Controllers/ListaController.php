<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Serie;

class ListaController extends Controller
{

    public function index()
    {
        $listas = ListaUsuario::where('user_id', auth()->id())->get();
        return view('listas.index', compact('listas'));
    }
    
    public function agregarPelicula(Request $request, $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        
        
        $request->validate([
            'lista' => 'required|in:por_ver,visto,viendo',
        ]);
        
        
        $pelicula->update([
            $request->input('lista') => true,
        ]);
        
        
        return redirect()->route('peliculas.show', ['id' => $pelicula->id]);
    }


    public function agregarSerie(Request $request, $id)
    {
        $serie = Serie::findOrFail($id);
        
        
        $request->validate([
            'lista' => 'required|in:por_ver,visto,viendo',
        ]);
        
        
        $serie->update([
            $request->input('lista') => true,
        ]);
        
        
        return redirect()->route('series.show', ['id' => $serie->id]);
    }
}
