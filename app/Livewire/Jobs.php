<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.freelancer')]
class Jobs extends Component
{
    public function render()
    {
        return view('livewire.jobs');
    }
}