@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Daftar Pegawai</h1>




<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))



<div class="alert alert-info">{{ Session::get('message') }}</div>



@endif




<table class="table table-striped table-bordered">



<thead>



<tr>



<td>ID</td>






<td>Nama</td>






<td>Email</td>






<td>Level</td>






<td>Actions</td>



</tr>



</thead>






<tbody>
    @foreach($pegawai as $key => $value)



<tr>



<td>{{ $value->id }}</td>






<td>{{ $value->nama }}</td>






<td>{{ $value->email }}</td>






<td>{{ $value->level }}</td>




            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->



<td>
                <a class="btn btn-small btn-success" href="{{ URL('pegawai/' . $value->nama .'/'. $value->id) }}">Tampilkan Data</a>

                <a class="btn btn-small btn-warning" href="{{ URL('pegawai/' . $value->id . '/edit') }}">Ubah Data</a>


                <a class="btn btn-small btn-warning" href="{{ URL('pegawai/'.encrypt($value->id)) }}">Ubah Data</a>

                {!! Form::open(['url' => 'pegawai/' . $value->id, 'class' => 'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

</td>



</tr>



    @endforeach
</tbody>



</table>




</div>



</div>



@stop