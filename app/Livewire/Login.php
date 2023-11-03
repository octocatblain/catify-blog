<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $title = 'Login';
    public $form = [
        'email'   => '',
        'password' => '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        Auth::attempt($this->form);
        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.login')->with('title', $this->title);
    }
}
