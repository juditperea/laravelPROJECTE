<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula; 
use App\Models\ListaPelicula;

class MovieController extends Controller

{
    
    public function index()
    {
        $peliculas = Pelicula::all(); 
        $images = [
            'public/img'
        ];
        return view('peliculas', ['peliculas' => $peliculas,'images' => $images]);
    }

    //GET
    public function show($id)
    {
        
        $pelicula = Pelicula::with('comments')->findOrFail($id);
    
        $images = [
            'public/img'
        ];
        return view('detalles', compact('pelicula'),['images' => $images] );
    }

    //CREATE
    public function create()
    {
        $peliculas = Pelicula::all();
        return view('peliculascreate', compact('peliculas'));
    }

    public function updateForm($id) {
        $pelicula = Pelicula::findOrFail($id);
        $images = [
            'public/img'
        ];
        return view('peliculasupdate', ['pelicula' => $pelicula,'images' => $images]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|string',
            'titulo' => 'required|string',
            'descripcion'=>'required|string',
            'genero_id' => 'required|numeric',
            'ano_lanzamiento' => 'required|numeric',
            'estado' => 'required|in:Visto,Pendiente' 
        ]);

        $pelicula = Pelicula::create($request->all());
        return redirect()->route('peliculas.show', ['id' => $pelicula->id]);
    }
    //UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'imagen' => 'required|string',
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'genero_id' => 'required|numeric',
            'ano_lanzamiento' => 'required|numeric',
            'estado' => 'required|in:Visto,Pendiente'
        ]);

        $pelicula = Pelicula::findOrFail($id);

        $pelicula->imagen = $request->imagen;
        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->genero_id = $request->genero_id;
        $pelicula->ano_lanzamiento = $request->ano_lanzamiento;
        $pelicula->estado = $request->estado;

        $pelicula->save();

        return redirect()->route('peliculas.show', ['id' => $pelicula->id]);
    }
    //DELETE
    
    public function delete($id)
    {
        $pelicula = Pelicula::with('comments')->findOrFail($id);

        
        $pelicula->delete();

        
        return redirect('/peliculas');
    }

    //AGREGAR A LISTA
    public function agregarLista(Request $request)
    {
        $user_id = auth()->id();
        
        ListaPelicula::create([
            'estado' => $request->input('lista'),
            'user_id' => $user_id,
            'pelicula_id' => $request->input('peliculaId'),
        ]);
    
        return redirect()->route('listas.mostrar');
    }
    

    public function mostrarListas()
{
    $listas = ListaPelicula::where('user_id', auth()->id())->get();
    return view('listas', compact('listas'));
}
}
