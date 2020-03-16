@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="UserviewCss/register.css">
<div class="container">
   <div class="row main">
         <div class="main-login main-center">
                <h3>Register </h3>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group">
                             <label for="name" class="cols-sm-2 control-label">{{ __('Name') }}</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">{{ __('E-Mail Address') }}      </label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">{{ __('Password') }}</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                       <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">{{ __('Confirm Password') }}
                        </label>
                         <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>
                        </div>

                       <div class="form-group ">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
