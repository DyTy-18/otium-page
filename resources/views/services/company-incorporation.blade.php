@extends('layouts.app')

@section('title', 'Constitución de Empresas - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-finance-dark text-white py-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/outsourcing-hero.png') }}" alt="Constitución de Empresas"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up leading-tight">
                Constitución de <span class="text-finance-gold">Empresas</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl animate-fade-in-up leading-relaxed" style="animation-delay: 0.2s;">
                Dar vida legal a un negocio en Bolivia implica múltiples pasos y trámites. En Constitución de Empresas, te
                acompañamos en todo el proceso.
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
                            <h2 class="text-3xl font-bold text-finance-dark mb-6">Tu Empresa, Legalmente Sólida</h2>
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Tanto si eres un emprendedor iniciando su primer proyecto como si representas a una empresa
                                extranjera
                                expandiéndose al país, nuestro equipo facilita la apertura de tu empresa de manera rápida,
                                segura y
                                conforme a normativa.
                            </p>
                        </div>
                        <div class="lg:w-1/2">
                            <div
                                class="relative rounded-lg overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                                <img src="{{ asset('images/outsourcing-content.png') }}" alt="Constitución de Empresas"
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
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Asesoramiento desde el inicio</h3>
                            <p class="text-slate-600 text-sm">
                                Te ayudamos a definir la figura legal más conveniente (SRL, SA, etc.) según tus objetivos.
                                Tomar
                                esta decisión correctamente evitará cambios costosos.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Trámites simplificados</h3>
                            <p class="text-slate-600 text-sm">
                                Olvídate de peregrinar por oficinas públicas. Nosotros gestionamos todo: reserva de nombre,
                                minuta,
                                notaría, registro de comercio y NIT.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Cumplimiento integral</h3>
                            <p class="text-slate-600 text-sm">
                                Aseguramos que cumplas con obligaciones mercantiles, tributarias y laborales (cajas de
                                salud, AFPs)
                                desde el primer día.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Agilidad y experiencia local</h3>
                            <p class="text-slate-600 text-sm">
                                Aceleramos el proceso gracias a nuestra experiencia. Conocemos los requisitos al detalle y
                                anticipamos observaciones para evitar demoras.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Base administrativa sólida</h3>
                            <p class="text-slate-600 text-sm">
                                Te orientamos en los primeros pasos: apertura de cuentas bancarias, emisión de facturas y
                                plan
                                básico de contabilidad.
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
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Escritura de constitución y estatutos
                                </h4>
                                <p class="text-slate-600 text-sm">Documento legal firmado ante notario que da origen a tu
                                    empresa.
                                    Entregamos copia protocolizada y testimonios.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Matrícula de comercio</h4>
                                <p class="text-slate-600 text-sm">Inscripción exitosa en el Registro de Comercio que
                                    acredita la
                                    existencia oficial de tu empresa.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">NIT y registro tributario</h4>
                                <p class="text-slate-600 text-sm">Gestión del Número de Identificación Tributaria ante
                                    autoridades
                                    fiscales, habilitándote para facturar.</p>
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
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Registro en entidades laborales</h4>
                                <p class="text-slate-600 text-sm">Inscripción en cajas de salud, AFPs y Ministerio de
                                    Trabajo para
                                    asegurar cobertura social a tu personal.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Kit de inicio administrativo</h4>
                                <p class="text-slate-600 text-sm">Paquete con guías prácticas, formatos de contratos,
                                    calendario de
                                    obligaciones y recomendaciones iniciales.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Reunión y recopilación de datos</h3>
                                <p class="text-slate-600 text-sm mt-2">Conocemos tu proyecto, socios, capital y actividad.
                                    Recopilamos documentos personales necesarios.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Preparación de documentos legales</h3>
                                <p class="text-slate-600 text-sm mt-2">Redactamos la minuta y coordinamos la firma de la
                                    escritura
                                    pública ante notario.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Inscripciones oficiales</h3>
                                <p class="text-slate-600 text-sm mt-2">Inscribimos la empresa en el Registro de Comercio y
                                    tramitamos el NIT en Impuestos Nacionales.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Registros complementarios</h3>
                                <p class="text-slate-600 text-sm mt-2">Realizamos inscripciones adicionales (alcaldía,
                                    cámaras,
                                    cajas de salud) según tu negocio.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Entrega y orientación final</h3>
                                <p class="text-slate-600 text-sm mt-2">Entregamos todos los documentos y repasamos tus
                                    obligaciones
                                    futuras en una reunión final.</p>
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
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué tipo de empresa me conviene crear
                                (SRL, S.A.,
                                unipersonal)?</h3>
                            <p class="text-slate-600">
                                Depende de tus planes. SRL es ideal para pocos socios, SA para atraer inversionistas y
                                unipersonal
                                es sencilla pero con responsabilidad ilimitada. Te asesoramos para elegir la mejor opción.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Quanto tiempo tarda constituir una
                                empresa en
                                Bolivia?</h3>
                            <p class="text-slate-600">
                                Generalmente entre 2 a 6 semanas. Varía según documentos y tiempos de instituciones.
                                Intentamos
                                acortar plazos y te mantenemos informado.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué documentos o requisitos debo aportar
                                yo como
                                cliente?</h3>
                            <p class="text-slate-600">
                                Copias de cédulas de identidad, nombre deseado, actividad y domicilio legal. Si hay socios
                                extranjeros, se pueden requerir poderes. Te damos la lista completa al iniciar.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Pueden constituir una empresa a nombre de
                                extranjeros o empresas de afuera?</h3>
                            <p class="text-slate-600">
                                Sí. Asistimos a inversionistas extranjeros, coordinando documentos y representándolos
                                mediante poder
                                si es necesario para que no tengan que viajar.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">Luego de constituir mi empresa, ¿qué sigue
                                y cómo
                                me pueden ayudar?</h3>
                            <p class="text-slate-600">
                                Tendrás obligaciones periódicas como impuestos y contabilidad. Podemos seguir apoyándote con
                                outsourcing contable y asesoría para que te enfoques en crecer.
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Empieza tu empresa con el pie derecho</h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        Deja en manos de OTIUM la constitución legal y formal de tu negocio, y ahorra tiempo y
                        preocupaciones.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                        Contáctanos Ahora
                    </a>
                </div>
            </section>
        @endsection
