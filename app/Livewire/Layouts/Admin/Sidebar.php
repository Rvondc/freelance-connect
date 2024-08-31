<?php

namespace App\Livewire\Layouts\Admin;

use Livewire\Component;

class Sidebar extends Component
{
    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.layouts.admin.sidebar');
    }
}
