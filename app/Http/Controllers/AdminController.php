<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth, Validator, Redirect,Response,View, Hash;
use Illuminate\Support\Facades\Input; 
use App\User;


class AdminController extends Controller
{
     	public function index()
	{

if (Auth::check())
{
    // The user is logged in...
echo 'ok';
}
else
{
$page =array('title' => 'Login Administrator');
$data = array('page' => $page);
return view('admin.login')->with($data);
}

	}


//login script 
function dologin()
{
// validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return Redirect::to('administrator')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} 
else {

    // create our user data for the authentication
    $token = Input::get('_token');
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );



    // attempt to do the login
    if (Auth::attempt($userdata)) {
/*
$ss = Hash::make('marketing');
echo $ss;
*/
$user = Auth::user();
$posisi = $user->level;
if($posisi == 1)
{
Auth::guard('admin');
return Redirect::to('admin/dashboard');
}
elseif($posisi == 2)
{
return Auth::guard('marketing');
}

    } else {        

        // validation not successful, send back to form 
        return Redirect::to('administrator');
}



}
}


//Logout script 
function dologout()
{
Auth::logout(); // log the user out of our application
return Redirect::to('administrator'); // redirect the user to the login screen}
}





}
