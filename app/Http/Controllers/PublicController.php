<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
        public function home(){
        return view('welcome');
    }

    public function loginForm()
    {
        return view('auth.login'); // Crea la vista "auth/login.blade.php"
    }

    // Gestisce il login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Login effettuato!');
        }

        return back()->withErrors([
            'email' => 'Credenziali non valide.',
        ]);
    }

    // Mostra la vista di registrazione
    public function registerForm()
    {
        return view('auth.register'); // Crea la vista "auth/register.blade.php"
    }

    // Gestisce la registrazione
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrazione completata! Ora puoi accedere.');
    }

    // Gestisce il logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout effettuato.');
    }
}