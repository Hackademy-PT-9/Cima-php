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

Route::get('/homepage', function() {
    return view('homepage');
})->name('homepage');


Route::get('/chisiamo', function() {
    return view('chisiamo');
})->name('chisiamo');

Route::get('/servizi', function() {
    $services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    return view('servizi', ['services' => $services]);
})->name('servizi');

Route::get('/dettagliservizi/{servizio}', function($stringa) {
    return view('dettagliservizi', ['servizio' => $stringa]);
})->name('dettagliservizi');

Route::get('/contatti', function() {
    return view('contatti');
})->name('contatti');


