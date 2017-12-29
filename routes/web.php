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
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/create', 'PostsController@create')->middleware('auth');
Route::get('/categories', 'CategoriesController@index')->middleware('auth');
Route::get('/categories/{category}', 'CategoriesController@show');

Route::post('/posts', 'PostsController@store');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
