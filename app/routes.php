<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//
Route::get('/', 'StoreController@index');
Route::get('/{id}', 'StoreController@show');

//Category Admin
Route::get('/admin/category', 'CategoriesController@index');
Route::delete('/admin/category', 'CategoriesController@destroy');
Route::post('/admin/category', 'CategoriesController@create');

//Products Admin
Route::get('/admin/products', 'ProductsController@index');
Route::delete('/admin/products', 'ProductsController@destroy');
Route::post('/admin/products', 'ProductsController@create');
Route::post('/admin/products/toggle-availability', 'ProductsController@postToggleAvailability');