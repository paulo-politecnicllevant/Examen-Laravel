<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlibreController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LlibreAutorController;

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('llibres', LlibreController::class);
Route::apiResource('autors', AutorController::class);
Route::apiResource('llibres_autors', LlibreAutorController::class);

////Libros
//Route::get('/llibres', [LlibreController::class, 'index']);
//Route::get('/llibres/{id}', [LlibreController::class, 'show']);
//Route::post('/llibres', [LlibreController::class, 'store']);
//Route::put('/llibres/{id}', [LlibreController::class, 'update']);
//Route::delete('/llibres/{id}', [LlibreController::class, 'destroy']);
//
////Autores
//Route::get('/autors', [AutorController::class, 'index']);
//Route::get('/autors/{id}', [AutorController::class, 'show']);
//Route::post('/autors', [AutorController::class, 'store']);
//Route::put('/autors/{id}', [AutorController::class, 'update']);
//Route::delete('/autors/{id}', [AutorController::class, 'destroy']);
//
////Relación N-N
//Route::post('/llibres/{id}/autors/{autor_id}', [LlibreAutorController::class, 'assignarAutor']);
//Route::delete('/llibres/{id}/autors/{autor_id}', [LlibreAutorController::class, 'eliminarAutor']);
//Route::get('/llibres/{id}/autors', [LlibreAutorController::class, 'autorsDeLlibre']);
//Route::get('/autors/{id}/llibres', [LlibreAutorController::class, 'llibresDeAutor']);
//
