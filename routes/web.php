<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/auth/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('auth');

Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'store'])->name('register');

Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::prefix('/admin')->middleware(['admin', 'auth'])->group(function () {
    Route::resource('/category', CategoryController::class);
});
