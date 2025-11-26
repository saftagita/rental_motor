<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.admin.product.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.product.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string'
        ]);

        // Upload foto
        $fotoPath = $request->file('foto')->store('produk', 'public');

        // Simpan ke database
        Product::create([
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'foto' => $fotoPath,
            'deskripsi' => $validated['deskripsi'] ?? null,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.product.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string'
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($product->foto) {
                Storage::disk('public')->delete($product->foto);
            }

            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('produk', 'public');
        }

        // Update langsung pakai mass assignment
        $product->update($data);

        return redirect()->route('admin.product.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($product->foto && \Storage::disk('public')->exists($product->foto)) {
            \Storage::disk('public')->delete($product->foto);
        }

        // Hapus data dari database
        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
