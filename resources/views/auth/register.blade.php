@extends('layouts.guest')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">Nombre</label>
            <input id="name"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" name="name" required autofocus autocomplete="name" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input id="email"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="email" name="email" required autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">Contraseña</label>
            <input id="password"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirmar Contraseña</label>
            <input id="password_confirmation"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                ¿Ya estás registrado?
            </a>

            <button type="submit"
                class="ml-4 inline-flex items-center px-4 py-2 bg-finance-gold border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-finance-gold-light active:bg-finance-gold focus:outline-none focus:border-finance-gold focus:ring ring-finance-gold disabled:opacity-25 transition ease-in-out duration-150">
                Registrarse
            </button>
        </div>
    </form>
@endsection
