@extends('layouts.app')

@section('title', 'Nosotros - FinAudit')

@section('content')
    <div class="bg-finance-dark text-white py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">Sobre Nosotros</h1>
            <p class="text-xl text-slate-300 max-w-2xl">
                Nos dedicamos al asesoramiento contable, financiero y tributario, a través de herramientas y técnicas
                digitales.
            </p>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-start">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1632&q=80"
                        alt="Equipo OTIUM" class="rounded-lg shadow-xl mb-8">

                    <h2 class="text-2xl font-bold text-finance-dark mb-4">Propósito Fundamental</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Iniciamos todos los días nuestro trabajo con el propósito y ganas de darte el mejor asesoramiento.
                        Queremos que toda decisión que tomes en tu empresa sea antes evaluada por nosotros y así dar la
                        mejor solución a tus problemas.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-finance-dark mb-4">Futuro Visualizado</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Te diremos primero como no nos vemos. No nos vemos como la firma más grande, ni la que más clientes
                        tiene o la que genera mayor rentabilidad.
                    </p>
                    <p class="text-slate-600 mb-6 leading-relaxed font-semibold text-finance-blue">
                        Nos vemos como una firma que entrega VALOR.
                    </p>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        En un futuro Otium será sinónimo de innovación, excelente servicio y un lugar donde la gente quiera
                        ser parte de la familia de Otium por su filosofía de trabajo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-finance-blue text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Nuestros Valores</h2>
                <p class="text-blue-100 max-w-2xl mx-auto">
                    Los pilares que sostienen nuestra cultura y servicio.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Accountability</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Responsabilidad en Equipo</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Transparencia</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Horarios Flexibles</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Flexibilidad de Ambiente</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Formación Constante</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Alegría</h3>
                </div>
                <div
                    class="bg-white/10 p-6 rounded-lg backdrop-blur-sm border border-white/10 text-center hover:bg-white/20 transition-colors">
                    <h3 class="font-bold mb-2">Amistad</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Areas of Work Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-finance-dark mb-4">¿Qué podemos hacer para vos?</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Nuestras áreas de trabajo especializadas.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Area 1 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-slate-100">
                    <h3 class="text-xl font-bold text-finance-dark mb-4 border-b-2 border-finance-gold pb-2 inline-block">
                        Contabilidad Digital</h3>
                    <ul class="space-y-2 text-slate-600">
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Outsourcing Contable
                        </li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Payroll (planillas)
                        </li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Cierre de EEFF</li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Revaluo Técnico</li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Contabilidad NIIF</li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Outsourcing
                            Administrativo</li>
                    </ul>
                </div>

                <!-- Area 2 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-slate-100">
                    <h3 class="text-xl font-bold text-finance-dark mb-4 border-b-2 border-finance-blue pb-2 inline-block">
                        Impuestos</h3>
                    <ul class="space-y-2 text-slate-600">
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Outsourcing
                            Declaraciones</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Planificación
                            Tributaria</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Emprendimiento</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Transacciones
                            Especiales</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Elaboración ITC</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Calculo IUE</li>
                        <li class="flex items-center gap-2"><span class="text-finance-blue">•</span> Minería de Datos</li>
                    </ul>
                </div>

                <!-- Area 3 -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-slate-100">
                    <h3 class="text-xl font-bold text-finance-dark mb-4 border-b-2 border-finance-gold pb-2 inline-block">
                        Auditoría</h3>
                    <ul class="space-y-2 text-slate-600">
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Auditoría Financiera
                        </li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Auditoría Operativa
                        </li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Auditoria Especial</li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Auditoría Técnica</li>
                        <li class="flex items-center gap-2"><span class="text-finance-gold">•</span> Outsourcing Auditoria
                            Interna</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-finance-dark mb-4">Nuestro Liderazgo</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Conozca a los expertos que guían nuestra firma y su éxito financiero.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Team Member 1: Zaulo Vasquez -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <div class="relative h-80 bg-slate-200 overflow-hidden">
                        <img src="https://otium.com.bo/rsc/emp/emp1.png" alt="Zaulo Vasquez"
                            class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                            <a href="https://www.linkedin.com/in/zaulo-vasquez/" target="_blank"
                                rel="noopener noreferrer" class="text-white hover:text-finance-gold transition-colors">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-finance-dark">Zaulo Vasquez</h3>
                        <p class="text-finance-blue font-medium mb-4">Consultor Empresarial en Analítica de Datos</p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Soy socio en Otium, firma boliviana de outsourcing contable, impuestos y auditoría con enfoque
                            data-driven. Integro R, Python, Power BI, Power Query y SharePoint para convertir datos
                            operativos en decisiones de gerencia.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2: Brian Jauregui -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <div class="relative h-80 bg-slate-200 overflow-hidden">
                        <img src="https://otium.com.bo/rsc/emp/emp2.jpg" alt="Brian Jauregui"
                            class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                            <a href="https://www.linkedin.com/in/brian-jauregui-oc/" target="_blank"
                                rel="noopener noreferrer" class="text-white hover:text-finance-gold transition-colors">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-finance-dark">Brian Jauregui</h3>
                        <p class="text-finance-blue font-medium mb-4">Asesor tributario y financiero</p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Soy emprendedor y me gustan distintas ramas de la administración de empresas. Por mi
                            especialidad y experiencia me dedico a asesorar a negocios en el entendimiento de sus
                            obligaciones tributarias y sus finanzas. Según mis conocidos, poseo un excelente sentido del
                            humor. Me gustan los comics, el rock y los deportes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
