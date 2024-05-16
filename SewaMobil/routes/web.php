<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// AUTH
Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//MOBIL
Route::get('/indexMobil', [MobilController::class, 'index'])->middleware('auth');
Route::get('/createMobil', [MobilController::class, 'create'])->middleware('auth');
Route::post('/storeMobil', [MobilController::class, 'store'])->middleware('auth');
Route::get('/showMobil/{id}', [MobilController::class, 'show'])->middleware('auth');
Route::post('/updateMobil/{id}', [MobilController::class, 'update'])->middleware('auth');
Route::get('/destroyMobil/{id}', [MobilController::class, 'destroy'])->middleware('auth');
Route::get('/search', [MobilController::class, 'search'])->name('search')->middleware('auth');

//PEMINJAMAN
Route::get('/indexPeminjaman', [PeminjamanController::class, 'index'])->middleware('auth');
Route::get('/createPeminjaman', [PeminjamanController::class, 'create'])->middleware('auth');
Route::post('/storePeminjaman', [PeminjamanController::class, 'store'])->middleware('auth');
Route::get('/showPeminjaman/{id}', [PeminjamanController::class, 'show'])->middleware('auth');
Route::post('/updatePeminjaman/{id}', [PeminjamanController::class, 'update'])->middleware('auth');
Route::get('/destroyPeminjaman/{id}', [PeminjamanController::class, 'destroy'])->middleware('auth');
Route::get('/searchPeminjaman', [PeminjamanController::class, 'search'])->name('search')->middleware('auth');

//PENGEMBALIAN
Route::get('/indexPengembalian', [PengembalianController::class, 'index'])->middleware('auth');
Route::get('/createPengembalian', [PengembalianController::class, 'create'])->middleware('auth');
Route::post('/storePengembalian', [PengembalianController::class, 'store'])->middleware('auth');
Route::get('/showPengembalian/{id}', [PengembalianController::class, 'show'])->middleware('auth');
Route::post('/updatePengembalian/{id}', [PengembalianController::class, 'update'])->middleware('auth');
Route::get('/destroyPengembalian/{id}', [PengembalianController::class, 'destroy'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
