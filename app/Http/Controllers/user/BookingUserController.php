<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Booking;

class BookingUserController extends Controller
{
    // tampilkan form booking + list booking
    public function create()
    {
        $products = Product::all();
        $bookings = Booking::with('product')->get(); // ambil semua booking
        return view('pages.user.booking', compact('products', 'bookings'));
    }

    // simpan booking baru
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama' => 'required|string|max:255',
            'telp' => 'required|string|max:20',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        Booking::create([
            'product_id' => $request->product_id,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        return redirect()->route('booking.create')->with('success', 'Booking berhasil disimpan!');
    }
}
