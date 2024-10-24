<div>
    {{-- HEADER PARA MOBILE --}}
    <div class="md:hidden bg-slate-900 text-white p-4">
        <div class="flex justify-between items-center">
            <span class="text-lg font-semibold">PokemonRol</span>
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- SIDEBAR -->
    <div id="sidebar" class="md:flex md:w-[200px] text-white md:translate-x-0 translate-x-[-100%] absolute md:relative max-h-screen w-[250px] top-0 left-0 transition-transform ease-in-out duration-300 md:bg-inherit">
        <nav class="ps-0 p-4">
            <button class="float-end mb-2 text-sm text-white md:hidden" id="menu-close">Cerrar X</button>
            <ul>
                <li><a href="#" wire:click="$dispatch('loadComponent', {component:'pj.crear-personaje'})" class="block py-2 px-2 hover:scale-110 transition-transform duration-200 ease-in-out"><i class="fa-solid fa-circle-plus"></i> Nuevo Pj</a></li>
            </ul>
        </nav>
    </div>
    <script>
        var opened = false; // Mantenemos el estado del menú
        // Evento para abrir y cerrar el menú
        document.querySelectorAll('#menu-toggle, #menu-close').forEach(button => { 
            button.addEventListener('click', function () {
                var sidebar = document.getElementById('sidebar');
                if (!opened) {
                    sidebar.classList.remove('translate-x-[-100%]');
                    sidebar.classList.add('translate-x-0');
                    opened = true; // Cambiamos el estado a abierto
                } else {
                    sidebar.classList.remove('translate-x-0');
                    sidebar.classList.add('translate-x-[-100%]');
                    opened = false; // Cambiamos el estado a cerrado
                }
            });
        });
    </script>
</div>
