<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Log in</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminLTE/plugins/iCheck/square/blue.css') }}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('images/angkringan.jpg') }}" width="200">
  </div>

  <div class="">
    <p class="login-box-msg">Register</p>

    <form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-feedback">
        <input type="name" class="form-control" placeholder="Input nama " name="name" value="{{ old('name') }}" required autofocus>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email addres" name="email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
      </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <div class="social-auth-links text-center">
    <p>- OR -<p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
    facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-facebook"></i> Sign up using
    Google</a>
    
    <a href="{{route('password.request')}}">Saya Lupa password</a><br>
    <a href="{{route('login')}}" class="text-center">Saya sudah punya akun</a><br>
    







      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>

      </div>
    </form>

  </div>

</div>

<script src="{{ asset('adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminLTE/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' 
    });
  });
</script>
</body>
</html>
