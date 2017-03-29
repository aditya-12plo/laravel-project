<?php

namespace laravel\Http\Controllers;

use laravel\Http\Requests;
use laravel\Http\Requests\CreatePegawaiRequest;
use laravel\Http\Controllers\Controller;
use laravel\Pegawai;
use Request,Response,View,Input,Auth,Session,Validator,File;
use Crypt;


class PegawaiController extends Controller
{
   	public function index()
	{

		 // ambil semua data pegawai
$pegawai = Pegawai::latest('created_at')->get();
        return view('pegawai.index', compact('pegawai'));
	}


	public function create()
	{
		return view('pegawai.create');
	}


    public function show($id)
    {


echo $decrypted = decrypt($id);
    }


	public function edit($id)
	{
		$pegawai = Pegawai::find($id);

        return view('pegawai.edit', compact('pegawai'));
	}


	public function update($id)
	{
		$pegawaiUpdate = Request::all();
	    $pegawai = Pegawai::find($id);
	    $pegawai->update($pegawaiUpdate);
	    return redirect('pegawai')->with('message', 'Data berhasil dirubah!');
	}


public function destroy($id)
	{		
		Pegawai::find($id)->delete();

        return redirect('pegawai')->with('message', 'Data berhasil dihapus!');
	}


public function store(CreatePegawaiRequest $request)
	{
	    Pegawai::create($request->all());

	    return redirect('pegawai')->with('message', 'Data berhasil ditambahkan!');        	   	
	}
}
