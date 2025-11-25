<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
Route::get('/home', function() {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Admin/product/index', function () {
    return view('Admin.product.index');
});

Route::get('/Admin/product/create', function () {
    return view('Admin.product.create');
});
Route::get('/Admin/product/edit', function () {
    return view('Admin.product.edit');
});

// CRUD Booking Motor
Route::get('/admin', [BookingController::class, 'index'])->name('admin');
Route::post('/admin/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/admin/delete/{id}', [BookingController::class, 'delete'])->name('booking.delete');

// admin product
Route::get('/Admin/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/Admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/Admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/Admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/Admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/Admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
