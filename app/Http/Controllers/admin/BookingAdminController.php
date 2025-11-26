<?php

namespace App\Http\Controllers\admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingAdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('product')->get();
        return view('pages.admin.booking.booking', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        Booking::create([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        return redirect()->back()->with('success', 'Booking berhasil disimpan!');
    }

    public function delete($id)
    {
        Booking::find($id)->delete();
        return redirect()->back()->with('success', 'Booking berhasil dihapus!');
    }
}
