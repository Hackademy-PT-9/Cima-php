<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('chisiamo', function () {
    return view('chisiamo');
});

Route::get('storia', function () {
    return view('storia');
});

Route::get('contatti', function () {
    return view('contatti');
});

Route::get('int', function () {
    return 3;
});

Route::get('string', function () {
    return "Stringa";
});

Route::get('array', function () {
    $array=["a","b"];
    return $array[1];
});


