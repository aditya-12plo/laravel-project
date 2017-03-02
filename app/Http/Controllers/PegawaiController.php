<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePegawaiRequest;
use App\Http\Controllers\Controller;
use App\Pegawai;
use Request;
use Response;
use View;


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


public function show($nama,$id)
	{
		$pegawai = Pegawai::find($id);
if ($pegawai === null) {
return redirect('pegawai')->with('message', 'Data Yang Anda Masukan TIdak Ada!');   
}
else
{

return view('pegawai.show', compact('pegawai'));	

}
        
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
