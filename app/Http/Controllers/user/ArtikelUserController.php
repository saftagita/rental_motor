<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelUserController extends Controller
{
    /**
     * Display a listing of articles for users.
     */
    public function index()
    {
        $artikels = Artikel::latest()->get();
        return view('pages.user.artikel', compact('artikels'));
    }

    /**
     * Display the specified article detail.
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        
        // Get related articles (3 latest articles excluding current)
        $relatedArtikels = Artikel::where('id', '!=', $id)
                                  ->latest()
                                  ->take(3)
                                  ->get();
        
        return view('pages.user.artikel-detail', compact('artikel', 'relatedArtikels'));
    }
}