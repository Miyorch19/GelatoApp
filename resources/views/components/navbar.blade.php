<nav class="bg-rose-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo y nombre -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/>
                    </svg>
                    <span class="text-xl font-semibold text-rose-900">Gelato</span>
                </a>
            </div>

            <!-- Links de navegación (Desktop) -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="/" class="text-rose-700 hover:text-rose-900 px-3 py-2 text-sm font-medium transition-colors">
                    Inicio
                </a>
                <a href="/productos" class="text-rose-700 hover:text-rose-900 px-3 py-2 text-sm font-medium transition-colors">
                    Productos
                </a>
                <a href="/pedidos" class="text-rose-700 hover:text-rose-900 px-3 py-2 text-sm font-medium transition-colors">
                    Pedidos
                </a>
                <a href="/nosotros" class="text-rose-700 hover:text-rose-900 px-3 py-2 text-sm font-medium transition-colors">
                    Nosotros
                </a>
                <a href="/contacto" class="text-rose-700 hover:text-rose-900 px-3 py-2 text-sm font-medium transition-colors">
                    Contacto
                </a>
            </div>

            <!-- Iconos de acción (Desktop) -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                <!-- Carrito -->
                <a href="/carrito" class="text-rose-700 hover:text-rose-900 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
                
                <!-- Usuario -->
                <a href="/cuenta" class="text-rose-700 hover:text-rose-900 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </a>
            </div>

            <!-- Botón menú móvil -->
            <div class="flex items-center md:hidden">
                <button type="button" id="mobile-menu-button" class="text-rose-700 hover:text-rose-900 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden md:hidden bg-rose-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block text-rose-700 hover:text-rose-900 hover:bg-rose-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                Inicio
            </a>
            <a href="/productos" class="block text-rose-700 hover:text-rose-900 hover:bg-rose-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                Productos
            </a>
            <a href="/pedidos" class="block text-rose-700 hover:text-rose-900 hover:bg-rose-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                Pedidos
            </a>
            <a href="/nosotros" class="block text-rose-700 hover:text-rose-900 hover:bg-rose-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                Nosotros
            </a>
            <a href="/contacto" class="block text-rose-700 hover:text-rose-900 hover:bg-rose-200 px-3 py-2 rounded-md text-base font-medium transition-colors">
                Contacto
            </a>
        </div>
        <div class="border-t border-rose-200 px-2 pt-4 pb-3">
            <div class="flex items-center space-x-4 px-3">
                <a href="/carrito" class="flex items-center space-x-2 text-rose-700 hover:text-rose-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-sm font-medium">Carrito</span>
                </a>
                <a href="/cuenta" class="flex items-center space-x-2 text-rose-700 hover:text-rose-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="text-sm font-medium">Cuenta</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Toggle menú móvil
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>