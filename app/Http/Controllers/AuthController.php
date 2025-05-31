<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login tanpa Bcrypt
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek username dan password di database
        $admin = DB::table('admins')
            ->where('username', $request->username)
            ->where('password', $request->password) // Password tidak di-hash
            ->first();

        if ($admin) {
            // Simpan informasi login di session
            session(['admin_logged_in' => true]);

            // Redirect ke halaman admin
            return redirect()->route('admin');
        }

        // Jika gagal login, kembali ke halaman login dengan error
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }
}
