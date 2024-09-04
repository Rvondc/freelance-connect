<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.freelancer')]
class FreelancerBookmark extends Component
{
    public function render()
    {
        return view('livewire.freelancer-bookmark');
    }
}
