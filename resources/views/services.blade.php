@extends('layouts.app')

@section('title', 'Nuestros Servicios - FinAudit')

@section('content')
    <!-- Hero Section -->
    <div class="bg-finance-dark text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">Nuestros Servicios</h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                Soluciones integrales diseñadas para impulsar el crecimiento y la estabilidad de su empresa.
            </p>
        </div>
    </div>

    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-slate-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="p-8">
                        <div
                            class="w-14 h-14 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 36v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-3">Outsourcing Contable</h3>
                        <p class="text-slate-600 mb-4">
                            Gestión integral de su contabilidad, nóminas y cumplimiento tributario.
                        </p>
                        <a href="{{ route('services.outsourcing') }}"
                            class="text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2">Más
                            Información &rarr;</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-slate-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="p-8">
                        <div
                            class="w-14 h-14 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-3">Operaciones Financieras</h3>
                        <p class="text-slate-600 mb-4">
                            Optimización de tesorería, planeamiento financiero y evaluación de proyectos.
                        </p>
                        <a href="{{ route('services.financial-operations') }}"
                            class="text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2">Más
                            Información &rarr;</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-slate-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="p-8">
                        <div
                            class="w-14 h-14 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-3">Auditoría</h3>
                        <p class="text-slate-600 mb-4">
                            Auditoría financiera, operativa y forense para garantizar transparencia y confianza.
                        </p>
                        <a href="{{ route('services.audit') }}"
                            class="text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2">Más
                            Información &rarr;</a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-slate-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="p-8">
                        <div
                            class="w-14 h-14 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-3">Transformación Digital</h3>
                        <p class="text-slate-600 mb-4">
                            Implementación de ERPs, automatización y modernización tecnológica.
                        </p>
                        <a href="{{ route('services.digital-transformation') }}"
                            class="text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2">Más
                            Información &rarr;</a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div
                    class="bg-slate-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="p-8">
                        <div
                            class="w-14 h-14 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-3">Constitución de Empresas</h3>
                        <p class="text-slate-600 mb-4">
                            Asesoría legal y fiscal para el inicio de nuevas operaciones comerciales.
                        </p>
                        <a href="{{ route('services.company-incorporation') }}"
                            class="text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2">Más
                            Información &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-finance-dark mb-4">Nuestro Proceso de Trabajo</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Un enfoque estructurado para garantizar resultados excepcionales en cada proyecto.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Connecting Line (Desktop only) -->
                <div
                    class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-200 -z-10 transform -translate-y-1/2">
                </div>

                <!-- Step 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm text-center border border-slate-100">
                    <div
                        class="w-16 h-16 bg-finance-blue text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 border-4 border-white shadow-md">
                        1</div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Análisis Inicial</h3>
                    <p class="text-slate-600 text-sm">
                        Evaluamos su situación actual, identificamos necesidades y definimos el alcance del proyecto con
                        precisión.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm text-center border border-slate-100">
                    <div
                        class="w-16 h-16 bg-finance-blue text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 border-4 border-white shadow-md">
                        2</div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Estrategia y Ejecución</h3>
                    <p class="text-slate-600 text-sm">
                        Diseñamos soluciones a medida e implementamos las mejores prácticas con nuestro equipo de expertos.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm text-center border border-slate-100">
                    <div
                        class="w-16 h-16 bg-finance-blue text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 border-4 border-white shadow-md">
                        3</div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Resultados y Seguimiento</h3>
                    <p class="text-slate-600 text-sm">
                        Entregamos informes detallados y realizamos seguimiento continuo para asegurar el éxito a largo
                        plazo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-finance-dark mb-4">Preguntas Frecuentes</h2>
                <p class="text-slate-600">
                    Respuestas a las dudas más comunes sobre nuestros servicios.
                </p>
            </div>

            <div class="space-y-4">
                <div class="border border-slate-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-bold text-finance-dark mb-2">¿Trabajan con empresas de todos los tamaños?</h3>
                    <p class="text-slate-600 text-sm">Sí, adaptamos nuestros servicios tanto para startups y PYMES como
                        para grandes corporaciones.</p>
                </div>
                <div class="border border-slate-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-bold text-finance-dark mb-2">¿Ofrecen servicios internacionales?</h3>
                    <p class="text-slate-600 text-sm">Sí, contamos con experiencia en normativas internacionales y podemos
                        asistir a empresas con operaciones en el extranjero.</p>
                </div>
                <div class="border border-slate-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-bold text-finance-dark mb-2">¿Cómo se estructuran sus tarifas?</h3>
                    <p class="text-slate-600 text-sm">Nuestras tarifas se basan en la complejidad y alcance del proyecto.
                        Ofrecemos cotizaciones personalizadas tras una evaluación inicial gratuita.</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.cta')
@endsection
