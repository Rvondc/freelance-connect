<?php

namespace App\Livewire;

use App\Models\CredentialApproval;
use App\Models\User;
use Livewire\Attributes\Layout;
use LivewireUI\Modal\ModalComponent;

#[Layout('components.layouts.admin')]
class ViewCredentials extends ModalComponent
{
    public CredentialApproval $approval;
    public User $user;

    public function mount(CredentialApproval $approval)
    {
        $this->approval = $approval;
        $this->user = $approval->getUser();
    }

    public function render()
    {
        return view('livewire.view-credentials');
    }
}
