@extends('layouts.app')

@section('title', 'Transformación Digital - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-finance-dark text-white py-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/outsourcing-hero.png') }}" alt="Transformación Digital"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up leading-tight">
                Transformación <span class="text-finance-gold">Digital</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl animate-fade-in-up leading-relaxed" style="animation-delay: 0.2s;">
                La contabilidad y la gestión financiera tradicionales están cambiando rápidamente con las nuevas
                tecnologías.
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
                            <h2 class="text-3xl font-bold text-finance-dark mb-6">Eficiencia y Modernidad</h2>
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                En nuestro servicio de Transformación Digital, llevamos tus procesos contables y
                                administrativos al
                                siguiente nivel de eficiencia y modernidad. ¿En qué consiste? En digitalizar y automatizar
                                tus
                                operaciones financieras: menos papeleo, más información en tiempo real y mejor control desde
                                cualquier
                                lugar.
                            </p>
                            <p class="text-lg text-slate-600 leading-relaxed">
                                La tecnología se convierte en tu aliada para que tomes decisiones informadas de forma ágil.
                            </p>
                        </div>
                        <div class="lg:w-1/2">
                            <div
                                class="relative rounded-lg overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                                <img src="{{ asset('images/outsourcing-content.png') }}" alt="Transformación Digital"
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
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Contabilidad sin papel</h3>
                            <p class="text-slate-600 text-sm">
                                Desmaterializamos la documentación física y migramos todo a formatos electrónicos seguros en
                                la
                                nube, accesibles con unos clics.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Información en tiempo real</h3>
                            <p class="text-slate-600 text-sm">
                                Con sistemas contables modernos, podrás ver el estado financiero de tu empresa al día.
                                Tableros de
                                control y reportes actualizados automáticamente.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Automatización de tareas</h3>
                            <p class="text-slate-600 text-sm">
                                Implementamos herramientas que ejecutan automáticamente procesos repetitivos como
                                conciliaciones
                                bancarias o emisión de facturas.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Integración de sistemas</h3>
                            <p class="text-slate-600 text-sm">
                                Conectamos tus plataformas de negocio (facturación, inventarios, bancos, CRM) con tu
                                contabilidad
                                para eliminar la doble digitación.
                            </p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-shadow">
                            <h3 class="text-xl font-bold text-finance-dark mb-3">Adaptación y capacitación</h3>
                            <p class="text-slate-600 text-sm">
                                Capacitamos a tu equipo en el uso de las nuevas herramientas y brindamos acompañamiento
                                durante la
                                transición para asegurar la adopción.
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
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Implementación de software contable
                                </h4>
                                <p class="text-slate-600 text-sm">Asesoría, configuración y migración a la plataforma
                                    adecuada
                                    (somos partners de Alegra).</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Migración de datos y respaldo</h4>
                                <p class="text-slate-600 text-sm">Digitalización de registros, importación de catálogos y
                                    traslado
                                    de saldos e historial al nuevo entorno.</p>
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
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Reportes y dashboards</h4>
                                <p class="text-slate-600 text-sm">Reportes financieros a medida y paneles visuales
                                    interactivos para
                                    obtener insights valiosos.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Manual de procesos digitales</h4>
                                <p class="text-slate-600 text-sm">Guía de referencia clara que describe cómo llevar a cabo
                                    las
                                    tareas cotidianas en las nuevas plataformas.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-finance-gold shadow-sm shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-finance-dark text-lg mb-2">Capacitación y soporte</h4>
                                <p class="text-slate-600 text-sm">Sesiones de entrenamiento y periodo de soporte
                                    post-implementación
                                    para asegurar el éxito.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Evaluación inicial</h3>
                                <p class="text-slate-600 text-sm mt-2">Analizamos tu situación actual, procesos manuales y
                                    dolores
                                    operativos para definir oportunidades.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Plan digital a medida</h3>
                                <p class="text-slate-600 text-sm mt-2">Diseñamos un plan paso a paso, seleccionando
                                    herramientas y
                                    planificando la implementación.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Implementación tecnológica</h3>
                                <p class="text-slate-600 text-sm mt-2">Configuramos soluciones, migramos datos y probamos
                                    el
                                    funcionamiento en entorno controlado.</p>
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
                                <h3 class="text-xl font-bold text-finance-dark">Formación y cambio cultural</h3>
                                <p class="text-slate-600 text-sm mt-2">Capacitamos a tu personal con talleres prácticos y
                                    gestionamos el cambio cultural.</p>
                            </div>
                        </div>

                        <div class="relative flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                                <h3 class="text-xl font-bold text-finance-dark">Acompañamiento en vivo</h3>
                                <p class="text-slate-600 text-sm mt-2">Lanzamos los nuevos procesos y te acompañamos de
                                    cerca,
                                    monitoreando y ajustando.</p>
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
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Esta transformación implica cambiar todo
                                mi
                                software actual?</h3>
                            <p class="text-slate-600">
                                No necesariamente. Evaluamos caso por caso. A veces basta con integrar lo que ya tienes;
                                otras,
                                recomendaremos un software más moderno si es beneficioso.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué tan seguro es manejar la contabilidad
                                en la
                                nube?</h3>
                            <p class="text-slate-600">
                                Muy seguro. Las plataformas utilizan encriptación de nivel bancario. Además, configuramos
                                accesos
                                seguros y backups. Suele ser más seguro que servidores locales.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿La transformación digital solo aplica a
                                empresas
                                grandes?</h3>
                            <p class="text-slate-600">
                                En absoluto. Las pymes también obtienen grandes beneficios. Adaptamos la escala del proyecto
                                a tu
                                tamaño, desde implementaciones sencillas hasta complejas.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cuánto tiempo lleva ver resultados
                                después de la
                                implementación?</h3>
                            <p class="text-slate-600">
                                Muchos resultados son inmediatos (acceso en línea). Otros, como eficiencia, se evidencian
                                tras el
                                primer ciclo contable. En pocos meses se notan ahorros significativos.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué pasa si mi equipo no se adapta bien a
                                la
                                nueva tecnología?</h3>
                            <p class="text-slate-600">
                                Ponemos énfasis en capacitación y acompañamiento. Ofrecemos sesiones adicionales y
                                designamos
                                "campeones digitales" para asegurar que nadie se quede atrás.
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Da el salto hacia la eficiencia moderna</h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        Digitaliza tus procesos con el apoyo de OTIUM y descubre una manera más ágil y segura de gestionar
                        tu
                        empresa.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                        Contáctanos Ahora
                    </a>
                </div>
            </section>
        @endsection
