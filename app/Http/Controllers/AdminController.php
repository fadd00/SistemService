<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import Product model instead of User
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method untuk menampilkan halaman admin
    public function index()
    {
        // Mengambil semua data dari tabel products
        $products = Product::all();

        // Mengirimkan data ke view admin.blade.php
        return view('admin', compact('products'));
    }
}
