@extends('layouts.app')

@section('title', 'Outsourcing Contable - OTIUM')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-finance-dark text-white py-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/outsourcing-hero.png') }}" alt="Outsourcing Contable"
                class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up leading-tight">
                Outsourcing <span class="text-finance-gold">Contable</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl animate-fade-in-up leading-relaxed" style="animation-delay: 0.2s;">
                ¿Estás destinando demasiado tiempo y recursos a tareas contables en lugar de enfocarte en hacer crecer tu
                negocio?
            </p>
        </div>
    </div>

    <!-- Intro Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-finance-dark mb-6">Tu Departamento Contable Externo</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-6">
                        Nuestro servicio de outsourcing contable te permite delegar en expertos todas esas responsabilidades
                        administrativas y financieras.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        En <span class="font-bold text-finance-dark">OTIUM</span> nos convertimos en tu aliado estratégico:
                        llevamos tus libros al día, gestionamos tus obligaciones tributarias y laborales, y te entregamos
                        información financiera confiable para que tomes decisiones con tranquilidad.
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

            <!-- Key Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-20">
                <div
                    class="p-8 bg-slate-50 rounded-xl border-t-4 border-finance-gold hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-finance-gold/10 text-finance-gold rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-gold group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Enfoque en tu negocio</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Al externalizar la contabilidad, tu equipo puede concentrarse en las actividades clave que generan
                        valor, mientras nosotros nos ocupamos de los números.
                    </p>
                </div>
                <div
                    class="p-8 bg-slate-50 rounded-xl border-t-4 border-finance-blue hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Cumplimiento garantizado</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Nos aseguramos de que tu empresa cumpla puntualmente con las normas contables, tributarias y
                        laborales vigentes, evitando multas y retrasos.
                    </p>
                </div>
                <div
                    class="p-8 bg-slate-50 rounded-xl border-t-4 border-finance-gold hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-finance-gold/10 text-finance-gold rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-gold group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Expertos a tu servicio</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Tendrás un equipo contable profesional con años de experiencia, sin asumir el costo fijo de personal
                        interno. Nuestros especialistas manejan desde registros diarios hasta cierres mensuales.
                    </p>
                </div>
                <div
                    class="p-8 bg-slate-50 rounded-xl border-t-4 border-finance-blue hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Tecnología y eficiencia</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Utilizamos plataformas contables modernas y soluciones en la nube para procesar tu información de
                        manera eficiente y segura. Acceso en tiempo real a tus datos.
                    </p>
                </div>
                <div
                    class="p-8 bg-slate-50 rounded-xl border-t-4 border-finance-gold hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-finance-gold/10 text-finance-gold rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-gold group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Escalabilidad</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Nuestro servicio se adapta al crecimiento de tu empresa. Podemos gestionar un mayor volumen de
                        transacciones o procesos complejos manteniendo la calidad.
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
                <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                    <div
                        class="w-12 h-12 bg-finance-blue/5 rounded-full flex items-center justify-center text-finance-gold shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Estados financieros periódicos</h4>
                        <p class="text-slate-600 text-sm">Balance general, estado de resultados y flujo de efectivo
                            elaborados bajo normas locales y/o estándares internacionales (NIIF).</p>
                    </div>
                </div>
                <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                    <div
                        class="w-12 h-12 bg-finance-blue/5 rounded-full flex items-center justify-center text-finance-gold shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Declaraciones tributarias</h4>
                        <p class="text-slate-600 text-sm">Presentadas a tiempo (impuestos mensuales, anuales y
                            declaraciones juradas), con sus comprobantes correspondientes.</p>
                    </div>
                </div>
                <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                    <div
                        class="w-12 h-12 bg-finance-blue/5 rounded-full flex items-center justify-center text-finance-gold shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Planillas laborales</h4>
                        <p class="text-slate-600 text-sm">Cálculo de aportes sociales (AFPs, caja de salud, Ministerio de
                            Trabajo), asegurando el cumplimiento con empleados y el Estado.</p>
                    </div>
                </div>
                <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                    <div
                        class="w-12 h-12 bg-finance-blue/5 rounded-full flex items-center justify-center text-finance-gold shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Reportes de gestión</h4>
                        <p class="text-slate-600 text-sm">Reportes de cuentas por cobrar/pagar, análisis de gastos e
                            indicadores clave para entender la salud financiera de tu negocio.</p>
                    </div>
                </div>
                <div class="flex gap-4 p-4 bg-white rounded-lg shadow-sm">
                    <div
                        class="w-12 h-12 bg-finance-blue/5 rounded-full flex items-center justify-center text-finance-gold shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-finance-dark text-lg mb-2">Asesoría continua</h4>
                        <p class="text-slate-600 text-sm">Respuestas a tus consultas contables y recomendaciones para
                            optimizar tus procesos financieros.</p>
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
                <!-- Vertical Line -->
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-slate-200 -translate-x-1/2"></div>

                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Diagnóstico inicial</h3>
                        <p class="text-slate-600 text-sm mt-2">Revisamos la situación contable y fiscal, identificando
                            necesidades, estado de libros y cumplimiento.</p>
                    </div>
                    <div
                        class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                        1</div>
                    <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0 hidden md:block"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2 order-2 md:order-1 hidden md:block"></div>
                    <div
                        class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                        2</div>
                    <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Plan de implementación</h3>
                        <p class="text-slate-600 text-sm mt-2">Definimos alcance, configuramos plataformas digitales y
                            establecemos calendario de trabajo.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Gestión contable mensual</h3>
                        <p class="text-slate-600 text-sm mt-2">Registro diario, conciliaciones, estados financieros,
                            cálculo de impuestos y declaraciones.</p>
                    </div>
                    <div
                        class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                        3</div>
                    <div class="md:w-1/2 order-2 md:order-3 hidden md:block"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2 order-2 md:order-1 hidden md:block"></div>
                    <div
                        class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                        4</div>
                    <div class="md:w-1/2 order-2 md:order-3 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Informe y revisión</h3>
                        <p class="text-slate-600 text-sm mt-2">Reportes mensuales/trimestrales y reuniones para explicar
                            resultados y planificar acciones.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2 md:text-right order-2 md:order-1 pl-20 md:pl-0">
                        <h3 class="text-xl font-bold text-finance-dark">Ajustes y mejoras continuas</h3>
                        <p class="text-slate-600 text-sm mt-2">Ajustamos procesos según tu crecimiento y cambios normativos
                            para mantener un servicio óptimo.</p>
                    </div>
                    <div
                        class="absolute left-8 md:left-1/2 top-0 -translate-x-1/2 w-8 h-8 bg-finance-blue text-white rounded-full flex items-center justify-center font-bold z-10 border-4 border-white shadow-sm">
                        5</div>
                    <div class="md:w-1/2 order-2 md:order-3 hidden md:block"></div>
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
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Por qué debería externalizar mi contabilidad?
                    </h3>
                    <p class="text-slate-600">
                        Externalizar tu contabilidad te permite ahorrar tiempo y costos operativos. En lugar de mantener un
                        departamento interno, accedes a un equipo de especialistas dedicado a mantener tus finanzas en
                        orden. Esto se traduce en menos errores, cumplimiento garantizado y más tiempo para centrarte en tu
                        estrategia de negocio.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cómo se protege la confidencialidad de mi
                        información financiera?</h3>
                    <p class="text-slate-600">
                        La confidencialidad es primordial para nosotros. Trabajamos con sistemas seguros y protocolos de
                        privacidad estrictos. Firmamos acuerdos de confidencialidad y utilizamos plataformas encriptadas
                        para manejar tus datos, asegurando que tu información financiera esté protegida.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Mi empresa es muy grande/pequeña para este
                        servicio?</h3>
                    <p class="text-slate-600">
                        Atendemos a empresas medianas y grandes que buscan optimizar su gestión contable, pero también
                        apoyamos a empresas en crecimiento. Escalamos nuestros recursos según el volumen y la complejidad de
                        tus operaciones, ajustando el servicio a lo que realmente necesitas.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Qué pasa si ya tengo un contador interno?</h3>
                    <p class="text-slate-600">
                        Nuestro servicio puede complementar el trabajo de tu contador interno o incluso asumirlo por
                        completo. Podemos encargarnos de tareas especializadas o picos de trabajo, o bien liberar a tu
                        personal interno de labores operativas para que se enfoque en análisis estratégicos. Nos adaptamos
                        al modelo que más beneficie a tu organización.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-finance-dark mb-2">¿Cómo empiezo con OTIUM si decido contratar el
                        outsourcing?</h3>
                    <p class="text-slate-600">
                        Es sencillo: contáctanos y coordinaremos una reunión inicial para conocer tu empresa. Luego
                        realizaremos el diagnóstico inicial gratuito y te presentaremos una propuesta a medida. Una vez que
                        aceptes, nuestro equipo iniciará la integración de inmediato para asumir tus procesos contables sin
                        interrupciones.
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
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para despreocuparte de la contabilidad y enfocarte en
                crecer tu empresa?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Contáctenos y te mostraremos cómo el outsourcing contable de OTIUM puede impulsar la eficiencia y el orden
                financiero en tu negocio.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                Contáctanos Ahora
            </a>
        </div>
    </section>
@endsection
