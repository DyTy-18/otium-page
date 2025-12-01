@extends('layouts.app')

@section('title', 'Contacto - FinAudit')

@section('content')
    <div class="bg-finance-dark text-white py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">Contáctenos</h1>
            <p class="text-xl text-slate-300 max-w-2xl">
                Póngase en contacto con nuestro equipo para discutir cómo podemos ayudar a su negocio.
            </p>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-2xl font-bold text-finance-dark mb-6">Envíenos un mensaje</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nombre
                                    Completo</label>
                                <input type="text" id="name" name="name"
                                    class="w-full rounded-md border-slate-300 shadow-sm focus:border-finance-gold focus:ring focus:ring-finance-gold/20 px-4 py-2 border"
                                    placeholder="Juan Pérez">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Correo
                                    Electrónico</label>
                                <input type="email" id="email" name="email"
                                    class="w-full rounded-md border-slate-300 shadow-sm focus:border-finance-gold focus:ring focus:ring-finance-gold/20 px-4 py-2 border"
                                    placeholder="juan@empresa.com">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">Asunto</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full rounded-md border-slate-300 shadow-sm focus:border-finance-gold focus:ring focus:ring-finance-gold/20 px-4 py-2 border"
                                placeholder="Consulta sobre Servicios de Auditoría">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-1">Mensaje</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full rounded-md border-slate-300 shadow-sm focus:border-finance-gold focus:ring focus:ring-finance-gold/20 px-4 py-2 border"
                                placeholder="¿Cómo podemos ayudarle?"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full md:w-auto px-8 py-3 bg-finance-blue text-white font-bold rounded hover:bg-finance-dark transition-colors">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 class="text-2xl font-bold text-finance-dark mb-6">Información de Contacto</h2>

                    <div class="space-y-12">
                        <!-- Central Info -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 bg-finance-gold/10 text-finance-gold rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-finance-dark mb-1">Correo Electrónico Central</h3>
                                <p class="text-slate-600">
                                    <a href="mailto:info@otium.com.bo"
                                        class="hover:text-finance-gold transition-colors">info@otium.com.bo</a>
                                </p>
                            </div>
                        </div>

                        <!-- La Paz -->
                        <div class="border-t border-slate-200 pt-8">
                            <h3 class="text-xl font-bold text-finance-dark mb-4 flex items-center gap-2">
                                <span class="text-finance-gold">📍</span> La Paz
                            </h3>
                            <div class="space-y-4 pl-2">
                                <div>
                                    <p class="font-semibold text-slate-700">Dirección:</p>
                                    <p class="text-slate-600">San Miguel, Calle Ferrecio Nro. 1154 A<br>Bloque C 14 · Edif.
                                        Munditoys Piso 4</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-700">Teléfonos:</p>
                                    <p class="text-slate-600">
                                        <a href="tel:+59172505583" class="hover:text-finance-gold transition-colors">+591
                                            72505583</a><br>
                                        <a href="tel:+59122792824" class="hover:text-finance-gold transition-colors">+591 2
                                            2792824</a>
                                    </p>
                                </div>
                                <!-- Map La Paz -->
                                <div
                                    class="w-full h-48 bg-slate-100 rounded-lg overflow-hidden border border-slate-200 mt-4">
                                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?q=Calle+Ferrecio+1154,+La+Paz,+Bolivia&t=&z=15&ie=UTF8&iwloc=&output=embed">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Santa Cruz -->
                        <div class="border-t border-slate-200 pt-8">
                            <h3 class="text-xl font-bold text-finance-dark mb-4 flex items-center gap-2">
                                <span class="text-finance-gold">📍</span> Santa Cruz
                            </h3>
                            <div class="space-y-4 pl-2">
                                <div>
                                    <p class="font-semibold text-slate-700">Dirección:</p>
                                    <p class="text-slate-600">Equipetrol, Calle Los Lirios Nro. 1000<br>Av. San Martin</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-700">Teléfonos:</p>
                                    <p class="text-slate-600">
                                        <a href="tel:+59170654104" class="hover:text-finance-gold transition-colors">+591
                                            70654104</a><br>
                                        <a href="tel:+59133419804" class="hover:text-finance-gold transition-colors">+591 3
                                            3419804</a>
                                    </p>
                                </div>
                                <!-- Map Santa Cruz -->
                                <div
                                    class="w-full h-48 bg-slate-100 rounded-lg overflow-hidden border border-slate-200 mt-4">
                                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?q=Calle+Los+Lirios+1000,+Santa+Cruz+de+la+Sierra,+Bolivia&t=&z=15&ie=UTF8&iwloc=&output=embed">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
