<?php
/*
Route::get('/', function () {
    return view('welcome');
});
//Route::resource('pegawai', 'PegawaiController');


// route for administrator and marketing
Route::get('administrator', 'AdminController@index');
Route::post('dologin', ['as' => 'dologin', 'uses' => 'AdminController@dologin']);
Route::get('dologout', ['as' => 'dologout', 'uses' => 'AdminController@dologout']);

//route group if admin login
Route::group(array('guard' => 'admin','before' => 'auth', 'except' => array('/administrator/login')), 
	function() {
    Route::resource('/admin/dashboard', 'AdministratorController');
});


//route group if marketing login
Route::group(array('guard' => 'marketing','before' => 'auth', 'except' => array('/administrator/login')), 
	function() {
    Route::resource('/marketing/dashboard', 'PegawaiController');
});
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
});


