<?php
namespace App\Livewire;
use Livewire\Component;
class AuthForm extends Component
{
    public $showLoginForm= false;
    public $showRegisterForm= false;
    public function showLoginFormAction(){
        $this->showLoginForm=true;
        $this->showRegisterForm = false;
    }
    public function showRegisterFormAction()
    {
        $this->showLoginForm = false;
        $this->showRegisterForm = true;
    }
    public function render()
    {
        return view('livewire.auth-form');
    }
}
