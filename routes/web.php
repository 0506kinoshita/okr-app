<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSecond;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('home')->middleware('auth');
Route::get('Home/add','HomeController@add')->middleware('auth');
Route::post('Home/add','HomeController@create');

Route::get('/Home/{id}','HomeController@show')->name('show')->middleware('auth');
Route::post('Home/{id}','HomeController@delete');

Route::get('Home/{id}/add_child','HomeController@add_child')->middleware('checkSecond')->middleware('auth');
Route::post('Home/{id}/add_child','HomeController@add_child_update');

Route::get('Home/{id}/edit','HomeController@edit')->middleware('auth');
Route::post('Home/{id}/edit','HomeController@update');

Auth::routes();
