<div class="min-h-screen flex flex-col md:flex-row mt-0 pt-0">
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
    <div id="sidebar" class="md:flex md:w-[20%] lg:w-[10%]  text-white md:translate-x-0 translate-x-[-100%] absolute md:relative min-h-screen w-[25 0px] top-0 left-0 transition-transform ease-in-out duration-300  md:bg-inherit bg-slate-900">
        <nav class="ps-0 p-4">
            <button class="float-end mb-2 text-sm text-white md:hidden" id="menu-toggle">Cerrar X</button>
            <ul>
                <li><a href="#" class="block py-2 px-2 hover:scale-110 transition-transform duration-200 ease-in-out"><i class="fa-solid fa-circle-plus"></i> Nuevo Pj</a></li>
            </ul>
        </nav>
    </div>
    <!-- Contenido Principal -->
    <div class="flex-1 p-6 bg-gray-100">
        <!-- Aquí va el contenido -->
        <h1 class="text-2xl font-bold mb-4">Título de la Página</h1>
        <p>Este es el contenido principal de la página.</p>
    </div>
    <script>
        var opened =false;
  document.querySelectorAll('#menu-toggle').forEach(div => { 
    div.addEventListener('click', function () {
      var sidebar = document.getElementById('sidebar');
      if (!opened){
        sidebar.classList.toggle('translate-x-[-100%]');
        sidebar.classList.toggle('translate-x-0');
        var opened = true
      }else{
        sidebar.classList.toggle('translate-x-0');
        sidebar.classList.toggle('translate-x-[-100%]');
        opened = true
      }
  })});
</script>
</div>