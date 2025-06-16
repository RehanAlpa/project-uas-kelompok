<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Halaman Statis
Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/shop', function () {
    return view('Shop');
})->name('shop');

Route::post('/order', [OrderController::class, 'store'])
    ->middleware('auth')
    ->name('orders.store');

Route::middleware('auth')->group(function () {
    Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
});


// === AUTH ===
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/', [HomeController::class, 'index'])->name('home');


// Orders (CRUD)
Route::post('/order', [OrderController::class, 'store'])->name('orders.store');

// 404 fallback
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

