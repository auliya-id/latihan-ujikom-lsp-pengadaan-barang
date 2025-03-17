<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::resource('sales', App\Http\Controllers\SalesController::class);
Route::resource('item', App\Http\Controllers\ItemController::class);
Route::resource('transaction', App\Http\Controllers\TransaksiController::class);
Route::resource('petugas', App\Http\Controllers\PetugasController::class);
