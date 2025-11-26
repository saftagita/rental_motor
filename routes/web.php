<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookingAdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\user\ProductUserController;

use App\Http\Controllers\AuthController;

// auth
// register
Route::get('/', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/', [AuthController::class, 'submitRegister'])->name('register.submit');
// login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');
// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// user
Route::get('/home', function() {
    return view('pages.user.home');
})->name('user.home');

Route::get('/product', [ProductUserController::class, 'index'])->name('user.product.index');

Route::get('/booking', function () {
    return view('pages.user.booking');
})->name('booking.form');

Route::get('/about', function () {
    return view('pages.user.about');
});

Route::get('/contact', function () {
    return view('pages.user.contact');
});

// admin
// admin booking
Route::get('/admin/booking', [BookingAdminController::class, 'index'])->name('admin.booking.index');
Route::post('/admin/booking/store', [BookingAdminController::class, 'store'])->name('admin.booking.store');
Route::get('/admin/booking/delete/{id}', [BookingAdminController::class, 'delete'])->name('admin.booking.delete');

// admin product
Route::resource('admin/product', ProductAdminController::class)->names([
    'index' => 'admin.product.index',
    'create' => 'admin.product.create',
    'store' => 'admin.product.store',
    'show' => 'admin.product.show',
    'edit' => 'admin.product.edit',
    'update' => 'admin.product.update',
    'destroy' => 'admin.product.destroy',
]);