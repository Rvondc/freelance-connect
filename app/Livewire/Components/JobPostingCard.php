<?php

namespace App\Livewire\Components;

use App\Models\Bookmark;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function bookmark()
    {
        $bookmarked = Bookmark::query()
            ->where('user_id', Auth::id())
            ->where('project_id', $this->job->id)
            ->first();

        if ($bookmarked) {
            $bookmarked->delete();
        } else {
            Bookmark::create([
                'user_id' => Auth::id(),
                'project_id' => $this->job->id
            ]);
        }
    }

    public function render()
    {
        $bookmarked = Bookmark::query()
            ->where('user_id', Auth::id())
            ->where('project_id', $this->job->id)
            ->exists();

        return view('livewire.components.job-posting-card')->with('bookmarked', $bookmarked);
    }
}
