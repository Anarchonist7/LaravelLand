<?php

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


Route::get('/ganondorf', 'GanondorfController@index');

Route::get('ganondorf/{shitter}', 'GanondorfController@show');

Route::get('/', 'PagesController@index');

Route::get('/pages/create', 'PagesController@create');

Route::post('/pages', 'PagesController@store');

// Route::get('/', function () {
//     $name = 'shittarrrrr27';

//     return view('welcome', compact('name'));
// });

