<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSecond;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('Home/add','HomeController@add');
Route::post('Home/add','HomeController@create');

Route::get('/Home/{id}','HomeController@show')->name('show');
Route::post('Home/{id}','HomeController@delete');

Route::get('Home/{id}/add_child','HomeController@add_child')->middleware('checkSecond');;
Route::post('Home/{id}/add_child','HomeController@add_child_update');

Route::get('Home/{id}/edit','HomeController@edit');
Route::post('Home/{id}/edit','HomeController@update');

Route::get('Home/delete','HomeController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello','HomeController@index')->middleware('auth');
