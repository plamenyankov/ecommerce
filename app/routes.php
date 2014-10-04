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
Route::get('/categories/{id}', 'StoreController@showByCategory');
Route::get('/store/search', 'StoreController@search');

//Users
Route::get('/users/create','UsersController@create');
Route::get('/users/signin','UsersController@signIn');
Route::post('/users/signin','UsersController@postSignIn')->before('csrf');
Route::get('/users/signOut','UsersController@signOut');
Route::post('/users','UsersController@store')->before('csrf');

//Category Admin
Route::get('/admin/category', 'CategoriesController@index');
Route::delete('/admin/category', 'CategoriesController@destroy');
Route::post('/admin/category', 'CategoriesController@create')->before('csrf');

//Products Admin
Route::get('/admin/products', 'ProductsController@index')->before('admin');
Route::delete('/admin/products', 'ProductsController@destroy')->before('admin')->before('csrf');
Route::post('/admin/products', 'ProductsController@create')->before('admin')->before('csrf');
Route::post('/admin/products/toggle-availability', 'ProductsController@postToggleAvailability')->before('admin')->before('csrf');
