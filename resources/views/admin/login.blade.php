<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title or "Administrator Login" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
   
<link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/skins/_all-skins.css') }}" rel="stylesheet" type="text/css" />

</head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="login-box-body">
    <p class="login-box-msg"><h2 align="center">Administrator</h2></p>
<br>

 <form role="form" method="POST" name="post1" id="post1" action="{{ url('admin/login') }}">
      
       {{ csrf_field() }}

      <div class="form-group has-feedback">
        {{ Form::email('email', 'admin@admin.com', ['class' => 'form-control', 'placeholder' => 'Email','required']) }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       <font color="red"> {{ $errors->first('email') }}</font>
      </div>
      <div class="form-group has-feedback">
        {{ Form::input('password', 'password', 'admin', ['class' => 'form-control', 'placeholder' => 'Password','required']) }}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      <font color="red"> {{ $errors->first('password') }} </font>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
</form>

<br>
    <a href="#">Lupa Password</a>

  </div>
  <!-- /.login-box-body -->



</div><!-- ./login-box -->

<script src="{{ asset('/js/app.js') }}"></script>


</body>
</html>