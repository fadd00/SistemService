<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        // Jika pengguna sudah login, redirect ke halaman dashboard atau home
        if (Auth::check()) {
            return redirect()->route('home'); // Ganti 'home' dengan route dashboard Anda
        }
        //return view('auth.login'); // Kita akan buat view ini nanti
    }

    /**
     * Menangani permintaan login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'], // atau 'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba untuk mengautentikasi pengguna
        // Sesuaikan field di array jika Anda menggunakan 'email' bukan 'username'
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']], $request->filled('remember'))) {
            $request->session()->regenerate();

            // Redirect ke halaman yang dimaksud setelah login atau ke dashboard/home
            return redirect()->intended(route('home')); // Ganti 'home' jika perlu
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'username' => 'Username atau password yang diberikan salah.', // atau 'email'
        ])->onlyInput('username'); // atau 'email'
    }

    /**
     * Menangani permintaan logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect ke halaman utama atau login
    }
}