<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\Brand\BrandController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Order\OrderController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Cart\CartController;
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
// Route::get('/cart', [HomeController::clas/s, 'keranjang'])->name('cart');
Route::get('/checkout', [HomeController::class, 'co'])->name('checkout');
Route::get('/brandshoes', [HomeController::class, 'brand'])->name('brands');
Route::prefix('carts')->group(function () {
    Route::get('', [CartController::class, 'index'])->name('carts');
    Route::post('store', [CartController::class, 'store'])->name('carts.store');
    
});
// Route::get('/cart', function(){
//     return view('cart');
// });

// Auth
Route::get('auth', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('check', [AuthController::class, 'check'])->name('auth.check');
        Route::get('register', [AuthController::class, 'register'])->name('auth.register');
        Route::post('register/check', [AuthController::class, 'checkRegister'])->name('auth.register.check');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Sellers
Route::prefix('seller')->middleware('can:read-dashboard')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');

    // Products
    Route::prefix('products')->middleware('can:read-products')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('seller.products');
        Route::get('getData', [ProductController::class, 'getData'])->name('seller.products.getData');
        Route::get('create', [ProductController::class, 'create'])->name('seller.products.create')->middleware('can:create-products');
        Route::post('store', [ProductController::class, 'store'])->name('seller.products.store')->middleware('can:create-products');
        Route::get('{product}/edit', [ProductController::class, 'edit'])->name('seller.products.edit')->middleware('can:update-products');
        Route::post('{product}/update', [ProductController::class, 'update'])->name('seller.products.update')->middleware('can:update-products');
        Route::delete('{product}/delete', [ProductController::class, 'destroy'])->name('seller.products.delete')->middleware('can:delete-products');
    });

    // Orders
    Route::prefix('orders')->middleware('can:read-orders')->group(function () {
        Route::get('', [OrderController::class, 'index'])->name('seller.orders');
        Route::get('getData', [OrderController::class, 'getData'])->name('seller.orders.getData');
        Route::get('{detailOrder}/detail', [OrderController::class, 'detail'])->name('seller.orders.detail');
    });

    // Users
    Route::prefix('profiles')->middleware('can:read-users')->group(function () {
        Route::get('', [UserController::class, 'index'])->name('seller.profiles');
        Route::post('{user}/update', [UserController::class, 'update'])->middleware('can:update-users')->name('seller.profiles.update');
    });

    // Brands
    Route::prefix('brands')->middleware('can:read-brands')->group(function () {
        Route::get('', [BrandController::class, 'index'])->name('seller.brands');
        Route::post('{brand}/update', [BrandController::class, 'update'])->middleware('can:update-brands')->name('seller.brands.update');
    });
});
