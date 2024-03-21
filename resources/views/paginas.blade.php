@extends('inicio')

@section('title', 'Páginas Anime')

@section('content')
    <h2 class="text-xl font-bold mb-4 mt-6">Páginas Anime</h2>

    @if ($paginas->isEmpty())
        <p>No hay páginas anime disponibles.</p>
    @else
        <ul>
            @foreach ($paginas as $pagina)
                <li>
                    <h3 class="text-lg font-semibold">{{ $pagina->nombre }}</h3>
                    <p class="text-gray-700">{{ $pagina->descripcion }}</p>
                    <a href="{{ $pagina->url }}" class="text-blue-500 hover:underline">{{ $pagina->url }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
