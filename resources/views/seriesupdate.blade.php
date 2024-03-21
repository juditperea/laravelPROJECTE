@extends('inicio')

@section('title', 'Actualizar Serie')

@section('content')
    <h2 class="text-xl font-bold mb-4 mt-6">Actualizar Serie</h2>
    <form action="{{ route('series.update', ['id' => $serie->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="text" name="imagen" id="imagen" value="{{ $serie->imagen }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $serie->titulo }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">{{ $serie->descripcion }}</textarea>
        </div>
        <div class="mb-4">
            <label for="genero_id" class="block text-sm font-medium text-gray-700">Género ID</label>
            <input type="number" name="genero_id" id="genero_id" value="{{ $serie->genero_id }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="ano_inicio" class="block text-sm font-medium text-gray-700">Año de Inicio</label>
            <input type="number" name="ano_inicio" id="ano_inicio" value="{{ $serie->ano_inicio }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="ano_fin" class="block text-sm font-medium text-gray-700">Año de Fin</label>
            <input type="number" name="ano_fin" id="ano_fin" value="{{ $serie->ano_fin }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="estado" id="estado" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
                <option value="Visto" {{ $serie->estado === 'Visto' ? 'selected' : '' }}>Visto</option>
                <option value="Viendo" {{ $serie->estado === 'Viendo' ? 'selected' : '' }}>Viendo</option>
                <option value="Pendiente" {{ $serie->estado === 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="numero_temporadas" class="block text-sm font-medium text-gray-700">Número de Temporadas</label>
            <input type="number" name="numero_temporadas" id="numero_temporadas" value="{{ $serie->numero_temporadas }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="numero_episodios" class="block text-sm font-medium text-gray-700">Número de Episodios</label>
            <input type="number" name="numero_episodios" id="numero_episodios" value="{{ $serie->numero_episodios }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md text-black focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Serie</button>
    </form>
@endsection
