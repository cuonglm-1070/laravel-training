<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        $userData = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($userData)) {
            // FIXME: do something
            return redirect()->route('home');
        };

        return redirect()->route('login');
    }

    // public function logout(Type $var = null)
    // {
    //     # code...
    // }
}
