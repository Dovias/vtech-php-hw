<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {
    /**
     * Handle login attempt.
     */
    public function login(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ], [
            'username.required' => 'login.error.validation.username.required',
            'password.required' => 'login.error.validation.password.required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }
        return back()->withErrors([
            'user' => 'login.error.user.not.found'
        ])->onlyInput('username');
    }

    /**
     * Handle logout attempt.
     */
    public function logout(): RedirectResponse {
        Session::flush();
        Auth::logout();
        return back();
    }
}
