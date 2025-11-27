<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookingAdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\user\ProductUserController;
use App\Http\Controllers\user\BookingUserController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

// Register
Route::get('/', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/', [AuthController::class, 'submitRegister'])->name('register.submit');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
*/

// Home
Route::get('/home', function() {
    return view('pages.user.home');
})->name('user.home');

// Product list
Route::get('/product', [ProductUserController::class, 'index'])->name('user.product.index');

// Booking form
Route::get('/booking', [BookingUserController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingUserController::class, 'store'])->name('booking.store');

// About & Contact
Route::get('/about', function () {
    return view('pages.user.about');
})->name('user.about');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('user.contact');

Route::get('/artikel', function () {
    return view('pages.user.artikel');
});


// Halaman detail artikel
Route::get('/artikel/{slug}', function ($slug) {
    // buat data dummy artikel sesuai slug, bisa diganti dinamis nanti
    $articles = [
        'motor-matic' => [
            'title' => 'Tips Memilih Motor Matic untuk Sewa',
            'img' => 'motor1.jpg',
            'content' => 'Pilih motor matic yang nyaman, irit bahan bakar, dan cocok untuk kota. Pastikan juga kondisi mesin prima. Jangan lupa cek rem, lampu, dan oli sebelum sewa untuk pengalaman berkendara yang aman dan nyaman.'
        ],
        'motor-bebek' => [
            'title' => 'Motor Bebek: Pilihan Hemat dan Andal',
            'img' => 'motor2.jpg',
            'content' => 'Motor bebek cocok untuk perjalanan jauh dengan harga sewa yang ramah di kantong. Tips merawat motor sebelum sewa: periksa ban, pastikan rem berfungsi, dan oli dalam kondisi baik.'
        ],
        'promo-rental' => [
            'title' => 'Promo Spesial Rental Motor',
            'img' => 'motor3.jpg',
            'content' => 'Dapatkan promo hemat setiap bulan! Cocok untuk mahasiswa dan wisatawan yang ingin sewa motor murah dan cepat. Cek selalu promo di website atau kontak admin untuk penawaran terbaik.'
        ],
        'motor-bersih' => [
            'title' => 'Keuntungan Sewa Motor Bersih dan Terawat',
            'img' => 'motor4.png',
            'content' => 'Unit selalu bersih dan terawat memberikan pengalaman berkendara nyaman. Tips cek motor sebelum ambil sewa: periksa kebersihan, kondisi ban, rem, dan lampu agar perjalanan aman dan nyaman.'
        ],
    ];

    if (!isset($articles[$slug])) {
        abort(404);
    }

    return view('artikel.detail', ['article' => $articles[$slug]]);
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// Admin Booking
Route::get('/admin/booking', [BookingAdminController::class, 'index'])->name('admin.booking.index');
Route::post('/admin/booking/store', [BookingAdminController::class, 'store'])->name('admin.booking.store');
Route::get('/admin/booking/delete/{id}', [BookingAdminController::class, 'delete'])->name('admin.booking.delete');

// Admin Product (resource controller)
Route::resource('admin/product', ProductAdminController::class)->names([
    'index' => 'admin.product.index',
    'create' => 'admin.product.create',
    'store' => 'admin.product.store',
    'show' => 'admin.product.show',
    'edit' => 'admin.product.edit',
    'update' => 'admin.product.update',
    'destroy' => 'admin.product.destroy',
]);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('artikel', \App\Http\Controllers\Admin\ArtikelController::class);
});
