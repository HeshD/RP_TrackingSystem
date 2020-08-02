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
    return view('index');
});

Route::group(['middleware'=>['auth','Administrator']], function(){
    Route::get('/dashboard',function(){
    return view('backend/layouts/dashboard');
    });
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
    if(!Gate::allows("isAdmin")){
        abort(404,"Sorry, You cannot do this action");
    }

    return view('users/postmaster/addpm');
});

Route::get('/deletepm',function(){
   
    //$search=$request;

    //$data=App\User::where('email','like','%'.$search.'%');

    return view('users/postmaster/deletepm');
});



//Route::prefix('/admin')->namespace('Admin')->group(function(){
  //  Route::get('dashboard','AdminController@dashboard');
//});

//Auth::routes();

//Route::get('/homenew', 'HomeController@index')->name('homenew');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addpostmaster','PostmasterController@store');

Route::get('/searchpm','SearchController@searchuser');

Route::get('/deletepm/{id}','PostmasterController@delete');

Route::get('/editpm','SearchController@userdetails');


Route::get('/updatepm/{id}','PostmasterController@updateview');

Route::post('/updatepostmaster/{id}','PostmasterController@update');

Route::get('/add_branch',function(){
    return view('Branch/add_branch');
});

Route::get('/location',function(){
    return view('location');
});

Route::post('/addpostoffice','BranchController@store');

Route::get('/brdetails','BranchController@view');

Route::get('/deletebr/{id}','BranchController@delete');

Route::get('/d_req',function(){
    return view('letter.deliveryrequest');
});

Route::post('/delreq','LetterController@store');

Route::get('/printpreview','PrintController@print');

