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
    return view('home', ['title'=>'Clubfunder']);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', function () {
    return view('profile',['title'=>'profile']);
});

Route::get('/signin',function(){
return view('login');

});

Route::get('/signup', function(){
return view('register');
});
Route::post('signup', 'UserController@create');
Route::post('signin', function(){
return view('profile',['title'=>'profile']);
});
