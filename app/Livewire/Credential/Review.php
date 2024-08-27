<?php

namespace App\Livewire\Credential;

use App\Models\CredentialApproval;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Review extends Component
{
    public $pending;

    public function mount()
    {
        $this->pending = CredentialApproval::all();
    }

    public function approve($id) {
        $cred = CredentialApproval::query()->find($id);

        $cred->update(['status' => 'Approved']);
    }

    public function render()
    {
        $this->pending = CredentialApproval::all();

        return view('livewire.credential.review')
            ->with('pending', $this->pending);
    }
}
