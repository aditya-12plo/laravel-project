@extends('admin.layouts.app')

@section('main-content')




<div class="row">
<div class="col-md-6">
<form method="POST" name="post1" id="post1" action="{{ url('admin/settings') }}" enctype="multipart/form-data">
 {{ csrf_field() }}
  <div class="form-group" align="center">
<strong><h3>PROFIL</h3></strong>
</div>

  <div class="form-group">
    <label for="nama">Nama</label>
  {{ Form::text('nama', Auth::guard('admins')->user()->nama , ['class' => 'form-control', 'maxlength' => 255,'placeholder' => 'Nama Lengkap Anda','required']) }}
  </div>

  <div class="form-group">
    <label for="email">Email</label>
  {{ Form::email('email', Auth::guard('admins')->user()->email , ['class' => 'form-control', 'placeholder' => 'Email Anda','disabled']) }}
 </div>

  <div class="form-group">
    <label for="tlp">Handphone</label>
     {{ Form::number('tlp', Auth::guard('admins')->user()->tlp , ['class' => 'form-control', 'maxlength' => 9,'placeholder' => 'No Tlp','required']) }}
  </div>

  <div class="form-group">
    <label for="email">Foto</label>
 <img src="{{ asset('uploads/Fusers/'.Auth::guard('admins')->user()->foto) }}" width="200" height="200"><br>
   {{ Form::file('gambar' , ['class' => 'form-control']) }}
	 
 </div>


  <button type="submit" class="btn btn-primary">Send invitation</button>
</form>

</div>

<div class="col-md-6">
<div class="form-group" align="center">
<strong><h3>RUBAH PASSWORD</h3></strong>
</div>
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/resetPassword') }}">
                        {{ csrf_field() }}
  <div class="form-group">
    <label for="password1">Password</label>
<input id="password1" type="password" class="form-control" name="password" required>
  </div>  

  <div class="form-group">
    <label for="password_confirm">Ulangi Password</label>
<input id="password_confirm" type="password" class="form-control" name="password_confirm" required>
  </div>

<button type="submit" class="btn btn-primary">
                                    Rubah Password
                                </button>
</form>
</div>

</div>




@endsection
