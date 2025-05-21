<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autores', [AutorController::class, 'index']);
Route::get('/autores/new', [AutorController::class, 'create']);
Route::get('/autores/edit/{codigo}', [AutorController::class, 'edit']);
Route::get('/autores/{codigo}', [AutorController::class, 'show']);
