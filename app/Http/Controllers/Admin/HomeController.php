<?php

namespace laravel\Http\Controllers\Admin;

use laravel\Http\Controllers\Controller;
use laravel\User;
use laravel\Admins;
use Illuminate\Notifications\Notifiable;
use Request,Response,View,Input,Auth,Session,Validator,File;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
#use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $session;
    protected $flash;


    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #$marketing = DB::table('users')->get();

$marketing = User::latest('created_at')->get();
$data = array(
        'title'=>'Administrator',
        'pageheader'=>'Marketing Listing',
        'notif'=>'Halaman ini berfungsi untuk melihat grafik penjualan properti dan listing properti dari Marketing.'
        );

        return view('admin.home',compact('marketing'))->with($data);
    }


 function profil()
    {

$data = array(
        'title'=>'Administrator',
        'pageheader'=>'Setting Profil'
        );

        return view('admin.profil')->with($data);

    }

    function updateprofil()
    {
if (Auth::guard('admins')) {

    $gambar = Input::file('gambar');
if(isset($gambar))
{
//jika merubah foto profile
    $file = array('image' => Input::file('gambar'));
      // setting up rules
  $rules = array('image' => 'required|image|mimes:jpeg,png,jpg|max:2048',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
   return redirect('/admin/settings')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('gambar')->isValid()) {
      $destinationPath = 'uploads/Fusers/'; // upload path
      $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
      $fileName = Request::input('nama').'-'.time().'-'.rand(11111,99999).'.'.$extension; // renameing image
      $pindah = Input::file('gambar')->move($destinationPath, $fileName); // uploading file to given path
      File::delete($destinationPath . Auth::guard('admins')->user()->foto);
if(!$pindah)
{
Session::flash('error', 'Perubahan Profil Gagal');
  return redirect('/admin/settings');
}
else
{
$kode = Auth::guard('admins')->user()->id;
$admin = Admins::find($kode);
$admin->nama = Request::input('nama');
$admin->tlp = Request::input('tlp');
$admin->foto = $fileName;
$admin->save();
if(!$admin->save())
{
Session::flash('error', 'Perubahan Profil Gagal');
  return redirect('/admin/settings');
}
else
{
Session::flash('success', 'Perubahan Profil Berhasil');
  return redirect('/admin/settings');
}
}
    }
    else {
      // sending back with error message.
    Session::flash('error', 'Perubahan Profil Gagal');
  return redirect('/admin/settings');
    }
  }
} 
else
{
   //jika tidak merubah foto profil
$kode = Auth::guard('admins')->user()->id;
$admin = Admins::find($kode);
$admin->nama = Request::input('nama');
$admin->tlp = Request::input('tlp');
$admin->save();
if(!$admin->save())
{
Session::flash('error', 'Perubahan Profil Gagal');
  return redirect('/admin/settings');
}
else
{
Session::flash('success', 'Perubahan Profil Berhasil');
  return redirect('/admin/settings');
}

}
    }
    else
{
 return redirect('/');

}
}


function resetPassword()
{
   $data = Input::all();
   
  $rules = array('password' => 'min:6|required',
   'password_confirm' => 'required|min:6|same:password'); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($data, $rules);
if ($validator->passes()) {
$kode = Auth::guard('admins')->user()->id;
$admin = Admins::find($kode);
$admin->password = bcrypt($data['password']);
$admin->save();
if(!$admin->save())
{
Session::flash('error', 'Perubahan Password Gagal');
}
else
{
Session::flash('success', 'Perubahan Password Berhasil');
}
    }

        return back()->withInput()->withErrors($validator->messages());
 
   
}



function team()
{
$data = array(
        'title'=>'Administrator',
        'pageheader'=>'List Data Team FGD'
        );

return view('admin.team')->with($data);

/*
      return view('admin.teamlist',compact('marketing'))->with($data)->renderSections()['main-content'];
$view = View::make('admin.teamlist',compact('marketing'))->with($data);
return $view->renderSections()['content'];
*/
}

function teamlist()
{
$marketing = User::latest('created_at')->get();
 return view('admin.teamlist',compact('marketing'))->renderSections()['content'];

/*
      return view('admin.teamlist',compact('marketing'))->with($data)->renderSections()['main-content'];
$view = View::make('admin.teamlist',compact('marketing'))->with($data);
return $view->renderSections()['content'];
*/
}


}
