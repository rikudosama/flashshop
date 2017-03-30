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

Route::get('/', 'FrontController@index')->name('home_path');
Route::get('/shirts', 'FrontController@shirts')->name('shirts_path');
Route::get('/shirt', 'FrontController@shirt')->name('shirt_path');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout_path');

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
    Route::resource('/product', 'ProductsController');
    Route::resource('/category', 'CategoriesController');
});
