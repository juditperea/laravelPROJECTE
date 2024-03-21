@extends('inicio')

@section('title', 'Series')

@section('content')
    <h2 class="text-xl font-bold mb-4 mt-6">Series</h2>
    <a class="inline-block bg-red-600 text-white ml-8 px-4 py-2 rounded-md hover:bg-red-600" href="{{ route('series.create') }}">Añadir serie</a>

    <ul>
        @foreach ($series as $serie)
            <li>
                <img src="{{ asset('img/' . $serie->imagen) }}" alt="{{ $serie->titulo }}">
                <div class="details">
                    <strong class="font-bold text-red-600">{{ $serie->titulo }}</strong>
                    <p>Género: {{ $serie->genero->nombre }}</p>
                    <p>Año de inicio: {{ $serie->ano_inicio }}</p>
                    <p>Año de fin: {{ $serie->ano_fin }}</p>
                    <a href="{{ route('series.show', ['id' => $serie->id]) }}" class="bg-blue-500 text-white py-2 px-2 rounded">Ver detalles</a>
                    <a href="{{ route('series.edit', ['id' => $serie->id]) }}" class="bg-yellow-500 text-white py-2 px-2 rounded">Editar</a>
                    <form action="{{ route('series.delete', ['id' => $serie->id]) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta serie?')" class="bg-red-500 text-white py-2 px-2 rounded">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
