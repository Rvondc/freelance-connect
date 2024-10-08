<?php

namespace App\Livewire\Layouts\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.layouts.admin.sidebar');
    }
}
