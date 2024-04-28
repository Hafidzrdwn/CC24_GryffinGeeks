<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
            'email.email' => 'Email tidak valid.',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            Auth::login($user);
            $request->session()->regenerate();
            if (Auth::user()->is_admin == 0) {
                return redirect()->intended('/');
            } else {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('error', '<strong>Email atau Password</strong> Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:user,email'],
            'name' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
            'name.required' => 'Nama tidak boleh kosong.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.'
        ]);

        $credentials['photo'] = '/images/default.jpg';
        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'photo' => $credentials['photo'],
            'is_admin' => 0
        ]);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/');
    }
}
