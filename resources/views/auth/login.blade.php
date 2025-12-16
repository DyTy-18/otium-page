@extends('layouts.guest')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input id="email"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="email" name="email" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">Contraseña</label>
            <input id="password"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="password" name="password" required autocomplete="current-password" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">Recordarme</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <button type="submit"
                class="ml-3 inline-flex items-center px-4 py-2 bg-finance-gold border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-finance-gold-light active:bg-finance-gold focus:outline-none focus:border-finance-gold focus:ring ring-finance-gold disabled:opacity-25 transition ease-in-out duration-150">
                Iniciar Sesión
            </button>
        </div>
    </form>
@endsection
