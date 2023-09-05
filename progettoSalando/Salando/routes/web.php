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

Route::get('/',[CompanyController::class, 'homepage'])->name('homepage');

Route::get('/about', [PublicController::class, 'about'])->name('about');

Route::get('/contact', [PublicController::class, 'contact'])->name('contatti');

Route::get('/pricing', [PublicController::class, 'pricing'])->name('prezzi');

Route::get('/faq',[PublicController::class, 'faq'])->name('domande');

Route::get('/prodotto/{dettagli}',[CompanyController::class, 'dettagli'])->name('dettagliprodotto');
