<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/auth/login', [AuthController::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('auth.login')->middleware('guest');

Route::get('/auth/register', [AuthController::class, 'register'])->name('register.index')->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'store'])->name('register.signup')->middleware('guest');

Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::prefix('/admin')->middleware(['admin', 'auth'])->group(function () {
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/', [HomeController::class, 'index']);
