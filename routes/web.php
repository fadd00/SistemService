<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $rows = DB::select('SELECT * FROM item');
    return view('home', compact('rows'));
});

Route::get('/', function () {
    return view('home');
});

Route::get('/login-form', function () {
    return view('login'); // Mengarahkan ke login.blade.php
})->name('login-form');


// Rute untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses data login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'home']);
