<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index', function(){
    return view::Make('pages.home');
});

Route::get('/', function () {
                if(Auth::guest()){
                    return view('auth.login');
                }else{
                    return view('pages.home');
                }
});