<div class="flex-1 p-6 bg-gray-100">
    @if($currentComponent)
    @livewire($currentComponent)
    @else
        <p class="text-center font-bold text-lg text-blue-900">Selecciona un personaje del menu.</p>
    @endif
</div>
