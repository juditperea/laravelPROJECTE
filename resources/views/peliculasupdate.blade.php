@extends('inicio')

@section('title', 'Actualizar Película')

@section('content')
    <h2 class="text-xl font-bold mb-4 mt-6">Actualizar Película</h2>
    <form action="{{ route('peliculas.update', ['id' => $pelicula->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="text" name="imagen" id="imagen" value="{{ $pelicula->imagen }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $pelicula->titulo }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">{{ $pelicula->descripcion }}</textarea>
        </div>
        <div class="mb-4">
            <label for="genero_id" class="block text-sm font-medium text-gray-700">Género ID</label>
            <input type="number" name="genero_id" id="genero_id" value="{{ $pelicula->genero_id }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="ano_lanzamiento" class="block text-sm font-medium text-gray-700">Año de Lanzamiento</label>
            <input type="number" name="ano_lanzamiento" id="ano_lanzamiento" value="{{ $pelicula->ano_lanzamiento }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="estado" id="estado" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
                <option value="Visto" {{ $pelicula->estado === 'Visto' ? 'selected' : '' }}>Visto</option>
                <option value="Pendiente" {{ $pelicula->estado === 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Película</button>
    </form>
@endsection
