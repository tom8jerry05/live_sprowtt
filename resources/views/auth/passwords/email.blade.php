@extends('layouts.login')

@section('content')
<div class="register-box">
    <div class="register-box-body">
        <div class="register-logo">
            <img src="{{ asset('common/img/logo.png') }}">
        </div>
        <p class="login-box-msg">Reset Password</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-block btn-flat"> Send Reset Link</button>
                </div>
                <div class="col-xs-12">
                    <a href="{{ route('login') }}" class="btn bg-navy btn-block btn-flat">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
