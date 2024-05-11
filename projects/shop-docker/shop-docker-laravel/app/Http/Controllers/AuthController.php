<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp()
    {
        return view('auth.sign-up');
    }

    public function index()
    {
        return view('auth.index');
    }

    public function signIn(SignInFormRequest $request)
    {
        $credentials = $request->validate();
        if(auth()->attempt($request->validated())) {
            back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        request()->session()->regenerate();
        return redirect()->intended(route('home'));
    }
}
