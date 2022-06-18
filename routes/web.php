<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Customers
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/cart', [HomeController::class, 'keranjang'])->name('cart');
Route::get('/checkout', [HomeController::class, 'co'])->name('checkout');
Route::get('/brandshoes', [HomeController::class, 'brand'])->name('brands');
// Route::get('/cart', function(){
//     return view('cart');
// });

// Auth
Route::get('auth', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('check', [AuthController::class, 'check'])->name('auth.check');
        Route::get('register', [AuthController::class, 'register'])->name('auth.register');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Sellers
Route::prefix('sellers')->middleware('can:read-dashboard')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('sellers.dashboard');

    // Products
    Route::prefix('products')->middleware('can:read-products')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('sellers.products');
        Route::get('getData', [ProductController::class, 'getData'])->name('sellers.products.getData');
        Route::get('create', [ProductController::class, 'create'])->name('sellers.products.create')->middleware('can:create-products');
        Route::post('store', [ProductController::class, 'store'])->name('sellers.products.store')->middleware('can:create-products');
        Route::get('{product}/edit', [ProductController::class, 'edit'])->name('sellers.products.edit')->middleware('can:update-products');
        Route::post('{product}/update', [ProductController::class, 'update'])->name('sellers.products.update')->middleware('can:update-products');
        Route::delete('{product}/delete', [ProductController::class, 'destroy'])->name('sellers.products.delete')->middleware('can:delete-products');
    });
});
