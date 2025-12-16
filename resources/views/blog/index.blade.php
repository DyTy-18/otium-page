@extends('layouts.app')

@section('title', 'Blog - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="bg-finance-dark text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in-up">Nuestro Blog</h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                Insights, noticias y análisis sobre contabilidad, finanzas y tecnología.
            </p>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <article
                        class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                        <a href="{{ route('blog.show', $post->slug) }}" class="block overflow-hidden h-48">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </a>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-4">
                                <span
                                    class="text-xs font-bold text-finance-gold uppercase tracking-wider">{{ $post->category }}</span>
                                <span
                                    class="text-xs text-slate-500">{{ $post->date instanceof \DateTime ? $post->date->format('M d, Y') : $post->date }}</span>
                            </div>
                            <h2
                                class="text-xl font-bold text-finance-dark mb-3 leading-tight hover:text-finance-blue transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-slate-600 text-sm mb-4 flex-1">
                                {{ $post->excerpt }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-slate-500 font-medium">{{ $post->author }}</span>
                                    <a href="{{ route('blog.show', $post->slug) }}"
                                        class="text-finance-blue font-bold text-sm hover:underline">Leer más &rarr;</a>
                                </div>
                                @auth
                                    <div class="flex justify-end gap-3 mt-3 pt-3 border-t border-slate-50">
                                        <a href="{{ route('blog.edit', $post->id) }}"
                                            class="text-xs text-blue-600 hover:text-blue-800 font-semibold flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            Editar
                                        </a>
                                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este post?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-xs text-red-600 hover:text-red-800 font-semibold flex items-center gap-1">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
