<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\NewsletterController;
use App\Models\Newsletter;
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
Route::get('/Tentang-kami', [HomeController::class, 'index']);
Route::get('/Hubungi-kami', [HomeController::class, 'index']);
Route::get('/Faq', [HomeController::class, 'index']);
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
Route::get('/newsletter/{slug}', [NewsletterController::class, 'detail']);
Route::get('/perpustakaan/download-pdf/{slug}', [PerpusController::class, 'downloadPdf'])->name('perpustakaan.download-pdf');
Route::get('/newsletter/download-pdf/{slug}', [NewsletterController::class, 'downloadPdf'])->name('newsletter.download-pdf');
