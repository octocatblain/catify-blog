<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public $title = 'Logout';
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.logout')->with('title', $this->title);
    }
}
