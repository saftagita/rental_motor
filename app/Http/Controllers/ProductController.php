<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // index admin: list produk (card style)
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return view('Admin.product.index', compact('products'));
    }

    // form create
    public function create()
    {
        return view('Admin.product.create');
    }

    // simpan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $fotoName = null;
        if ($request->hasFile('foto')) {
            $fotoName = time() . '_' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img/product'), $fotoName);
        }

        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoName,
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.product.edit', compact('product'));
    }

    // update
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        // handle foto baru (hapus yang lama jika ada)
        if ($request->hasFile('foto')) {
            // hapus file lama
            if ($product->foto && file_exists(public_path('img/product/' . $product->foto))) {
                @unlink(public_path('img/product/' . $product->foto));
            }

            $fotoName = time() . '_' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img/product'), $fotoName);
            $product->foto = $fotoName;
        }

        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->save();

        return redirect()->route('product.index')->with('success', 'Produk berhasil diupdate!');
    }

    // delete
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // hapus foto fisik
        if ($product->foto && file_exists(public_path('img/product/' . $product->foto))) {
            @unlink(public_path('img/product/' . $product->foto));
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus!');
    }
}
