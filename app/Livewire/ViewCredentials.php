<?php

namespace App\Livewire;

use App\Models\CredentialApproval;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class ViewCredentials extends ModalComponent
{
    public $user;
    public $pending;

    public function mount($user, $pending)
    {
        $this->user = User::query()->find($user);
        $this->pending = CredentialApproval::query()->find($pending);
    }

    public function render()
    {
        return view('livewire.view-credentials');
    }
}
