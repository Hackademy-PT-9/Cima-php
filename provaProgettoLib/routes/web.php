<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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
Route::middleware(['auth'])->group(function(){

    Route::resource('books', BookController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('categories', CategoryController::class);
});
Route::get('/', [PublicController::class, 'homepage'])->name('public.homepage');
// Route::get('/index', [BookController::class, 'index'])->name('books.index');
// Route::get('/create', [BookController::class, 'create'])->name('books.create');
// Route::get('/show/{book}/details', [BookController::class, 'show'])->name('books.show');
// Route::post('/save', [BookController::class, 'store'])->name('books.store');
