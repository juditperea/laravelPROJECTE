<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie; 
use App\Models\ListaSerie;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::all(); 

        $images = [
            'public/img'
        ];

        return view('series', ['series' => $series,'images' => $images]);
    }
//GET
    public function show($id)
    {
        $serie = Serie::findOrFail($id);
    
        $images = [
            'public/img'
        ];
        return view('detalleserie', compact('serie'),['images' => $images] );
    }
//CREATE
public function create()
{
    $series = Serie::all();
    return view('seriescreate', compact('series'));
}
public function store(Request $request)
{
    $request->validate([
        'imagen' => 'required|string',
        'titulo' => 'required|string',
        'descripcion'=>'required|string',
        'genero_id' => 'required|numeric',
        'ano_inicio' => 'required|numeric',
        'ano_fin' => 'required|numeric',
        'estado' => 'required|in:Visto,Viendo,Pendiente',
        'numero_temporadas' => 'required|numeric',
        'numero_episodios' => 'required|numeric',
    ]);

    $serie = Serie::create($request->all());

    return redirect()->route('series.show', ['id' => $serie->id]);
}
//UPDATE

public function updateForm($id) {
    $serie = Serie::findOrFail($id);
    $images = [
        'public/img'
    ];
    return view('seriesupdate', ['serie' => $serie,'images' => $images]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'imagen' => 'required|string',
        'titulo' => 'required|string',
        'descripcion' => 'required|string',
        'genero_id' => 'required|numeric',
        'ano_inicio' => 'required|numeric',
        'ano_fin' => 'required|numeric',
        'estado' => 'required|in:Visto,Viendo,Pendiente',
        'numero_temporadas' => 'required|numeric',
        'numero_episodios' => 'required|numeric',
    ]);

    $serie = Serie::findOrFail($id);

    $serie->imagen = $request->imagen;
    $serie->titulo = $request->titulo;
    $serie->descripcion = $request->descripcion;
    $serie->genero_id = $request->genero_id;
    $serie->ano_inicio = $request->ano_inicio;
    $serie->ano_fin = $request->ano_fin;
    $serie->estado = $request->estado;
    $serie->numero_temporadas = $request->numero_temporadas;
    $serie->numero_episodios = $request->numero_episodios;

    $serie->save();

    return redirect()->route('series.show', ['id' => $serie->id]);
}
//DELETE
public function delete($id)
{
    $serie = Serie::with('comments')->findOrFail($id);

    
    $serie->delete();

    
    return redirect('/series');
}

    
public function agregarLista(Request $request)
{
    $user_id = auth()->id();
    
    ListaSerie::create([
        'estado' => $request->input('lista'),
        'user_id' => $user_id,
        'serie_id' => $request->input('serieId'),
    ]);
    return redirect()->route('listas.series.mostrar');
}


public function mostrarListas()
{
    $listas = ListaSerie::where('user_id', auth()->id())->get();
    return view('listasSerie', compact('listas'));
}

}
