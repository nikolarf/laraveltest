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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('contact', 'MyController@contact');
Route::get('contact', 'MyController@index');
Route::get('about', function () {
	$data = "<p>Here is my Data</p>";
    return view('about', compact('data'));
});
