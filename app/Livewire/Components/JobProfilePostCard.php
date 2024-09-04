<?php

namespace App\Livewire\Components;

use Livewire\Component;

class JobProfilePostCard extends Component
{
    public $job;
    public int $page = 0;

    public function mount($job) {
        $this->job = $job;
    }

    public function next() {
        if ($this->page === count($this->job->getImages()) - 1) {
            return;
        }

        $this->page++;
    }

    public function previous() {
        if ($this->page === 0) {
            return;
        }

        $this->page--;
    }

    public function cancel() {
        $this->job->update(['status' => 'Canceled']);

        $this->dispatch('jobProfilePostCard:cancel', ['job' => $this->job]);
    }

    public function render()
    {
        return view('livewire.components.job-profile-post-card');
    }
}
