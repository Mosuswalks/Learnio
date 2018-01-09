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


Route::get('/', function(){
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//---------- Categories get Routes ----------
Route::get('/categories', 'CategoriesController@index')->middleware('auth');
Route::get('/categories/{category}', 'CategoriesController@show');

//---------- Posts get Routes -----------
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/create', 'PostsController@create')->middleware('auth');

//----------- Posts post Routes -----------
Route::post('/posts', 'PostsController@store');

//----------- Posts Edit and Update Routes -----------
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/posts/{post}/edit', 'PostsController@update')->middleware('auth');

//----------- Posts Delete/Destroy Routes -----------
Route::delete('/posts/{post}/delete', 'PostsController@destroy')->middleware('auth');

//----------- Vote routes for Posts -----------
Route::get('/posts/{post}/votes', 'VotesController@getVotes');
Route::post('/posts/{post}/upvote', 'VotesController@upVote');
Route::post('/posts/{post}/downvote', 'VotesController@downVote');

// Comment routes for Posts
Route::post('/posts/{post}/comments', 'CommentsController@store');
