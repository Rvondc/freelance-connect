<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class JobPostingCard extends Component
{
    public $job;
    public $client;
    public $images;

    public function mount($job)
    {
        $this->job = $job;
        $this->images = $job->getImages();
        $this->client = User::query()->find($job->client_id);
    }

    public function render()
    {
        return view('livewire.components.job-posting-card');
    }
}
