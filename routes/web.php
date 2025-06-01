<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

// ============================
// Halaman Umum (dengan form signup/login duplikat di dalam)
// ============================
Route::get('/', fn () => view('home'))->name('home');
Route::get('/shop', fn () => view('shop'))->name('shop');
Route::get('/about', fn () => view('about'))->name('about');

// ============================
// AUTH (hanya proses login/signup/logout, tanpa view signup khusus)
// ============================
Route::post('/signup', [AuthController::class, 'signup'])->middleware('guest')->name('signup');
Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// ============================
// HANYA untuk user login
// ============================
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
});

// ============================
// HANYA untuk admin login
// ============================
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
});

Route::post('/orders', [OrderController::class, 'store']);

