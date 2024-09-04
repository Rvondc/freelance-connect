<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ManageJobCard extends Component
{
    public $job;
    public $page = 0;

    public function mount($job)
    {
        $this->job = $job;
    }

    public function next()
    {
        if ($this->page === count($this->job->getImages()) - 1) {
            return;
        }

        $this->page += 1;
    }

    public function previous()
    {
        if ($this->page === 0) {
            return;
        }

        $this->page -= 1;
    }

    public function render()
    {
        return view('livewire.components.manage-job-card');
    }
}
