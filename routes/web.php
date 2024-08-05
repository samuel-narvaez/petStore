<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/{vue_capture?}', function () {
    return view('app'); // Asegúrate de tener un archivo de vista llamado 'app.blade.php' que cargará tu aplicación Vue
})->where('vue_capture', '[\/\w\.-]*');