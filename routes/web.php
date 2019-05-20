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

Route::get('/test1', function () {
    return ("HELLO");
});

Route::get('/test', function () {
    return view('layout.default');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Villages', 'villageController');