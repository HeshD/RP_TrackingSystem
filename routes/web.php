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

Route::get('/new', function () {
    return view('home');
});

Route::get('/',function(){
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/track',function(){
    return view('trackletter');
});


Route::get('/addpm',function(){
    return view('users/postmaster/addpm');
});

Route::get('/deletepm',function(){
    return view('users/postmaster/deletepm');
});

Route::get('/dash',function(){
    return view('backend/layouts/dashboard');
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::get('dashboard','AdminController@dashboard');
});

Auth::routes();

Route::get('/homenew', 'HomeController@index')->name('homenew');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addpostmaster','PostmasterController@store');
