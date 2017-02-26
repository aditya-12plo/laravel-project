@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Buat Data Baru</h1>




<!-- jika terjadi error, maka akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::open(array('route' => 'pegawai.store','method'=>'POST')) !!}



<div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
</div>







<div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'masukan email']) !!}
</div>







<div class="form-group">
        {!! Form::label('level', 'Level') !!}
        {!! Form::select('level', [' ' => 'Pilih Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>



<div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>
	</div>

	  {!! Form::close() !!}

@endsection