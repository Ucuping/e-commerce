<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth
// Route::get('auth', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
// Route::prefix('v1')->group(function () {
//     Route::prefix('auth')->group(function () {
//         Route::middleware('guest')->group(function () {
//             Route::post('login', [AuthController::class, 'check'])->name('auth.check');
//             // Route::get('register', [AuthController::class, 'register'])->name('auth.register');
//             Route::post('register/check', [AuthController::class, 'checkRegister'])->name('auth.register.check');
//         });
//         Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
//     });
// });
