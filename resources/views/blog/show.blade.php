@extends('layouts.app')

@section('title', $post['title'] . ' - OTIUM Blog')

@section('content')
    <!-- Article Header -->
    <div class="bg-finance-dark text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover opacity-20 blur-sm">
            <div class="absolute inset-0 bg-gradient-to-t from-finance-dark to-transparent"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div
                class="inline-block bg-finance-gold text-white text-xs font-bold px-3 py-1 rounded-full mb-6 uppercase tracking-wider">
                {{ $post['category'] }}
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-6 max-w-4xl mx-auto leading-tight animate-fade-in-up">
                {{ $post['title'] }}
            </h1>
            <div class="flex items-center justify-center gap-6 text-slate-300 animate-fade-in-up"
                style="animation-delay: 0.2s;">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>{{ $post['author'] }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>{{ $post['date'] }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <article class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">
                <div class="prose prose-lg prose-slate max-w-none">
                    {!! $post['content'] !!}
                </div>

                <!-- Share / Navigation -->
                <div class="mt-12 pt-8 border-t border-slate-200 flex justify-between items-center">
                    <a href="{{ route('blog.index') }}"
                        class="text-finance-blue font-bold hover:underline flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver al Blog
                    </a>
                </div>
            </div>
        </div>
    </article>
@endsection
