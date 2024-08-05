<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/pet/{petId}', [PetController::class, 'petById']);
Route::post('/pet/getbystatus', [PetController::class, 'findByStatus']);
Route::post('/pet', [PetController::class, 'create']);
Route::put('/pet/{petId}', [PetController::class, 'update']);
Route::delete('/pet/{petId}', [PetController::class, 'delete']);


