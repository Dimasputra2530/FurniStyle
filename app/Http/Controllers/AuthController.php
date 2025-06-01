<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Fungsi untuk signup (langsung login setelah daftar)
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // Optional: login langsung setelah signup
        auth()->login($user);

        return redirect()->route('cart'); // arahkan ke halaman setelah login
    }

    // ✅ Fungsi untuk menampilkan form login
    public function showLoginForm()
    {
        return view('LOGIN.login'); // pastikan file ini ada: resources/views/LOGIN/login.blade.php
    }

    // Fungsi untuk login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan.']);
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['password' => 'Password salah.']);
        }

        auth()->login($user);
        $request->session()->regenerate();
        $user->update(['last_login_at' => now()]);

        return redirect()->route($user->role === 'admin' ? 'dashboard' : 'cart');
    }

    // Fungsi untuk logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
