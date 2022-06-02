<?php

use App\Http\Controllers\Auth\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/product-detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/cart', [HomeController::class, 'keranjang'])->name('cart');
Route::get('/checkout', [HomeController::class, 'co'])->name('checkout');
Route::get('/brandshoes', [HomeController::class, 'brand'])->name('brands');
// Route::get('/cart', function(){
//     return view('cart');
// });

Route::prefix('sellers')->group(function () {
    Route::get('', [ProductController::class, 'index']);
});
