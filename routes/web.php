<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\FaQController;
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
    return view('beranda');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/laporan-diskriminasi', [ReportController::class, 'index']);
Route::post('/laporan-diskriminasi', [ReportController::class, 'create']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::post('/berita', [BeritaController::class, 'cari']);
Route::get('/donasi', [HomeController::class, 'donasi']);
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/perpustakaan', [PerpusController::class, 'index'])->name('perpustakaan.index');
Route::get('/perpustakaan/{slug}', [PerpusController::class, 'detail']);
Route::get('/faq', [FaQController::class, 'index']);
Route::get('/faq/{slug}', [FaQController::class, 'detail']);
Route::post('/pusatbantuan', [ReportController::class, 'create']);

