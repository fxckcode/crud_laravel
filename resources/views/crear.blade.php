@extends('layout.app')

@section('title')
    Crear | Electródomesticos
@endsection

@section('content')
    <nav class="w-full h-16 shadow bg-gray-900 text-white flex justify-around items-center">
        <p class="text-xl font-semibold">Hola, {{ auth()->user()->name }}</p>
        <a class="text-xl font-semibold hover:scale-105 transition-all" href="">Cerrar Sesión</a>
    </nav>
    <div class="w-1/2 p-10">
        <a href="{{ route('home.index')}}" class="underline mb-4">Volver</a>
        <form action="{{ route('empleados.store')}}" class="flex flex-col gap-4" method="post">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre Completo" class="border border-gray-400 p-2 rounded @error('nombre') border-red-500 @enderror" value="{{ old('nombre')}}">
            </div>
            @error('nombre')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="cedula">Cedula</label>
                <input type="number" name="cedula" placeholder="Cédula" class="border border-gray-400 p-2 rounded @error('cedula') border-red-500 @enderror" value="{{ old('cedula')}}">
            </div>
            @error('cedula')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" placeholder="Direccion" class="border border-gray-400 p-2 rounded @error('direccion') border-red-500 @enderror" value="{{ old('direccion')}}">
            </div>
            @error('direccion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-2">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" placeholder="Teléfono" class="border border-gray-400 p-2 rounded @error('telefono') border-red-500 @enderror" value="{{ old('telefono')}}">
            </div>
            @error('telefono')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
            @enderror
            <button type="submit" class="w-full p-2 bg-green-600 text-white rounded hover:scale-105 transition-all">Crear</button>
        </form>
    </div>
@endsection