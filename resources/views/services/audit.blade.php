@extends('layouts.app')

@section('title', 'Auditoría - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-finance-dark text-white py-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/outsourcing-hero.png') }}" alt="Auditoría"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up leading-tight">
                Auditoría <span class="text-finance-gold">Integral</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl animate-fade-in-up leading-relaxed" style="animation-delay: 0.2s;">
                ¿Te suena aburrido el término auditoría? No eres el único. En OTIUM hacemos de la auditoría un servicio
                moderno, útil y entendible.
            </p>
        </div>
    </div>

    <!-- Intro Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <!-- Intro Section -->
            <section class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <div class="flex flex-col lg:flex-row items-center gap-16 mb-16">
                        <div class="lg:w-1/2">
                            <h2 class="text-3xl font-bold text-finance-dark mb-6">Confianza y Transparencia</h2>
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Nuestro objetivo es validar y brindar confianza sobre cualquier tipo de información que
                                necesites
                                verificar. No pienses solo en estados financieros: podemos auditar tu campaña de marketing,
                                la
                                eficiencia de tu proceso de producción o incluso cómo se están gestionando tus recursos
                                humanos.
                            </p>
                            <p class="text-lg text-slate-600 leading-relaxed">
                                Cuéntanos qué información te genera dudas o incertidumbre, y nosotros te daremos una opinión
                                profesional
                                e independiente.
                            </p>
                        </div>
                        <div class="lg:w-1/2">
                            <div
                                class="relative rounded-lg overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                                <img src="{{ asset('images/outsourcing-content.png') }}" alt="Auditoría"
                                    class="w-full h-auto">
                                <div
                                    class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/60 to-transparent">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Key Benefits -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Confianza para tus decisiones</h3>
                            <p class="text-slate-600 text-sm">
                                Una auditoría proporciona la tranquilidad de saber que los datos con los que trabajas son
                                correctos
                                y fiables, elevando la confianza y credibilidad de tu empresa.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Visión independiente</h3>
                            <p class="text-slate-600 text-sm">
                                Revisamos tus operaciones sin sesgos. Detectamos errores, riesgos o fraudes potenciales que
                                podrían
                                pasar desapercibidos internamente.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Más que números financieros</h3>
                            <p class="text-slate-600 text-sm">
                                Nuestra experiencia abarca auditorías operativas, de sistemas, de cumplimiento y más. Donde
                                haya
                                datos y procesos, podemos evaluarlos.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Cumplimiento normativo</h3>
                            <p class="text-slate-600 text-sm">
                                Nos aseguramos de que cumplas con las normas nacionales e internacionales aplicables.
                                Validamos que
                                tus estados financieros sigan principios contables.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Recomendaciones accionables</h3>
                            <p class="text-slate-600 text-sm">
                                Entregamos sugerencias concretas de mejora. Identificamos debilidades en controles u
                                oportunidades
                                de optimización y te orientamos sobre cómo resolverlas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Deliverables Section -->
            <section class="py-20 bg-slate-50">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold text-finance-dark mb-12 text-center">Entregables</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Informe de auditoría independiente</h4>
                                <p class="text-slate-600 text-sm">Documento detallado con el alcance, procedimientos,
                                    hallazgos y
                                    nuestra opinión profesional sobre la confiabilidad de la información.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Carta de recomendaciones</h4>
                                <p class="text-slate-600 text-sm">Lista de observaciones y recomendaciones prácticas
                                    priorizadas
                                    para que sepas exactamente en qué enfocarte.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Reunión de cierre y presentación</h4>
                                <p class="text-slate-600 text-sm">Sesión para presentar resultados, explicar hallazgos y
                                    responder
                                    preguntas para asegurar la comprensión.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Seguimiento pactado</h4>
                                <p class="text-slate-600 text-sm">Opcionalmente, ofrecemos seguimiento posterior para
                                    verificar la
                                    implementación de las recomendaciones.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Process Section -->
            <section class="py-20 bg-white">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold text-finance-dark mb-12 text-center">Nuestro Proceso</h2>
                    <div class="relative max-w-4xl mx-auto">
                        <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-slate-200 -translate-x-1/2"></div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Planificación de la auditoría</h3>
                                <p class="text-slate-600 text-sm mt-2">Definimos alcance y objetivos, establecemos plan de
                                    trabajo y
                                    coordinamos tiempos.</p>
                            </div>
                            <div
                                class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                                1</div>
                            <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0 hidden md:block"></div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 order-2 md:order-1 hidden md:block"></div>
                            <div
                                class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                                2</div>
                            <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Ejecución (Trabajo de campo)</h3>
                                <p class="text-slate-600 text-sm mt-2">Recabamos evidencia mediante pruebas y entrevistas,
                                    manteniendo comunicación abierta.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Análisis y conclusión</h3>
                                <p class="text-slate-600 text-sm mt-2">Procesamos la evidencia, contrastamos con estándares
                                    y
                                    formulamos nuestra opinión profesional.</p>
                            </div>
                            <div
                                class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                                3</div>
                            <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0 hidden md:block"></div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 order-2 md:order-1 hidden md:block"></div>
                            <div
                                class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                                4</div>
                            <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Informe y recomendaciones</h3>
                                <p class="text-slate-600 text-sm mt-2">Elaboramos el informe y la carta de recomendaciones,
                                    verificando precisión y claridad.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Presentación de resultados</h3>
                                <p class="text-slate-600 text-sm mt-2">Entregamos el informe final y presentamos hallazgos
                                    en
                                    reunión de cierre.</p>
                            </div>
                            <div
                                class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                                5</div>
                            <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0 hidden md:block"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-20 bg-slate-50">
                <div class="container mx-auto px-6 max-w-4xl">
                    <h2 class="text-3xl font-bold text-finance-dark mb-12 text-center">Preguntas Frecuentes</h2>

                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Por qué realizar una auditoría si mi
                                empresa no
                                está obligada legalmente?</h3>
                            <p class="text-slate-600">
                                Una auditoría voluntaria puede revelar oportunidades de mejora y prevenir problemas futuros.
                                Aporta
                                transparencia y confianza, valioso para inversionistas o financiamiento.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué tipos de auditoría pueden llevar a
                                cabo?</h3>
                            <p class="text-slate-600">
                                Realizamos auditorías financieras, operativas, de cumplimiento y especiales (sistemas,
                                proyectos).
                                Nos adaptamos al ámbito que requieras auditar.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Quanto tiempo toma el proceso y cuánto
                                involucramiento requiere de mi equipo?</h3>
                            <p class="text-slate-600">
                                La duración depende del alcance. Una auditoría financiera típica dura algunas semanas.
                                Requerimos
                                cierta colaboración para información, pero nos esforzamos por no entorpecer su trabajo
                                diario.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cómo manejan la confidencialidad de la
                                información que revisan?</h3>
                            <p class="text-slate-600">
                                Firmamos acuerdos de confidencialidad y aplicamos estrictos protocolos de seguridad. Toda
                                documentación se resguarda y solo se usa para la auditoría.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">Si detectan algún problema serio o fraude,
                                ¿qué
                                ocurre a continuación?</h3>
                            <p class="text-slate-600">
                                Te lo comunicamos de inmediato. Te asesoramos sobre implicaciones y pasos a seguir. Nuestro
                                rol es
                                informarte objetivamente; la decisión final recae en la empresa.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Custom CTA for this page -->
            <section class="py-20 bg-finance-blue text-white relative overflow-hidden">
                <div
                    class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-96 h-96 bg-finance-gold opacity-10 rounded-full translate-x-1/3 translate-y-1/3">
                </div>

                <div class="container mx-auto px-6 text-center relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">No dejes espacio a la incertidumbre</h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        Asegura la integridad de tu información y toma decisiones con confianza apoyado en auditorías
                        profesionales
                        de OTIUM.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                        Contáctanos Ahora
                    </a>
                </div>
            </section>
        @endsection
