<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

// Route::get('/perhitungan', function () {
//     return view('perhitungan');
// })->middleware(['auth', 'verified']);

Route::get('/perhitungan', [PerhitunganController::class, 'show'])->middleware(['auth', 'verified']);
Route::post('/tambah', [PerhitunganController::class, 'insert'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
