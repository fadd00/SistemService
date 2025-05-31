<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User sudah dibuat
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method untuk menampilkan halaman admin
    public function index()
    {
        // Mengambil semua data dari tabel users
        $users = User::all();

        // Mengirimkan data ke view admin.blade.php
        return view('admin', compact('users'));
    }
}
