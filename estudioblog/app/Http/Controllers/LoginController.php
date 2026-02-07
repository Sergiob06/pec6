<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('login', 'password');

        if (Auth::attempt($credenciales)) {
            return redirect()->intended(route('posts.index'));
        }
        return back()->withErrors([
            'login' => 'Las credenciales no son correctas',
        ])->onlyInput('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('posts.index');
    }
}
