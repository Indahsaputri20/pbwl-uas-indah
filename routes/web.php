<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barang', [App\Http\Controllers\barangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\barangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\barangController::class, 'store']);
Route::get('/barang/{id}/edit', [App\Http\Controllers\barangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\barangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\barangController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);

Route::get('/detail', [App\Http\Controllers\detailController::class, 'index']);
Route::get('/detail/create', [App\Http\Controllers\detailController::class, 'create']);
Route::post('/detail', [App\Http\Controllers\detailController::class, 'store']);
Route::get('/detail/{id}/edit', [App\Http\Controllers\detailController::class, 'edit']);
Route::patch('/detail/{id}', [App\Http\Controllers\detailController::class, 'update']);
Route::delete('/detail/{id}', [App\Http\Controllers\detailController::class, 'destroy']);