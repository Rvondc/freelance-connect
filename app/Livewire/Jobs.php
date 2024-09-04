<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.freelancer')]
class Jobs extends Component
{
    public string $search = "";

    public function render()
    {
        $jobs = Project::query()
            ->where('status', '=', 'Available')
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->get();

        return view('livewire.jobs')->with('jobs', $jobs);
    }
}
