<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On; 
class DynamicDashboardContent extends Component
{
    public $currentComponent = null;
    #[On('loadComponent')]
    public function loadComponent($component)
    {
        $this->currentComponent = $component;
    }
    public function render()
    {
        return view('livewire.dynamic-dashboard-content');
    }
}
