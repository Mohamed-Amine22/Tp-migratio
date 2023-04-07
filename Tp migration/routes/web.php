<?php

use App\Http\Controllers\Stagers;
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

Route::get('/',[Stagers::class,'index'])->name('home');
Route::get('/edit/{id}',[Stagers::class,'edit']);
Route::post('/edit/{id}',[Stagers::class,'edit'])->name('updait');
