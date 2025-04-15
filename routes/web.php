<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommandeController;

Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');
Route::get('/commandes/create', [CommandeController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');
Route::get('/commandes/{id}/edit', [CommandeController::class, 'edit'])->name('commandes.edit');
Route::put('/commandes/{id}', [CommandeController::class, 'update'])->name('commandes.update');
Route::delete('/commandes/{id}', [CommandeController::class, 'destroy'])->name('commandes.destroy');

