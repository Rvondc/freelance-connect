<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.client')]
class ClientDashboard extends Component
{
    public function render()
    {
        $status = request()->query('status', 'Available');
        $jobs = Auth::user()->jobs;
        $selectedJobs = $jobs->where('status', '=', $status);

        return view('livewire.client-dashboard')
            ->with('status', $status)
            ->with('jobs', $jobs)
            ->with('selectedJobs', $selectedJobs);
    }
}
