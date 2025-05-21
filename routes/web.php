<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

// Mostrar lista de autores
Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');

// Formulario para crear nuevo autor
Route::get('/autores/new', [AutorController::class, 'create'])->name('autores.create');

// Guardar nuevo autor
Route::post('/autores', [AutorController::class, 'store'])->name('autores.store');

// Formulario para editar autor
Route::get('/autores/edit/{codigo}', [AutorController::class, 'edit'])->name('autores.edit');

// Actualizar autor
Route::put('/autores/{codigo}', [AutorController::class, 'update'])->name('autores.update');

// Mostrar detalles de un autor
Route::get('/autores/{codigo}', [AutorController::class, 'show'])->name('autores.show');

// Eliminar autor
Route::delete('/autores/{codigo}', [AutorController::class, 'destroy'])->name('autores.destroy');