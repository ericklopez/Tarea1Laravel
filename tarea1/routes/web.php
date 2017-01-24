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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tenis', function() {
	return view('tenis.index');
});

Route::get('/tenis','TenisController@index');
Route::get('/tenis/create','TenisController@create');

Auth::routes();

Route::get('/home', 'HomeController@index');
