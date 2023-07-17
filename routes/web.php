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
Route::get('/jenisbunga', [App\Http\Controllers\jenisbungaController::class, 'index']);
Route::get('/jenisbunga/create', [App\Http\Controllers\jenisbungaController::class, 'create']);
Route::post('/jenisbunga', [App\Http\Controllers\jenisbungaController::class, 'store']);
Route::get('/jenisbunga/{id}/edit', [App\Http\Controllers\jenisbungaController::class, 'edit']);
Route::patch('/jenisbunga/{id}', [App\Http\Controllers\jenisbungaController::class, 'update']);
Route::delete('/jenisbunga/{id}', [App\Http\Controllers\jenisbungaController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bunga', [App\Http\Controllers\bungaController::class, 'index']);
Route::get('/bunga/create', [App\Http\Controllers\bungaController::class, 'create']);
Route::post('/bunga', [App\Http\Controllers\bungaController::class, 'store']);
Route::get('/bunga/{id}/edit', [App\Http\Controllers\bungaController::class, 'edit']);
Route::patch('/bunga/{id}', [App\Http\Controllers\bungaController::class, 'update']);
Route::delete('/bunga/{id}', [App\Http\Controllers\bungaController::class, 'destroy']);

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