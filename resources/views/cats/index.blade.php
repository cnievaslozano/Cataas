<!-- resources/views/cats/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Todos los Gatos</h1>
<form action="{{ route('cats.index') }}" method="GET" class="mb-4">
    <div class="mb-4">
        <label for="tags" class="block text-gray-700">Filtrar por etiquetas:</label>
        <input type="text" name="tags" id="tags"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </div>
    <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Filtrar</button>
</form>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($cats as $cat)
    <div class="max-w-sm rounded overflow-hidden shadow-lg border-2 border-indigo-500/100">
        <img src="https://cataas.com/cat/{{ $cat->_id }}" class="w-full h-64 object-cover" alt="Cat Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">UwU</div>
            <p class="text-gray-700">
                <strong>Tags:</strong>
                @if ($tags = json_decode($cat->tags))
                {{ implode(', ', $tags) }}
                @else
                Sin etiquetas
                @endif
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <small class="text-gray-600">Creado por el mismíssimo Mr Tartaria</small>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $cats->links() }}
</div>

@endsection