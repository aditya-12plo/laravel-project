<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth, Validator, Redirect,Response,View, Hash;
use Illuminate\Support\Facades\Input; 
use App\Pegawai;



class AdministratorController extends Controller
{
       	public function index()
	{

		 // ambil semua data pegawai
$pegawai = Pegawai::latest('created_at')->get();
        return view('pegawai.admin', compact('pegawai'));
	}


}
