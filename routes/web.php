<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CiutatController;
use App\Http\Controllers\CasalController;
use App\Http\Controllers\IncidenciaController;
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

Route::get('/dashboard', [IncidenciaController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Ruta nueva
Route::resource('incidencias', IncidenciaController::class)->middleware('auth');