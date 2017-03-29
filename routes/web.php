<?php
/*
Route::get('/', function () {
    return view('welcome');
});
Route::resource('pegawai', 'PegawaiController');
*/


Route::resource('pegawai', 'PegawaiController');

Route::get('/', function () {
    $password = bcrypt('Warakas1');
       $data = array('pass' => $password);
        return view('welcome')->with($data);
   # return view('welcome');
});

// route for administrator
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::get('password/resetnya/{token}', 'Auth\PasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('beranda', 'HomeController@index');
    Route::get('settings', 'HomeController@profil');
    Route::post('settings', 'HomeController@updateprofil');
    Route::post('resetPassword', 'HomeController@resetPassword');
    Route::get('team', 'HomeController@team');
    Route::get('teamlist', 'HomeController@teamlist');
    Route::get('team', 'HomeController@teamlist');
});


