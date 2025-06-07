<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan produk di halaman utama
    public function index()
    {
        $products = Product::all(); // Ambil semua produk dari database
        return view('home', compact('products')); // Kirim data ke view
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('items.create'); // Mengarahkan ke view form tambah produk
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Upload gambar
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Simpan data ke tabel products
        Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'description' => $request->description,
            'image_url' => '/storage/' . $imagePath, // Simpan path gambar
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('items.create')->with('success', 'Product added successfully!');
    }

    // Menampilkan halaman admin dengan daftar produk
    public function admin()
    {
        $products = Product::all();
        return view('admin', compact('products'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image_url'] = '/storage/' . $imagePath;
        }

        $product->update($data);

        return redirect()->route('admin')->with('success', 'Product updated successfully!');
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin')->with('success', 'Product deleted successfully!');
    }
}
