<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class,'index'])->name('cars.index');
// Route::get('/cars', [CarController::class,'index'])->name('cars.index');
// Route::get('/cars/create', [CarController::class,'create'])->name('cars.create');
// Route::post('/cars', [CarController::class,'store'])->name('cars.store');
// Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
// Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
// Route::put('/cars/{car}', [CarController::class,'update'])->name('cars.update');
// Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
Route::resource('cars', CarController::class);
