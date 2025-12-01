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
                        <a href="{{ route('blog.show', $post['slug']) }}" class="block overflow-hidden h-48">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </a>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-4">
                                <span
                                    class="text-xs font-bold text-finance-gold uppercase tracking-wider">{{ $post['category'] }}</span>
                                <span class="text-xs text-slate-500">{{ $post['date'] }}</span>
                            </div>
                            <h2
                                class="text-xl font-bold text-finance-dark mb-3 leading-tight hover:text-finance-blue transition-colors">
                                <a href="{{ route('blog.show', $post['slug']) }}">
                                    {{ $post['title'] }}
                                </a>
                            </h2>
                            <p class="text-slate-600 text-sm mb-4 flex-1">
                                {{ $post['excerpt'] }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-sm text-slate-500 font-medium">{{ $post['author'] }}</span>
                                <a href="{{ route('blog.show', $post['slug']) }}"
                                    class="text-finance-blue font-bold text-sm hover:underline">Leer más &rarr;</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
