<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ProjectChat extends Component
{
    public Project $project;
    public User $freelancer;
    public User $client;

    public array $messages;

    public function mount(int $projectId, int $freelancer)
    {
        $this->freelancer = User::query()->find($freelancer);

        $this->project = Project::query()->find($projectId);
        $this->client = User::query()->find($this->project->client_id);
    }

    public function sendMessage(string $message, int $sender)
    {
        Message::query()->create([
            'message' => $message,
            'client_id' => $this->client->id,
            'freelancer_id' => $this->freelancer->id,
            'sender' => $this->client->id === $sender ? 'Client' : 'Freelancer',
        ]);

        $this->messages = Message::query()
            ->where('freelancer_id', '=', $this->freelancer->id)
            ->where('client_id', '=', $this->client->id)
            ->where('project_id', '=', $this->project->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.project-chat');
    }
}
