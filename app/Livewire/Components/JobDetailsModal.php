<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class JobDetailsModal extends Component
{
    public $job;
    public $images;
    public $client;
    public $page = 0;

    public function mount($job)
    {
        $this->job = $job;
        $this->images = $job->getImages();
        $this->client = User::query()->find($job->client_id);
    }

    public function previous() {
        if ($this->page > 0) {
            $this->page--;
        }
    }

    public function next() {
        if ($this->page < count($this->images) - 1) {
            $this->page++;
        }
    }

    public function render()
    {
        return view('livewire.components.job-details-modal');
    }
}
