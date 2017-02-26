@extends('layouts.master')
@section('content')




<div class="row">



<div class="col-lg-12">




<h1>Edit {{ $pegawai->nama }}</h1>




<!-- jika terjadi error, akan menampilkan pesan -->
@if ($errors->any())



<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)



	<li>{{ $error }}</li>



        @endforeach
</ul>



@endif

{!! Form::model($pegawai, ['route' => ['pegawai.update', $pegawai->id], 'method' => 'PUT']) !!}




<div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>







<div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>







<div class="form-group">
        {!! Form::label('level', 'Level') !!}
        {!! Form::select('level', [' ' => 'Select a Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>




    {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>



</div>



@stop