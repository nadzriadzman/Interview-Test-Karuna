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

Route::get('/', 'ProductController@index')->name('products.index');;

Route::get('products/show/{id}', 'ProductController@show')->name('products.show');

Route::get('products/edit/{id}', 'ProductController@edit')->name('products.edit');;
Route::post('/products/{id}', 'ProductController@update')->name('products.update');

Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::delete('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');

