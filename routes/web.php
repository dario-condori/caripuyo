<?php

use App\Http\Controllers\ContribuyenteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/resumen', [ResumenController::class, 'resumen'])->middleware(['auth', 'verified'])->name('resumen');
Route::get('/contribuyente/listado', [ContribuyenteController::class, 'listado'])->middleware(['auth', 'verified'])->name('contribuyente.listado');
Route::get('/contribuyente/nuevo', [ContribuyenteController::class, 'nuevo'])->middleware(['auth', 'verified'])->name('contribuyente.nuevo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
