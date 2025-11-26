<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductUserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.user.product', compact('products'));
    }
}
