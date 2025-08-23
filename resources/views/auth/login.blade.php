@extends('layouts.login')

@section('content')

<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="login-box-body">

    <div class="home-btn">
      <a href="{{ route('Home') }}">HOME</a>
    </div>

    <div class="login-logo">
        <img src="{{ asset('common/img/logo.png') }}">
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
        </div>
    @endif

    <form  method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input id="password" type="password" class="form-control" name="password" required placeholder=" Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>


      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-block btn-flat">Login</button>
        </div>

      </form>
        <!-- /.col -->
        <div class="col-xs-12">
          <a href="{{ url('register') }}" class="btn btn-block btn-flat">Register</a>
        </div>
        <!-- /.col -->
      </div>
    
    <a href="{{ route('password.request') }}"> Forgot Your Password?</a>

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>

@endsection
