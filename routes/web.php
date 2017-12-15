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
<<<<<<< HEAD
<<<<<<< HEAD

    //$users = DB::table('users')->where('email', '=', 'john@hotmail.com')->get();
=======
>>>>>>> MyBranch
=======
>>>>>>> 191d8a38bc8541dfb3a704e6e5f6aaa5d0ef7030
    
    return view('welcome');
    
});

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('about', function(){
    return view('about');
});

=======
=======
>>>>>>> 191d8a38bc8541dfb3a704e6e5f6aaa5d0ef7030
Route::get('/forum', function(){

    $categories = App\Categories::all();

    return view('forum',compact('categories'));

});

<<<<<<< HEAD

>>>>>>> MyBranch
=======
>>>>>>> 191d8a38bc8541dfb3a704e6e5f6aaa5d0ef7030
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
