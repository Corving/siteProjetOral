<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProjetController;
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

Route::get('/',[ProjetController::class,'index'])->name('home');
Route::get('/projet/1', function () {
    return view('projets.projet1');
});

Route::get('/projet/2', function () {
    return view('projets.projet2');
});
