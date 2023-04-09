<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ResFilmController;
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

// Route::get('/',[FilmController::class,'index'])->name('Home');
// Route::get('/create',[FilmController::class,'create']);
// Route::post('/create',[FilmController::class,'store'])->name('create');
// Route::get('/edit/{id}',[FilmController::class,'edit']);
// Route::post('/edit/{id}',[FilmController::class,'update'])->name('update');
// Route::get('/delete/{id}',[FilmController::class,'delete'])->name('delete');



Route::resource('/film',ResFilmController::class);