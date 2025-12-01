@extends('layouts.app')

@section('title', 'Operaciones Financieras - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-finance-dark text-white py-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/outsourcing-hero.png') }}" alt="Operaciones Financieras"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up leading-tight">
                Operaciones <span class="text-finance-gold">Financieras</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl animate-fade-in-up leading-relaxed" style="animation-delay: 0.2s;">
                ¿Tienes claridad sobre la rentabilidad real de tu empresa, el valor de tu negocio o cómo financiar tus
                próximos proyectos?
            </p>
        </div>
    </div>

    <!-- Intro Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16 mb-16">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-finance-dark mb-6">Claridad y Estrategia Financiera</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-6">
                        En nuestro servicio de Operaciones Financieras, te ayudamos a obtener esa claridad y a optimizar la
                        gestión de tus recursos. Combinamos análisis financiero avanzado con conocimiento estratégico para
                        que
                        tomes decisiones informadas.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Además, nos aseguramos de que tus operaciones financieras estén alineadas
                        con una planificación tributaria inteligente, cumpliendo con la normativa sin sacrificar eficiencia.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div
                        class="relative rounded-lg overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="{{ asset('images/outsourcing-content.png') }}" alt="Análisis Financiero"
                            class="w-full h-auto">
                        <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/60 to-transparent">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Benefits -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Visibilidad total de tus finanzas</h3>
                    <p class="text-slate-600 text-sm">
                        Analizamos tus estados financieros en detalle para identificar la rentabilidad por producto,
                        servicio o unidad de negocio. Te entregamos una visión clara de dónde estás ganando o perdiendo
                        dinero.
                    </p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Valoración y crecimiento</h3>
                    <p class="text-slate-600 text-sm">
                        Determinamos cuánto vale tu empresa o proyecto mediante métodos de valuación profesionales. También
                        evaluamos la viabilidad financiera de nuevas inversiones o expansiones.
                    </p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Optimización de recursos</h3>
                    <p class="text-slate-600 text-sm">
                        Te orientamos en la gestión eficiente de tu capital de trabajo, endeudamiento e inversiones. Incluye
                        proyecciones de flujo de caja y análisis de costos.
                    </p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Cumplimiento y estrategia fiscal</h3>
                    <p class="text-slate-600 text-sm">
                        Integramos la planificación tributaria en tus operaciones financieras. Identificamos oportunidades
                        de optimización fiscal y aseguramos el cumplimiento de obligaciones.
                    </p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Herramientas de inteligencia de negocios</h3>
                    <p class="text-slate-600 text-sm">
                        Utilizamos dashboards interactivos y modelos financieros soportados por herramientas BI para
                        presentarte indicadores clave y monitorear tu desempeño en tiempo real.
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
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Informe de diagnóstico financiero</h4>
                        <p class="text-slate-600 text-sm">Análisis detallado de la situación actual, ratios financieros,
                            puntos de equilibrio y margen de ganancias.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Proyecciones y presupuestos</h4>
                        <p class="text-slate-600 text-sm">Elaboración de proyecciones financieras a medida (presupuestos
                            anuales, flujos de caja, escenarios "what-if").</p>
                    </div>
                </div>
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
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Valuaciones y estudios</h4>
                        <p class="text-slate-600 text-sm">Informes de valuación de empresa o proyectos, y estudios de
                            factibilidad financiera para nuevas iniciativas.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Dashboard financiero personalizado</h4>
                        <p class="text-slate-600 text-sm">Tablero de control con indicadores financieros y operativos
                            relevantes implementado en herramientas de BI.</p>
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
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Plan de optimización fiscal</h4>
                        <p class="text-slate-600 text-sm">Recomendaciones para aprovechar incentivos fiscales y garantizar
                            el cumplimiento normativo.</p>
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
                        <h3 class="text-xl font-bold text-finance-dark">Recolección de información</h3>
                        <p class="text-slate-600 text-sm mt-2">Recopilamos estados financieros históricos y reportes
                            internos, trabajando bajo confidencialidad.</p>
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
                        <h3 class="text-xl font-bold text-finance-dark">Análisis y diagnóstico</h3>
                        <p class="text-slate-600 text-sm mt-2">Diagnosticamos la salud financiera identificando fortalezas,
                            debilidades y riesgos.</p>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Recomendaciones estratégicas</h3>
                        <p class="text-slate-600 text-sm mt-2">Formulamos estrategias para reducir costos, mejorar márgenes
                            y optimizar financiamiento.</p>
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
                        <h3 class="text-xl font-bold text-finance-dark">Implementación y acompañamiento</h3>
                        <p class="text-slate-600 text-sm mt-2">Apoyamos en la ejecución de medidas, configuración de
                            dashboards y métricas de control.</p>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Monitoreo y ajuste continuo</h3>
                        <p class="text-slate-600 text-sm mt-2">Revisamos indicadores periódicamente y ajustamos el plan
                            según cambios en el entorno.</p>
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
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿En qué se diferencia este servicio de contratar
                        un gerente financiero o CFO interno?</h3>
                    <p class="text-slate-600">
                        OTIUM te brinda un equipo de expertos multidisciplinarios a un costo menor que un ejecutivo C-level
                        interno. Aportamos una visión externa e imparcial, experiencia en diversas industrias y herramientas
                        especializadas de análisis.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Pueden ayudarme a conseguir financiamiento o
                        inversionistas?</h3>
                    <p class="text-slate-600">
                        Nuestro enfoque principal es optimizar tu gestión financiera interna y preparar tu empresa para ser
                        atractiva a financiamiento. Te asesoramos en la preparación de la documentación financiera y podemos
                        conectar con expertos.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">Mi empresa ya cuenta con un departamento de
                        finanzas, ¿es necesario este servicio?</h3>
                    <p class="text-slate-600">
                        Nuestros servicios son complementarios. Trabajamos junto a tu departamento de finanzas aportando
                        análisis especializados, segundas opiniones y proyectos específicos que quizá tu equipo no pueda
                        abordar plenamente.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cómo incorporan el aspecto tributario en las
                        recomendaciones financieras?</h3>
                    <p class="text-slate-600">
                        Analizamos el impacto tributario de cada decisión financiera. Al proponer una reestructuración o
                        inversión, consideramos los efectos fiscales asociados para maximizar beneficios y minimizar
                        riesgos.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cada cuánto se reúnen con nosotros y por cuánto
                        tiempo apoyan a la empresa?</h3>
                    <p class="text-slate-600">
                        Definimos un cronograma según tus necesidades. Puede haber reuniones mensuales o trimestrales. Somos
                        flexibles y ajustamos la duración y frecuencia del soporte para brindar el mayor valor posible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CTA for this page -->
    <section class="py-20 bg-finance-blue text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-finance-gold opacity-10 rounded-full translate-x-1/3 translate-y-1/3">
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Con OTIUM obtienes una visión financiera integral</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Contáctanos y potencia tus operaciones financieras: toma decisiones respaldadas por datos y lleva el control
                total de la salud económica de tu negocio.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                Contáctanos Ahora
            </a>
        </div>
    </section>
@endsection
