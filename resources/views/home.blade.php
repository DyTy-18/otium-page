@extends('layouts.app')

@section('title', 'OTIUM - Consultoría Financiera y Auditoría')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-finance-dark text-white overflow-hidden">
        <div
            class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-finance-dark via-finance-dark/90 to-transparent"></div>

        <div class="container mx-auto px-6 py-24 md:py-32 relative z-10">
            <div class="max-w-3xl animate-fade-in-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Transformamos la gestión financiera, <span class="text-finance-gold">contable y digital</span> de tu
                    empresa.
                </h1>
                <p class="text-lg md:text-xl text-slate-300 mb-8 leading-relaxed max-w-2xl">
                    Acompañamos a medianas y grandes empresas con soluciones integrales en outsourcing contable y
                    financiero, auditoría, análisis de datos y transformación digital.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors text-center transform hover:scale-105 transition-transform duration-200">
                        Solicitar Consulta
                    </a>
                    <a href="{{ route('services') }}"
                        class="px-8 py-4 border border-white text-white font-bold rounded hover:bg-white hover:text-finance-dark transition-colors text-center transform hover:scale-105 transition-transform duration-200">
                        Nuestros Servicios
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestro Enfoque Section -->
    <section class="py-20 bg-white border-b border-slate-200">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-finance-dark mb-4">Nuestro Enfoque</h2>
                <div class="w-20 h-1 bg-finance-gold mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">Cierres contables a tiempo</h3>
                    <p class="text-slate-600 text-sm">Garantizamos cierres mensuales puntuales para tu tranquilidad.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">Cumplimiento tributario</h3>
                    <p class="text-slate-600 text-sm">Gestión fiscal rigurosa sin sorpresas ni contingencias.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">Dashboards en Power BI</h3>
                    <p class="text-slate-600 text-sm">Visualización de datos ejecutivos para decisiones informadas.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">Integración de Sistemas</h3>
                    <p class="text-slate-600 text-sm">Conectamos SAP/Odoo con Microsoft 365, SharePoint y Power BI.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-gold hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">Equipos Bilingües</h3>
                    <p class="text-slate-600 text-sm">Profesionales con acreditaciones internacionales a tu servicio.</p>
                </div>
                <div class="p-6 bg-slate-50 rounded-lg border-l-4 border-finance-blue hover:shadow-md transition-all">
                    <h3 class="font-bold text-finance-dark text-lg mb-2">+14 Años de Experiencia</h3>
                    <p class="text-slate-600 text-sm">Especialistas en alimentos, exportación y servicios corporativos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-12 bg-finance-blue text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="text-4xl font-bold text-finance-gold mb-2">500+</div>
                    <div class="text-sm uppercase tracking-wider opacity-80">Proyectos Completados</div>
                </div>
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="text-4xl font-bold text-finance-gold mb-2">15+</div>
                    <div class="text-sm uppercase tracking-wider opacity-80">Años de Experiencia</div>
                </div>
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="text-4xl font-bold text-finance-gold mb-2">100%</div>
                    <div class="text-sm uppercase tracking-wider opacity-80">Satisfacción del Cliente</div>
                </div>
                <div class="transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="text-4xl font-bold text-finance-gold mb-2">50+</div>
                    <div class="text-sm uppercase tracking-wider opacity-80">Expertos Financieros</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Por Qué Elegirnos Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-finance-dark mb-4">Por Qué Elegirnos</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Valor diferencial que impulsa tu crecimiento.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="p-8 bg-slate-50 rounded-lg border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-12 h-12 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Metodologías Modernas</h3>
                    <p class="text-slate-600">Aplicamos las mejores prácticas en contabilidad, auditoría y Business
                        Intelligence.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="p-8 bg-slate-50 rounded-lg border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-12 h-12 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Integraciones Avanzadas</h3>
                    <p class="text-slate-600">Expertos en conectar SAP/Odoo con el ecosistema Microsoft 365.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="p-8 bg-slate-50 rounded-lg border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group">
                    <div
                        class="w-12 h-12 bg-finance-blue/10 text-finance-blue rounded-lg flex items-center justify-center mb-6 group-hover:bg-finance-blue group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Acompañamiento Estratégico</h3>
                    <p class="text-slate-600">No solo operamos, te asesoramos para obtener resultados medibles.</p>
                </div>
                <!-- Feature 4 -->
                <div
                    class="p-8 bg-slate-50 rounded-lg border border-slate-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group md:col-span-3 lg:col-span-3 text-center">
                    <h3 class="text-xl font-bold text-finance-dark mb-3">Proyectos Exitosos en Múltiples Industrias</h3>
                    <p class="text-slate-600">Nuestra experiencia transversal garantiza soluciones probadas y efectivas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-finance-dark mb-4">Nuestros Servicios</h2>
                    <p class="text-slate-600 max-w-xl">
                        Soluciones integrales diseñadas para cada etapa de tu negocio.
                    </p>
                </div>
                <a href="{{ route('services') }}"
                    class="mt-4 md:mt-0 text-finance-blue font-semibold hover:text-finance-gold transition-colors flex items-center gap-2 group">
                    Ver Todos los Servicios <span aria-hidden="true"
                        class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white p-6 rounded shadow-sm hover:shadow-md transition-shadow border-t-4 border-finance-gold">
                    <h3 class="font-bold text-lg text-finance-dark mb-2">Outsourcing Contable</h3>
                    <p class="text-sm text-slate-600 mb-4">Tu departamento contable externo. Nos encargamos de tus libros y
                        obligaciones.</p>
                    <a href="{{ route('services.outsourcing') }}"
                        class="text-sm font-medium text-finance-blue hover:underline">Leer más</a>
                </div>
                <div
                    class="bg-white p-6 rounded shadow-sm hover:shadow-md transition-shadow border-t-4 border-finance-blue">
                    <h3 class="font-bold text-lg text-finance-dark mb-2">Operaciones Financieras</h3>
                    <p class="text-sm text-slate-600 mb-4">Claridad en rentabilidad, valoración y optimización de recursos.
                    </p>
                    <a href="{{ route('services.financial-operations') }}"
                        class="text-sm font-medium text-finance-blue hover:underline">Leer más</a>
                </div>
                <div
                    class="bg-white p-6 rounded shadow-sm hover:shadow-md transition-shadow border-t-4 border-finance-gold">
                    <h3 class="font-bold text-lg text-finance-dark mb-2">Auditoría</h3>
                    <p class="text-sm text-slate-600 mb-4">Validación independiente y confianza para tus decisiones.</p>
                    <a href="{{ route('services.audit') }}"
                        class="text-sm font-medium text-finance-blue hover:underline">Leer más</a>
                </div>
                <div
                    class="bg-white p-6 rounded shadow-sm hover:shadow-md transition-shadow border-t-4 border-finance-blue">
                    <h3 class="font-bold text-lg text-finance-dark mb-2">Transformación Digital</h3>
                    <p class="text-sm text-slate-600 mb-4">Digitaliza y automatiza tus procesos contables y
                        administrativos.</p>
                    <a href="{{ route('services.digital-transformation') }}"
                        class="text-sm font-medium text-finance-blue hover:underline">Leer más</a>
                </div>
                <div
                    class="bg-white p-6 rounded shadow-sm hover:shadow-md transition-shadow border-t-4 border-finance-gold">
                    <h3 class="font-bold text-lg text-finance-dark mb-2">Constitución de Empresas</h3>
                    <p class="text-sm text-slate-600 mb-4">Te acompañamos en todo el proceso legal para iniciar tu negocio.
                    </p>
                    <a href="{{ route('services.company-incorporation') }}"
                        class="text-sm font-medium text-finance-blue hover:underline">Leer más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-finance-dark mb-6">Quiénes Somos</h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        Somos una firma de consultoría con oficinas en <span class="font-bold text-finance-blue">La
                            Paz</span> y <span class="font-bold text-finance-blue">Santa Cruz</span>.
                    </p>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        Guiamos a empresas y emprendedores desde su constitución hasta la optimización completa de sus
                        operaciones financieras, tributarias y digitales.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Ayudamos a organizaciones bolivianas y extranjeras a ordenar sus finanzas, mejorar la eficiencia
                        operativa y escalar mediante tecnología.
                    </p>
                </div>
                <div class="lg:w-1/2 flex flex-col gap-4">
                    <!-- La Paz Map -->
                    <div class="bg-white p-4 rounded-xl shadow-lg border border-slate-100">
                        <h3 class="font-bold text-finance-dark mb-2 flex items-center gap-2">
                            <span class="text-finance-gold">📍</span> Oficina La Paz
                        </h3>
                        <div class="h-48 rounded-lg overflow-hidden bg-slate-200">
                            <iframe
                                src="https://maps.google.com/maps?q=Calle+Ferrecio+1154,+La+Paz,+Bolivia&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                width="100%" height="100%" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>

                    <!-- Santa Cruz Map -->
                    <div class="bg-white p-4 rounded-xl shadow-lg border border-slate-100">
                        <h3 class="font-bold text-finance-dark mb-2 flex items-center gap-2">
                            <span class="text-finance-gold">📍</span> Oficina Santa Cruz
                        </h3>
                        <div class="h-48 rounded-lg overflow-hidden bg-slate-200">
                            <iframe
                                src="https://maps.google.com/maps?q=Calle+Los+Lirios+1000,+Santa+Cruz+de+la+Sierra,+Bolivia&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                width="100%" height="100%" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Insights Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-finance-dark mb-4">Últimos Insights</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Mantente informado con nuestras últimas publicaciones sobre finanzas, impuestos y tecnología.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                    <a href="{{ route('blog.show', 'importancia-contabilidad-digital') }}"
                        class="block overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Contabilidad Digital"
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-finance-gold uppercase tracking-wider">Tecnología</span>
                            <span class="text-xs text-slate-500">Nov 28, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-2 hover:text-finance-blue transition-colors">
                            <a href="{{ route('blog.show', 'importancia-contabilidad-digital') }}">La Importancia de la
                                Contabilidad Digital</a>
                        </h3>
                        <p class="text-slate-600 text-sm mb-4">
                            Descubre cómo la digitalización está transformando la gestión financiera...
                        </p>
                        <a href="{{ route('blog.show', 'importancia-contabilidad-digital') }}"
                            class="text-finance-blue font-bold text-sm hover:underline">Leer más &rarr;</a>
                    </div>
                </article>

                <!-- Post 2 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                    <a href="{{ route('blog.show', 'auditoria-interna-clave-exito') }}"
                        class="block overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Auditoría Interna"
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-finance-gold uppercase tracking-wider">Auditoría</span>
                            <span class="text-xs text-slate-500">Nov 25, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-2 hover:text-finance-blue transition-colors">
                            <a href="{{ route('blog.show', 'auditoria-interna-clave-exito') }}">Auditoría Interna: La
                                Clave para el Éxito</a>
                        </h3>
                        <p class="text-slate-600 text-sm mb-4">
                            Más allá del cumplimiento, la auditoría interna ofrece una visión profunda...
                        </p>
                        <a href="{{ route('blog.show', 'auditoria-interna-clave-exito') }}"
                            class="text-finance-blue font-bold text-sm hover:underline">Leer más &rarr;</a>
                    </div>
                </article>

                <!-- Post 3 -->
                <article
                    class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                    <a href="{{ route('blog.show', 'estrategias-fiscales-pymes') }}" class="block overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1586486855514-8c633cc6fd38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Estrategias Fiscales"
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-bold text-finance-gold uppercase tracking-wider">Impuestos</span>
                            <span class="text-xs text-slate-500">Nov 20, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-finance-dark mb-2 hover:text-finance-blue transition-colors">
                            <a href="{{ route('blog.show', 'estrategias-fiscales-pymes') }}">Estrategias Fiscales para
                                PyMEs</a>
                        </h3>
                        <p class="text-slate-600 text-sm mb-4">
                            Consejos prácticos para optimizar la carga tributaria de tu empresa...
                        </p>
                        <a href="{{ route('blog.show', 'estrategias-fiscales-pymes') }}"
                            class="text-finance-blue font-bold text-sm hover:underline">Leer más &rarr;</a>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('blog.index') }}"
                    class="inline-block border-2 border-finance-blue text-finance-blue font-bold py-3 px-8 rounded hover:bg-finance-blue hover:text-white transition-colors duration-300">
                    Ver todas las publicaciones
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-finance-dark mb-4">Lo que dicen nuestros clientes</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    La confianza de nuestros clientes es nuestro mayor activo.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg relative shadow-sm hover:shadow-lg transition-shadow">
                    <div class="text-finance-gold text-6xl absolute top-4 left-4 opacity-20">"</div>
                    <p class="text-slate-700 mb-6 relative z-10 italic">
                        "OTIUM transformó nuestra gestión financiera. Su atención al detalle y consejos estratégicos nos
                        ayudaron a optimizar nuestros recursos."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-300 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="Cliente" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-finance-dark">Carlos Mendoza</h4>
                            <p class="text-sm text-slate-500">CEO, TechSolutions</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg relative shadow-sm hover:shadow-lg transition-shadow">
                    <div class="text-finance-gold text-6xl absolute top-4 left-4 opacity-20">"</div>
                    <p class="text-slate-700 mb-6 relative z-10 italic">
                        "Profesionalismo puro. Nos guiaron a través de una auditoría compleja sin problemas. Altamente
                        recomendados."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-300 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="Cliente" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-finance-dark">Ana García</h4>
                            <p class="text-sm text-slate-500">Directora Financiera, Grupo Alfa</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg relative shadow-sm hover:shadow-lg transition-shadow">
                    <div class="text-finance-gold text-6xl absolute top-4 left-4 opacity-20">"</div>
                    <p class="text-slate-700 mb-6 relative z-10 italic">
                        "El equipo de OTIUM no solo son auditores, son socios estratégicos. Su visión nos ayudó a
                        expandirnos con seguridad."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-300 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="Cliente" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-finance-dark">Roberto Díaz</h4>
                            <p class="text-sm text-slate-500">Fundador, Inversiones RD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-finance-blue text-white relative overflow-hidden">
        <!-- Decorative circles -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-finance-gold opacity-10 rounded-full translate-x-1/3 translate-y-1/3">
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para asegurar su futuro financiero?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Contáctenos hoy para una consulta inicial gratuita con uno de nuestros expertos.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-8 py-4 bg-finance-gold text-finance-dark font-bold rounded hover:bg-finance-gold-light transition-colors shadow-lg transform hover:scale-105 transition-transform">
                Contáctenos Ahora
            </a>
        </div>
    </section>
@endsection
