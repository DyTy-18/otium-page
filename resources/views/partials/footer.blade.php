<footer class="bg-slate-900 text-slate-300 py-12 border-t border-slate-800">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="https://otium.com.bo/images/logo-otium-white.png" alt="OTIUM" class="h-12 w-auto">
                </a>
                <p class="text-sm leading-relaxed">
                    Servicios profesionales de auditoría y consultoría financiera para empresas modernas. Aseguramos el
                    cumplimiento e impulsamos el crecimiento.
                </p>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Servicios</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('services.audit') }}"
                            class="hover:text-finance-gold transition-colors">Auditorías Financieras</a></li>
                    <li><a href="{{ route('services.financial-operations') }}"
                            class="hover:text-finance-gold transition-colors">Consultoría Fiscal</a></li>
                    <li><a href="{{ route('services.digital-transformation') }}"
                            class="hover:text-finance-gold transition-colors">Transformación Digital</a></li>
                    <li><a href="{{ route('services.company-incorporation') }}"
                            class="hover:text-finance-gold transition-colors">Constitución de Empresas</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Empresa</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-finance-gold transition-colors">Nosotros</a>
                    </li>
                    <li><a href="{{ route('blog.index') }}" class="hover:text-finance-gold transition-colors">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="hover:text-finance-gold transition-colors">Contacto</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Datos Corporativos</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start gap-2">
                        <span class="text-finance-gold">📍</span>
                        <span>La Paz y Santa Cruz, Bolivia</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-finance-gold">📞</span>
                        <span>+591 72505583 · 70654104</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-finance-gold">✉️</span>
                        <span>info@otium.com.bo</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-finance-gold">🌐</span>
                        <span>otium.com.bo</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- <div class="border-t border-slate-800 mt-12 pt-8 text-center text-sm text-slate-500">
            &copy; {{ date('Y') }} FinAudit Consulting. Todos los derechos reservados.
        </div> --}}
    </div>
</footer>
