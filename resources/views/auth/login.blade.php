@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('UserviewCss/login.css')}}">
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
<div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
</div>
<form id="Login" method="POST" action="{{ route('login') }}">
            @csrf
<div class="form-group">
    <input type="email" class="form-control" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="inputEmail" placeholder="Email Address">
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
    <div class="form-group">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="inputPassword" placeholder="Password">
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="forgot">
            <a href="{{ route('password.request') }}">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>
</div>
</div>
</body>
@endsection
