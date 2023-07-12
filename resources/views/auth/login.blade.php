@extends('layouts.app')

@section('titulo')
    Inicia sesión en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-6/12">
            <img src="{{ asset('img/login.webp') }}" class="md:felx md:justify-center md:gap-4 md:items-center" alt="">
        </div>

        <div class="md:w-4/12">
            <form action="{{ route('login') }}" method="POST" novalidate class=" bg-white p-6 rounded-lg shadow-xl">
                @csrf

                @if (session('message'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{ session('message') }}
                    </p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>

                    <input type="email" id="email" name="email" placeholder="Ingresa tu E-Mail" class="border p-3 w-full rounded-lg @error('email')
                    border-red-500
                @enderror" value="{{ old('email') }}">

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>

                    <input type="password" id="password" name="password" placeholder="Ingresa un password" class="border p-3 w-full rounded-lg @error('password')
                    border-red-500
                @enderror">

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember"> <label class="text-gray-500 text-sm">Mantener mi sesión abierta</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">
            </form>
        </div>
    </div>
@endsection
