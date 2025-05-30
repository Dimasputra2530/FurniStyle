<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return $next($request);
            }

            // Kalau login tapi bukan admin
            return redirect()->route('home')->with('error', 'Akses ditolak. Anda bukan admin.');
        }

        // Kalau belum login
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }
}
