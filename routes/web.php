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

// Posts Routes
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/create', 'PostsController@create')->middleware('auth');

// Posts Edit and Update 
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/posts/{post}/edit', 'PostsController@update')->middleware('auth');

// Posts Delete/Destroy
Route::delete('/posts/{post}/delete', 'PostsController@destroy')->middleware('auth');


Route::get('/categories', 'CategoriesController@index')->middleware('auth');
Route::get('/categories/{category}', 'CategoriesController@show');
Route::post('/posts', 'PostsController@store');



Route::post('/posts/{post}/comments', 'CommentsController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
