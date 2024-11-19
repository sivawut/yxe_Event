<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list/add', [App\Http\Controllers\AddEventController::class, 'add'])->name('add');


Route::get('/pizzas', '\App\Http\Controllers\PizzaController@index');
Route::get('/pizzas/{id}', '\App\Http\Controllers\PizzaController@show');


Route::get('/list', '\App\Http\Controllers\EventlistController@show');
//Route::get('/list/add', '\App\Http\Controllers\EventlistController@add');
Route::get('/list/{id}', '\App\Http\Controllers\EventlistController@showWithID');


//Pipe Experimental
Route::get('/item', '\App\Http\Controllers\PipeController@showItem');
Route::get('/itemadd', '\App\Http\Controllers\PipeController@addItem');
Route::post('/itemadd', '\App\Http\Controllers\PipeController@add');

Route::post('/add', '\App\Http\Controllers\AddController@add');

Route::delete('/delete/{id}', [App\Http\Controllers\DeleteController::class, 'delete']);



