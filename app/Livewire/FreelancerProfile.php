<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.freelancer')]
class FreelancerProfile extends Component
{
    public function render()
    {
        $user = Auth::user();

        return view('livewire.freelancer-profile')
            ->with('user', $user);
    }
}
