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

Route::get('/', function () {
    return view('parallax');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/home', 'FoodaUser\BaseController@loadDashboard');

//base user routes
Route::get('/testing','FoodaUser\BaseController@testname');
Route::get('/user','FoodaUser\BaseController@loadDashboard');
Route::get('/favorites/{foods}','FoodaUser\BaseController@addToFavorites','$foods');
Route::get('/viewfavorites/{foods}','FoodaUser\BaseController@loadDashboard','$foods');

//power account routes
Route::get('/store/myposts','FoodaUser\FoodsController@loadPostDashboard');
Route::get('/store/view','FoodaUser\FoodsController@loadPostView');
Route::get('/store/create','FoodaUser\FoodsController@createPostPage');
Route::post('/store/createpost','FoodaUser\FoodsController@createPost');

//admin account routes
Route::get('/view/users','FoodaUser\AdminController@viewAllUsers');
Route::get('/view/posts', 'FoodaUser\AdminController@viewAllPosts');
Route::get('/create/user_account','FoodaUser\AdminController@adminAdd');
Route::get('/create/power_account/{id}','FoodaUser\AdminController@createPowerAccount','$id');
Route::get('/view/stores','FoodaUser\AdminController@viewAllPowerAccounts');

//test routes
Route::get('/viewtest','FoodaUser\GuestController@index');
/*
Route::get('/testing/{name?}',function($name = 'comes'){ return $name; }); function(){return view('fooda\admin\dashboard-admin-posts');});
Route::get('/view/users',function(){return view('fooda\admin\dashboard-admin-view');});
Route::get('/user',function(){ return view('fooda\user\dashboard-user');});


