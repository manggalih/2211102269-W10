<?php

use App\Http\Controllers\BungaController;

Route::get('/', [BungaController::class, 'index'])->name('bunga.home');
Route::get('/bunga/manage', [BungaController::class, 'manage'])->name('bunga.manage');
Route::get('/bunga/create', [BungaController::class, 'create'])->name('bunga.create');
Route::post('/bunga', [BungaController::class, 'store'])->name('bunga.store');
Route::get('/bunga/{id}/edit', [BungaController::class, 'edit'])->name('bunga.edit');
Route::put('/bunga/{id}', [BungaController::class, 'update'])->name('bunga.update');
Route::delete('/bunga/{id}', [BungaController::class, 'destroy'])->name('bunga.destroy');