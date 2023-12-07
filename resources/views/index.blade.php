@extends('layout.app')


@section('title')
    Página principal
@endsection

@section('content')
    <div class="w-full h-screen flex flex-row">
        <div class="w-1/2 h-screen flex justify-center items-center">
            <img src="{{ asset('bg-index.jpg') }}" alt="" class="w-full h-screen object-cover">
        </div>
        <div class="w-1/2 h-screen flex items-center justify-center flex-col gap-5">
            <h1 class="text-3xl font-bold">Bienvenido</h1>
            <div class="w-1/3 flex flex-col gap-3">
                <a href="{{ route('login') }}" class="bg-sky-500 text-white p-3 rounded hover:scale-105 transition-all">Iniciar Sesión</a>
                <a href="{{ route('register.index') }}" class="border border-sky-500 text-sky-500 p-3 rounded hover:scale-105 transition-all">Registro</a>
            </div>
        </div>
    </div>
@endsection
