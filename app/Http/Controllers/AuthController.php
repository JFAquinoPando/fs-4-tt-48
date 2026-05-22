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

    public function showRegisterForm()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Hash is handled by model cast
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
