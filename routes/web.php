<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookingAdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\admin\ArtikelAdminController;
use App\Http\Controllers\user\ProductUserController;
use App\Http\Controllers\user\BookingUserController;
use App\Http\Controllers\user\ArtikelUserController;
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

// Artikel list
Route::get('/artikel', [ArtikelUserController::class, 'index'])->name('user.artikel.index');
Route::get('/artikel/{id}', [ArtikelUserController::class, 'show'])->name('user.artikel.show');

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

// Admin Artikel (resource controller)
Route::resource('admin/artikel', ArtikelAdminController::class)->names([
    'index' => 'admin.artikel.index',
    'create' => 'admin.artikel.create',
    'store' => 'admin.artikel.store',
    'show' => 'admin.artikel.show',
    'edit' => 'admin.artikel.edit',
    'update' => 'admin.artikel.update',
    'destroy' => 'admin.artikel.destroy',
]);
