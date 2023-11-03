<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'Login';

        return view('auth.login')->with('title', $title);
    }

    public function register()
    {
        $title = 'Register';
        return view('auth.register')->with('title', $title);
    }

    public function logout()
    {
        $title = 'Logout';
        return view('auth.logout')->with('title', $title);
    }
}
