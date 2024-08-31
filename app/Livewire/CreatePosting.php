<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\ProjectImages;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Layout('components.layouts.client')]
class CreatePosting extends Component
{
    use WithFileUploads;

    public $images = array();
    public string $title = '';
    public string $description = '';
    public float $budget = 0;
    public $deadline;

    public function save()
    {
        $this->validate([
            'title' => ['required', 'max:128'],
            'description' => ['required', 'max:2048'],
            'budget' => ['required', 'numeric', 'min:5'],
            'deadline' => ['required', 'date'],
            'images' => ['required', 'array', 'min:1', 'max:5'],
        ]);

        $project = Project::query()->create([
            'name' => $this->title,
            'description' => $this->description,
            'budget' => $this->budget,
            'deadline' => $this->deadline,
            'client_id' => auth()->user()->id
        ]);

        foreach ($this->images as $image) {
            $filename = sha1(time() . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            ProjectImages::query()->create([
                'image' => $filename,
                'project_id' => $project->id
            ]); 

            $image->storePubliclyAs('public/projects/images', $filename);
        } 

        return redirect('/client/dashboard')->with('message', 'Posting created successfully');
    }

    public function resetErrors()
    {
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.create-posting');
    }
}
