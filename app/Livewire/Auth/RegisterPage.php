<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class RegisterPage extends Component
{
    use WithFileUploads;

    public $page = 0;

    public $role = 'Client';

    #[Validate('required', as: 'First Name')]
    public string $first_name = "";

    public string $middle_name = "";

    #[Validate('required', as: 'Last Name')]
    public string $last_name = "";

    #[Validate('required', as: 'Username')]
    public string $username = "";

    #[Validate('required', as: 'Email')]
    public string $email = "";

    #[Validate('required', as: 'Password')]
    public string $password = "";

    #[Validate('required', as: 'Confirm Password')]
    public string $confirm_password = "";

    #[Validate('required | max:10000', as: 'Front ID Image')]
    public $front_id_image;

    #[Validate('required | max:10000', as: 'Back ID Image')]
    public $back_id_image;

    #[Validate('required | max:10000', as: 'Selfie ID Image')]
    public $selfie_image;

    public bool $agreed_terms = false;

    public function save()
    {
        $this->validate();
    }

    public function nextPage() {
        $this->page++;
    }

    public function prevPage() {
        $this->page--;
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
