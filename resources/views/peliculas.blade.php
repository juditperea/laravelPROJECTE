@extends('inicio')

@section('title', 'Películas')

@section('content')
    <h2 class="text-xl font-bold mb-4 mt-6">Películas</h2>
    <a href="{{ route('peliculas.create') }}" class="inline-block bg-red-600 text-white ml-8 px-4 py-2 rounded-md hover:bg-red-600" >Añadir película</a>

    <ul>
        @foreach ($peliculas as $pelicula)
            <li>
                <img src="{{ asset('img/' . $pelicula->imagen) }}" alt="{{ $pelicula->titulo }}">
                <div class="details">
                    <strong class="font-bold text-red-600">{{ $pelicula->titulo }}</strong>
                    <p>Género: {{ $pelicula->genero->nombre }}</p>
                    <p>Año de lanzamiento: {{ $pelicula->ano_lanzamiento }}</p>
                    <a href="{{ route('peliculas.show', ['id' => $pelicula->id]) }}" class="bg-blue-500 text-white py-2 px-2 rounded">Ver detalles</a>
                    <a href="{{ route('peliculas.edit', ['id' => $pelicula->id]) }}" class="bg-yellow-500 text-white py-2 px-2 rounded">Editar</a>
                    <form action="{{ route('peliculas.delete', ['id' => $pelicula->id]) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta película?')" class="bg-red-500 text-white py-2 px-2 rounded">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
