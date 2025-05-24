<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{   //fungsi untuk signup
    public function signup(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
        'role'     => 'user',
    ]);

    return redirect()->route('home')->with('success', 'Akun berhasil dibuat!');
}

    public function showLoginForm()
    {
        return view('auth.login');
    }

    //fungsi untuk login
    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        auth()->login($user);

        // Simpan waktu login sekarang
        $user->update(['last_login_at' => now()]);

        // sesuai role
        if ($user->role === 'admin') {
            return redirect('/dashboard');
        }
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Login gagal. Email atau password salah.',
    ]);
}

}