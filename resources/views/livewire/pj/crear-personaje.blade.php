<div class="max-w-4xl mx-auto p-6 space-y-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Formulario de Personaje
            </h3>
        </div>
        <div class="px-4 py-5 sm:p-6">
            <form action="/guardarnuevopersonaje" method="POST" >
                @csrf
                <div class="space-y-8">
                    <!-- Sprite -->
                    <div>
                        <label for="sprite" class="block text-sm font-medium text-gray-700">Escoge un sprite</label>
                        <div class="mt-2 flex items-center space-x-4">
                            <img id="sprite-preview" src="" alt="Sprite del personaje" class="w-24 h-24 border-2 border-gray-300 rounded object-cover">
                            <button wire:click="abrirOpcionesSprites" type="button" class="border-none rounded-md text-white bg-slate-600">Escoger Sprites</button>
                        </div>
                    </div>
                    <!-- Características de personaje -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Características de personaje</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($caracteristicas as $caracteristica)
                                <div>
                                    <label for="{{ $caracteristica }}" class="block text-sm font-medium text-gray-700">{{ ucfirst($caracteristica) }}</label>
                                    <input type="number" name="{{ $caracteristica }}" id="{{ $caracteristica }}" min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Conocimientos -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Conocimientos</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($conocimientos as $conocimiento)
                                <div>
                                    <label for="{{ $conocimiento }}" class="block text-sm font-medium text-gray-700">{{ ucfirst(str_replace('_', ' ', $conocimiento)) }}</label>
                                    <input type="number" name="{{ $conocimiento }}" id="{{ $conocimiento }}" min="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Crear Personaje
                    </button>
                </div>
            </form>
        </div>
    </div>
    @script
    <script>
    $wire.on('abrirSprites', () => {
        alert("hola mama")
    });
    </script>
    @endscript
</div>
