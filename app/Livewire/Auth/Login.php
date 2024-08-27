<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = "";
    public string $password = "";

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();

            if ($user->user_type === 'Admin') {
                return redirect('/admin/dashboard');
            } else if ($user->user_type === 'Freelancer') {
                return redirect('/freelancer/dashboard');
            } else {
                return redirect('/client/dashboard');
            }
        }

        $this->addError('email', 'Invalid email or password');
    }

    public function resetErrors()
    {
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
