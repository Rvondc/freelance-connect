<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.client')]
class ClientDashboard extends Component
{
    public function render()
    {
        return view('livewire.client-dashboard');
    }
}
