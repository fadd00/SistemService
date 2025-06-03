<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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
Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin')->name('admin');

Route::get('/login-form', function () {
    return view('login'); // Mengarahkan ke login.blade.php
})->name('login-form');


// Rute untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses data login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'home']);

Route::resource('/items', ItemController::class);

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/items/create', [ProductController::class, 'create'])->name('items.create'); // Menampilkan form
Route::post('/items', [ProductController::class, 'store'])->name('items.store'); // Menyimpan data
