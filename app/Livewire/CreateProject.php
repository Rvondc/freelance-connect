<?php

namespace App\Livewire;

use Livewire\Component;

class CreateProject extends Component
{
    public string $title;
    public string $description;

    public int $budget;

    public $deadline;

    public function render()
    {
        return view('livewire.create-project');
    }
}
