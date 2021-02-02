<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('home');
}); */

//creo rotta con elenco drink
Route::get('/drinks', 'DrinkController@index')->name('drinks');

//creo rotta per singolo drink
Route::get('drink/{id}', 'DrinkController@show')->name('show-drink');


//creo rotta per gestire creazione nuovo drink
Route::get('/new/drink', 'DrinkController@create')->name('new-drink');

//creo rotta con post per salvare nuovo drink
Route::post('/store/drink', 'DrinkController@store')->name('store-drink');
