@extends('layouts.master')

@section('title')
Login   
@endsection

@section('description')
Login to start following the latest African music, art and style  
@endsection

@section('styles')
    
@endsection

@section('content')
<div class="container-fluid bg-image">
    <div class="row">
        <div class="login-wraper">
            <div class="hidden-xs">
                <img src="/images/login.jpg" alt="">
            </div>
            <div class="banner-text hidden-xs">                
            </div>
            <div class="login-window">
                <div class="l-head">
                    Log In
                </div>
                <div class="l-form">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <label class="checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="arrow"></span>
                                </label> <span>Remember me on this computer</span>
                                <span class="text2">(not recomended on public or shared computers)</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-7"><button type="submit" class="btn btn-cv1">Login</button></div>
                            <div class="hidden-xs">
                                <div class="col-lg-1 ortext">or</div>
                                <div class="col-lg-4 signuptext"><a href="{{ route('register') }}">Sign Up</a></div>
                            </div>
                        </div>
                        <div class="row hidden-xs">
                            <div class="col-lg-12 forgottext">
                                <a href="{{ route('password.request') }}">Forgot Username or Password?</a>
                            </div>
                        </div>
                        <div class="row visible-xs">
                            <div class="col-xs-6">
                                <div class="forgottext"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                            </div>
                            <div class="col-xs-6"><div class="signuptext text-right"><a href="{{ route('register') }}">Sign Up</a></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection
