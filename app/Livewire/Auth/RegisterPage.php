<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class RegisterPage extends Component
{
    public $page = 1;

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
