<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('admin');
});
Route::resource('rickandmorty','App\Http\Controllers\RickAndMortyController');

Route::resource('dvdrentalstore/film','App\Http\Controllers\FilmController');

Route::resource('dvdrentalstore/actor','App\Http\Controllers\ActorController');

Route::resource('dvdrentalstore/lenguaje','App\Http\Controllers\LenguajeController');