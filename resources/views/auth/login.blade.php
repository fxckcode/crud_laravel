@extends('layout.app')


@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <div class="w-full h-screen flex flex-row">
        <div class="w-1/2 h-screen flex justify-center items-center">
            <img src="{{ asset('bg-index.jpg') }}" alt="" class="w-full h-screen object-cover">
        </div>
        <div class="w-1/2 h-screen flex items-center justify-center flex-col gap-5">
            <h1 class="text-3xl font-bold">Iniciar Sesión</h1>
            <div class="w-1/3 flex flex-col gap-3">
                <form action="{{ route('login') }}" method="post" class="flex flex-col gap-5">
                    @csrf
                    @if(session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                    @endif
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
                    <button type="submit" class="p-2 rounded bg-sky-500 text-white hover:scale-105 transition-all ">Iniciar Sesión</button>
                </form>
                <p class="text-center">o</p>
                <a href="{{ route('register.index') }}" class="w-full p-2 rounded text-sky-500 border border-sky-500 text-center hover:scale-105 transition-all">Registrarse</a>
            </div>
        </div>
    </div>
@endsection
