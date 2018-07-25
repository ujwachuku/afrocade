@extends('layouts.master')

@section('title')
Sign up  
@endsection

@section('description')
Sign up to start following the latest African music, art and style  
@endsection

@section('styles')
    
@endsection


@section('content')
<div class="container-fluid bg-image">
    <div class="row">
        <div class="login-wraper">
            <div class="hidden-xs">
                <img src="/images/login.jpg" alt="{{ config('app.name') }}">
            </div>
            <div class="banner-text hidden-xs">                            
            </div>
            <div class="login-window">
                <div class="l-head">
                    <b>Sign Up</b>
                </div>
                <div class="l-form">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
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
                        <div class="form-group">
                            <label for="password">Confirm password</label>
                            <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-7"><button type="submit" class="btn btn-cv1">Sign Up</button></div>     
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
