<?php

use App\Http\Controllers\Guest\ResourceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotte per la navigazione delle pagine
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/page-1', [PageController::class, 'viewPagekOne'])->name('link1');

Route::get('/page-2', [PageController::class, 'viewPagekTwo'])->name('link2');

//Rotta per gestire i Modelli(risorse del DB)
Route::get('/', [ResourceController::class, 'index'])->name('home');
