<?php
namespace App\Livewire\Pj;
use Livewire\Component;
use App\Livewire\Pj\Statics\CharacterSprites; // Asegúrate de que la importación sea correcta
class CrearPersonaje extends Component
{
    public $caracteristicas = ['fuerza', 'destreza', 'resistencia', 'percepcion', 'inteligencia', 'apariencia'];
    public $conocimientos = [
        'conocimiento_pkn', 'mecanica', 'pelea', 'tecnologia', 'cultura', 'cocina',
        'supervivencia', 'cartografia', 'conducir', 'informatica', 'investigacion',
        'pericias', 'subterfugio', 'sigilo', 'medicina', 'interpretacion', 'ciencias',
        'atletismo', 'alerta', 'intimidacion', 'experiencia',
    ];
    public $sprites;
    public function abrirOpcionesSprites()
    {
        $this->sprites = CharacterSprites::obtenerSprites(); // Llama al método estático directamente
        //dump($this->dispatch('abrirSprites', sprites:$this->sprites));
        $this->dispatch('abrirSprites', sprites: $this->sprites);
    }
    public function render()    
    {
        return view('livewire.pj.crear-personaje', ['sprites' => $this->sprites] );
    }
}
