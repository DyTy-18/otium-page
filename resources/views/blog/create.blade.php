@extends('layouts.app')

@section('title', 'Crear Nuevo Blog - OTIUM')
@section('meta_description', 'Crea una nueva publicación para el blog de OTIUM.')

@section('content')
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold text-finance-dark mb-6">Crear Nueva Publicación</h1>

                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" name="title" id="title"
                                class="mt-1 focus:ring-finance-gold focus:border-finance-gold block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>

                        <!-- Slug (Auto-generated usually, but manual for now) -->
                        <div class="mb-4">
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug (URL
                                amigable)</label>
                            <input type="text" name="slug" id="slug"
                                class="mt-1 focus:ring-finance-gold focus:border-finance-gold block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
                            <select id="category" name="category"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-finance-gold focus:border-finance-gold sm:text-sm">
                                <option>Tecnología</option>
                                <option>Auditoría</option>
                                <option>Impuestos</option>
                                <option>Finanzas</option>
                                <option>Legal</option>
                            </select>
                        </div>

                        <!-- Image URL -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">URL de la Imagen</label>
                            <input type="url" name="image" id="image"
                                class="mt-1 focus:ring-finance-gold focus:border-finance-gold block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                placeholder="https://source.unsplash.com/..." required>
                        </div>

                        <!-- Excerpt -->
                        <div class="mb-4">
                            <label for="excerpt" class="block text-sm font-medium text-gray-700">Extracto</label>
                            <textarea id="excerpt" name="excerpt" rows="3"
                                class="shadow-sm focus:ring-finance-gold focus:border-finance-gold mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                required></textarea>
                        </div>

                        <!-- Content -->
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Contenido</label>
                            <textarea id="content" name="content" rows="10"
                                class="shadow-sm focus:ring-finance-gold focus:border-finance-gold mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                required></textarea>
                            <p class="mt-2 text-sm text-gray-500">Puedes usar HTML básico aquí.</p>
                        </div>

                        <div class="flex justify-end">
                            <a href="{{ route('blog.index') }}"
                                class="bg-gray-200 py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-4">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-finance-gold hover:bg-finance-gold-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-finance-gold">
                                Publicar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
