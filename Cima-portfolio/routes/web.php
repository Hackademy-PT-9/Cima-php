<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PublicController;
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

Route::get('/homepage',[PublicController::class, 'homepage'])->name('homepage');


Route::get('/chisiamo',[PublicController::class, 'chisiamo'] )->name('chisiamo');

Route::get('/contatti',[PublicController::class, 'contatti'] )->name('contatti');

Route::get('/servizi',[CompanyController::class, 'servizi'] )->name('servizi');

Route::get('/dettagliservizi/{servizio}',[CompanyController::class, 'dettagliservizi'] )->name('dettagliservizi');


