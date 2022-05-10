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
})->name('projet1');

Route::get('/projet/2', function () {
    return view('projets.projet2');
})->name('projet2');

Route::get('/projet/3', function () {
    return view('projets.projet3');
})->name('projet3');

Route::get('/projet/4', function () {
    return view('projets.projet4');
})->name('projet4');

Route::get('/projet/5', function () {
    return view('projets.projet5');
})->name('projet5');

Route::get('/projet/6', function () {
    return view('projets.projet6');
})->name('projet6');

Route::get('/projet/7', function () {
    return view('projets.projet7');
})->name('projet7');


