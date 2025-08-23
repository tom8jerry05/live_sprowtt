@extends('layouts.login')

@section('content')
<div class="register-box">
    <div class="register-box-body">
        <div class="home-btn">
            <a href="{{ route('Home') }}">HOME</a>
        </div>
        <div class="register-logo">
            <img src="{{ asset('common/img/logo.png') }}">
        </div>
        <p class="login-box-msg">Register a new membership</p>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>


            <div class="form-group has-feedback">
                <select id="role" type="role" class="form-control" name="role" placeholder="Role" required>
                    <option value="" selected disabled>Select a Role</option>
                    <option value='4'>Team Leader</option>
                    <option value='5'>Team Member</option>
                    <option value='6'>Judge</option>
                </select>
                <span class="glyphicon glyphicon-cog form-control-feedback"></span>
                @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-block btn-flat">Register</button>
                </div>
                <div class="col-xs-12">
                    <a href="{{ route('login') }}" class="btn bg-navy btn-block btn-flat">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
