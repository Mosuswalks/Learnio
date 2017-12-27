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

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{posts}', 'PostsController@show');
Route::get('/posts', 'PostsController@index');
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{category}', 'CategoriesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
