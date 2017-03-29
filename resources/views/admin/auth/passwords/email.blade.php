@extends('admin.layouts.app_login')

@section('content')
<div class="login-box-body">
    <p class="login-box-msg"><h2 align="center">Reset Password</h2></p>
<br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong><br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

 <form role="form" method="POST" name="post1" id="post1" action="{{ url('admin/password/email') }}">
      
       {{ csrf_field() }}

      <div class="form-group has-feedback">
        {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email','required']) }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       <font color="red"> {{ $errors->first('email') }}</font>
      </div>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat"> Kirim Link Reset Password</button>
        </div>
        <!-- /.col -->
      </div>
</form>

<br>
    <a href="{{ url('/admin') }}">
                                    Login
                                </a>

  </div>
  <!-- /.login-box-body -->
@endsection




