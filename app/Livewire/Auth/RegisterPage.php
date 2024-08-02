<?php

namespace App\Livewire\Auth;

use App\Models\CredentialApproval;
use App\Models\User;
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

    #[Validate('required | unique:users', as: 'Username')]
    public string $username = "";

    #[Validate('required | unique:users', as: 'Email')]
    public string $email = "";

    #[Validate('required', as: 'Birthdate')]
    public string $birthdate;

    #[Validate('required', as: 'Password')]
    public string $password = "";

    #[Validate('required | same:password', as: 'Confirm Password')]
    public string $confirm_password = "";

    public $front_id_image;
    public $back_id_image;
    public $selfie_image;

    public bool $agreed_terms = false;

    public function save()
    {
        $this->validate();
        $this->validate([
            'front_id_image' => 'required|image|max:10000',
            'back_id_image' => 'required|image|max:10000',
            'selfie_image' => 'required|image|max:10000',
        ]);

        $user = User::query()->create([
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'user_type' => $this->role,
            'profile_picture' => 'default_profile.png',
            'banner_picture' => 'default_banner.png',
            'bio' => '',
            'website_link' => '',
            'is_suspended' => false,
            'birthdate' => $this->birthdate,
            'password' => bcrypt($this->password),
        ]);

        $basename = sha1($this->first_name . $this->last_name . $this->username);

        $front = $basename . '_front';
        $back = $basename . '_back';
        $selfie = $basename . '_selfie';

        $this->front_id_image->storePubliclyAs(path: 'public/credentials/images', name: $front);
        $this->back_id_image->storePubliclyAs(path: 'public/credentials/images', name: $back);
        $this->selfie_image->storePubliclyAs(path: 'public/credentials/images', name: $selfie);

        CredentialApproval::query()->create([
            'front_id_image' => $front,
            'back_id_image' => $back,
            'selfie_image' => $selfie,
            'status' => 'Pending',
            'user_id' => $user->id,
        ]);
        
        // TODO: add redirect to Login Page
    }

    public function nextPage()
    {
        if ($this->page === 1) {
            $this->validate([
                'front_id_image' => 'required|image|max:10000',
                'back_id_image' => 'required|image|max:10000',
                'selfie_image' => 'required|image|max:10000',
            ]);
        } else {
            $this->validate();
        }

        $this->page++;
    }

    public function resetErrors()
    {
        $this->resetValidation();
    }

    public function prevPage()
    {
        $this->page--;
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
