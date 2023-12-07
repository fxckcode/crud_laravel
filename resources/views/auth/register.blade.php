@extends('layout.app')


@section('title')
    Registro
@endsection

@section('content')
    <div class="w-full h-screen flex flex-row">
        <div class="w-1/2 h-screen flex justify-center items-center">
            <img src="{{ asset('bg-index.jpg') }}" alt="" class="w-full h-screen object-cover">
        </div>
        <div class="w-1/2 h-screen flex items-center justify-center flex-col gap-5">
            <h1 class="text-3xl font-bold">Registro</h1>
            <div class="w-1/3 flex flex-col gap-3">
                <form action="{{ route('register.store') }}" method="post" class="flex flex-col gap-5">
                    @csrf
                    @if(session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                    @endif
                    <div class="flex flex-col gap-2">
                        <label for="name">Nombre Completo</label>
                        <input type="text" placeholder="Nombre Completo" name="name" value="{{ old('email')}}" class="p-2 border border-sky-300 rounded @error('name') border-red-500 @enderror">
                    </div>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col gap-2">
                        <label for="email">Correo</label>
                        <input type="email" placeholder="Correo Electrónico" name="email" value="{{ old('email')}}" class="p-2 border border-sky-300 rounded @error('email') border-red-500 @enderror">
                    </div>
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <div class="flex flex-col gap-2">
                        <label for="password">Correo</label>
                        <input type="password" placeholder="Contraseña" name="password" value="{{ old('password')}}" class="p-2 border border-sky-300 rounded @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="p-2 rounded text-sky-500 border border-sky-500 hover:scale-105 transition-all ">Registrarse</button>
                </form>
                <p class="text-center">o</p>
                <a href="{{ route('login') }}" class="w-full p-2 text-white text-center bg-sky-500 rounded hover:scale-105 transition-all">Iniciar Sesión</a>
            </div>
        </div>
    </div>
@endsection
