<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CincinController;
use App\Http\Controllers\AdminController;



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
    return view('home');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login'); //nampilkan login

Route::post('login1', [LoginController::class, 'login']);//post login

Route::get('register', [RegisterController::class, 'create']); //nampilkan register

Route::post('register1', [RegisterController::class, 'register']);//post register

Route::get('cincin', [CincinController::class, 'index']);

Route::get('admin', [AdminController::class, 'index'])->name('admin');

Route::get('formEdit', [AdminController::class, 'edit']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('produk', function () {
    return view('layout.editProduk');
});

Route::get('contentProduk', function () {
    return view('layout.contentEditProduk');
});

//PRODUK
Route::get('show_produk', [AdminController::class, 'show_produk'])->name('show_produk');
Route::post('insert', [AdminController::class, 'insert']);