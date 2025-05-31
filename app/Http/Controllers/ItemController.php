<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Menampilkan form untuk menambahkan barang
    public function create()
    {
        return view('items.create');
    }

    // Menyimpan barang baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Item::create($request->all());
        return redirect('/items')->with('success', 'Item added successfully!');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    // Memperbarui barang
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect('/items')->with('success', 'Item updated successfully!');
    }

    // Menghapus barang
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items')->with('success', 'Item deleted successfully!');
    }
}
