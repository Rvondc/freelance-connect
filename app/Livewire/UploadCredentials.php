<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadCredentials extends Component
{
    use WithFileUploads;

    #[Validate('image|max:10000')]
    public $front_id_image;

    #[Validate('image|max:10000')]
    public $back_id_image;

    #[Validate('image|max:10000')]
    public $selfie_image;

    public function updatedFrontIdImage() {
        $this->dispatch('creds:front', image: $this->front_id_image);
    }

    public function updatedBackIdImage() {
        $this->dispatch('creds:back', image: $this->back_id_image);
    }

    public function updatedSelfieImage() {
        $this->dispatch('creds:selfie', image: $this->selfie_image);
    }

    public function render()
    {
        return view('livewire.upload-credentials');
    }
}
