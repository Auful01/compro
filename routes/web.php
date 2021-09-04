<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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
Route::get('/beranda', function () {
    return view('menu.beranda ');
});
Route::get('/nav', function () {
    return view('layout.navbar');
});
Route::resource('product', ProductController::class);
Route::get('produk', function () {
    return view('menu.product');
});
Route::get('contact', [ContactController::class, 'index']);
Route::resource('profile', ProfileController::class);
Route::get('/tambah-produk', function () {
    return view('admin.inputProduct');
});
