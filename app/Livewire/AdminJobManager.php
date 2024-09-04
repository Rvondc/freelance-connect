<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class AdminJobManager extends Component
{
    public function render()
    {
        $today = Project::query()
            ->where('created_at', '>=', now()->subDays(1))
            ->orderBy('created_at', 'DESC')
            ->get();
        
        $all = Project::query()
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('livewire.admin-job-manager')
            ->with('jobsToday', $today)
            ->with('jobsAll', $all);
    }
}
