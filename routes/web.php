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
Route::get('/projet/{id}', function () {
    return view('projets.projet1');
})->name('projet1.show');

