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

    public function mount($job)
    {
        $this->job = $job;
        $this->images = $job->getImages();
        $this->client = User::query()->find($job->client_id);
    }

    public function render()
    {
        return view('livewire.components.job-details-modal');
    }
}
