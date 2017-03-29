{{ $pass }}

depan

<a class="btn btn-small btn-warning" href="{{ URL('pegawai/edit/'.Session(['key' => $value->id])) }}">Ubah Data</a>

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



	