<?php

use App\Http\Controllers\BasariController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\OyuncuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TakimController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function () {
	return view('acilis');
})->name('acilis');
Route::get('/anasayfa', [HomeController::class, 'index'])->name('home');
Route::get('biz-kimiz', function () {
	return view('biz-kimiz');
})->name('biz-kimiz');
Route::get('ekibimiz', function () {
	return view('ekibimiz');
})->name('ekibimiz');
Route::get('basarilarimiz', [BasariController::class, 'index'])->name('basarilarimiz');
Route::get('sponsorlar', [SponsorController::class, 'index'])->name('sponsorlar');
Route::get('takim/{takim_adi}', [TakimController::class, 'takim'])->name('takim');
Route::get('oyuncu-basvuru', [OyuncuController::class, 'show'])->name('oyuncu-basvuru');
Route::get('iletisim', [IletisimController::class, 'show'])->name('iletisim');

Route::post('oyuncu-basvuru', [OyuncuController::class, 'create'])->name('oyuncu-basvuru.create');
Route::post('iletisim', [IletisimController::class, 'store'])->name('iletisim.store');

require __DIR__ . '/auth.php';
