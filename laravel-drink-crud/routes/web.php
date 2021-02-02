<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('home');
}); */

//creo rotta con elenco drink
Route::get('/drinks', 'DrinkController@index')->name('drinks');

//creo rotta per singolo drink
Route::get('drink/{id}', 'DrinkController@show')->name('show-drink');
