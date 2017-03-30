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

Route::get('/', 'HomeController@index')->name('home_path');
Route::get('/shirts', 'HomeController@shirts')->name('shirts_path');
Route::get('/shirt', 'HomeController@shirt')->name('shirt_path');
