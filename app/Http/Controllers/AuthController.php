<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showEmailForm()
    {
        return view('login.email');
    }

    public function verifyEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            return back()->withErrors(['email' => 'No encontramos una cuenta con ese correo.']);
        }
        
        session(['login_email' => $request->email]);
        return redirect()->route('login.password');
    }

    public function showPasswordForm()
    {
        if (!session()->has('login_email')) {
            return redirect()->route('login.email');
        }
        return view('login.password', ['email' => session('login_email')]);
    }

    public function authenticate(Request $request)
    {
        $request->validate(['password' => 'required']);
        
        $credentials = [
            'email' => session('login_email'),
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->forget('login_email');
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors(['password' => 'La contraseña es incorrecta.']);
    }
}
