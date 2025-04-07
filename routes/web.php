<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CiutatController;
use App\Http\Controllers\CasalController;
use Illuminate\Support\Facades\Route;

// Rutas de sistema de inicio de sesión
Route::get('/', function () {
    // return view('welcome');
    return redirect('dashboard');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     // return 'Bienvenido, estás autenticado como: ' . auth()->user()->nick;
//     return view('home');

// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', [CasalController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Rutas nuevas
Route::resource('ciutat', CiutatController::class)->middleware('auth');
Route::resource('casal', CasalController::class)->middleware('auth');