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


    //$users = DB::table('users')->where('email', '=', 'john@hotmail.com')->get();
    
    return view('welcome');
    
});


Route::get('about', function(){
    return view('about');
});

Route::get('/forum', function(){

    $categories = App\Categories::all();

    return view('forum',compact('categories'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
