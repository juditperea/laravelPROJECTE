@extends('inicio')

@section('title', $pelicula->titulo)

@section('content')
    <div class="max-w-4xl mx-auto mt-8 grid grid-cols-2 gap-8">
        <div class="col-span-1">
            <img src="{{ asset('img/' . $pelicula->imagen) }}" alt="{{ $pelicula->titulo }}" class="w-full h-auto mb-8">
            <h2 class="text-xl font-semibold mb-2">{{ $pelicula->titulo }}</h2>
            <p class="text-gray-700 mb-2">{{ $pelicula->descripcion }}</p>
            <p class="text-gray-700 mb-2">Género: {{ $pelicula->genero->nombre }}</p>
            <p class="text-gray-700 mb-2">Año de lanzamiento: {{ $pelicula->ano_lanzamiento }}</p>
        </div>

        <div class="col-span-1">
            <h3 class="text-lg font-semibold mb-4">Comentarios</h3>
            @if($pelicula->comments)
                @foreach($pelicula->comments as $comment)
                    <div class="border-b border-gray-200 mb-4 pb-4">
                        <p class="text-gray-700">{{ $comment->user->name }} dijo:</p>
                        <p class="text-gray-700">{{ $comment->comment }}</p>

                        
                        <form action="{{ route('peliculas.comment.delete', ['id' => $comment->id]) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este comentario?')" class="m-2 bg-red-500 text-white px-1 py-1 rounded-md hover:bg-red-600">Eliminar comentario</button>
                        </form>
                       

                    <!-- editar
                 <a href="{{ route('peliculas.comment.edit', ['id' => $comment->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Editar</a> 
                    <form action="{{ route('peliculas.comment.edit', ['id' => $comment->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <textarea name="comment" id="comment" rows="2" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">{{ $comment->comment }}</textarea>
                        </div>
                
                    </form>
-->
                    </div>
                @endforeach
            @else
                <p>No hay comentarios disponibles.</p>
            @endif

            
            <form action="{{ route('peliculas.comment.store', ['id' => $pelicula->id]) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <label for="comment" class="block text-sm font-medium text-gray-700">Agregar Comentario</label>
                    <textarea name="comment" id="comment" rows="3" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>
                <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded">Enviar Comentario</button>
            </form>
             <!-- listas -->
             <form action="{{ route('peliculas.agregarLista', ['id' => $pelicula->id]) }}" method="POST" class="mt-4">
                @csrf
                <label for="lista" class="block text-sm font-medium text-gray-700">Agregar a lista:</label>
                <div class="mt-1">
                    <select name="lista" id="lista" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-black">
                        <option value="por_ver">Por ver</option>
                        <option value="visto">Visto</option>
                        <option value="viendo">Viendo</option>
                    </select>
                </div>
                <input type="hidden" name="peliculaId" id="peliculaId" value="{{ $pelicula->id }}">
                <button type="submit" class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Agregar a lista</button>
                <a href="{{ route('listas.mostrar') }}" class="inline-block mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ver listas</a>
            </form>

        </div>
    </div>
@endsection
