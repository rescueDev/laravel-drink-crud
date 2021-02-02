<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

//creo rotta con elenco drink
Route::get('/drinks', 'DrinkController@index')->name('drinks');

//creo rotta per singolo drink
Route::get('drink/{id}', 'DrinkController@show')->name('show-drink');


//creo rotta per gestire creazione nuovo drink
Route::get('/new/drink', 'DrinkController@create')->name('new-drink');

//creo rotta con post per salvare nuovo drink
Route::post('/store/drink', 'DrinkController@store')->name('store-drink');

//creo rotta dove modificare il singolo drink
Route::get('/edit/{id}', 'DrinkController@edit')->name('edit-drink');

//creo rotta per aggiornare drink modificato
Route::post('/update/{id}', 'DrinkController@update')->name('update-drink');

//creo rotta per eliminare drink
Route::get('/delete/{id}', 'DrinkController@delete')->name('delete-drink');
