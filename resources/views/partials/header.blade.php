<header class="bg-finance-dark text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <img src="https://otium.com.bo/rsc/logos/logo-otium-white.png" alt="OTIUM" class="h-12 w-auto">
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('home') }}"
                class="hover:text-finance-gold transition-colors {{ request()->routeIs('home') ? 'text-finance-gold' : '' }}">Inicio</a>

            <!-- Services Dropdown -->
            <div class="relative group">
                <button
                    class="flex items-center gap-1 hover:text-finance-gold transition-colors {{ request()->routeIs('services*') ? 'text-finance-gold' : '' }}">
                    Servicios
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50 border-t-4 border-finance-gold">
                    <a href="{{ route('services.outsourcing') }}"
                        class="block px-4 py-2 text-slate-700 hover:bg-slate-50 hover:text-finance-gold transition-colors">Outsourcing
                        Contable</a>
                    <a href="{{ route('services.financial-operations') }}"
                        class="block px-4 py-2 text-slate-700 hover:bg-slate-50 hover:text-finance-gold transition-colors">Operaciones
                        Financieras</a>
                    <a href="{{ route('services.audit') }}"
                        class="block px-4 py-2 text-slate-700 hover:bg-slate-50 hover:text-finance-gold transition-colors">Auditoría</a>
                    <a href="{{ route('services.digital-transformation') }}"
                        class="block px-4 py-2 text-slate-700 hover:bg-slate-50 hover:text-finance-gold transition-colors">Transformación
                        Digital</a>
                    <a href="{{ route('services.company-incorporation') }}"
                        class="block px-4 py-2 text-slate-700 hover:bg-slate-50 hover:text-finance-gold transition-colors">Constitución
                        de Empresas</a>
                    <div class="border-t border-slate-100 my-1"></div>
                    <a href="{{ route('services') }}"
                        class="block px-4 py-2 text-sm font-semibold text-finance-blue hover:text-finance-gold">Ver
                        Todos los Servicios &rarr;</a>
                </div>
            </div>

            <a href="{{ route('about') }}"
                class="hover:text-finance-gold transition-colors {{ request()->routeIs('about') ? 'text-finance-gold' : '' }}">Nosotros</a>
            <a href="{{ route('blog.index') }}"
                class="hover:text-finance-gold transition-colors {{ request()->routeIs('blog.*') ? 'text-finance-gold' : '' }}">Blog</a>
            <a href="{{ route('contact') }}"
                class="px-5 py-2 bg-finance-gold text-finance-dark font-semibold rounded hover:bg-finance-gold-light transition-colors">Contacto</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-finance-dark border-t border-gray-700 transition-all duration-300 ease-in-out">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-finance-gold {{ request()->routeIs('home') ? 'text-finance-gold' : 'text-white' }}">Inicio</a>

            <div>
                <button id="mobile-services-btn"
                    class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-800 hover:text-finance-gold focus:outline-none">
                    <span>Servicios</span>
                    <svg class="w-4 h-4 transform transition-transform duration-200" id="mobile-services-arrow"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-services-menu" class="hidden pl-4 space-y-1 mt-1">
                    <a href="{{ route('services.outsourcing') }}"
                        class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-finance-gold hover:bg-gray-800">Outsourcing
                        Contable</a>
                    <a href="{{ route('services.financial-operations') }}"
                        class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-finance-gold hover:bg-gray-800">Operaciones
                        Financieras</a>
                    <a href="{{ route('services.audit') }}"
                        class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-finance-gold hover:bg-gray-800">Auditoría</a>
                    <a href="{{ route('services.digital-transformation') }}"
                        class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-finance-gold hover:bg-gray-800">Transformación
                        Digital</a>
                    <a href="{{ route('services.company-incorporation') }}"
                        class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-finance-gold hover:bg-gray-800">Constitución
                        de Empresas</a>
                </div>
            </div>

            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-finance-gold {{ request()->routeIs('about') ? 'text-finance-gold' : 'text-white' }}">Nosotros</a>
            <a href="{{ route('blog.index') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-finance-gold {{ request()->routeIs('blog.*') ? 'text-finance-gold' : 'text-white' }}">Blog</a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-800 hover:text-finance-gold {{ request()->routeIs('contact') ? 'text-finance-gold' : 'text-white' }}">Contacto</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesArrow = document.getElementById('mobile-services-arrow');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        if (mobileServicesBtn && mobileServicesMenu && mobileServicesArrow) {
            mobileServicesBtn.addEventListener('click', () => {
                mobileServicesMenu.classList.toggle('hidden');
                mobileServicesArrow.classList.toggle('rotate-180');
            });
        }
    });
</script>
