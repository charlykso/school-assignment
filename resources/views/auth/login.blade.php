@extends('layouts.auth_layout')
@section('content')
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
                
    <div class="brand-logo">
        <img src="{{ asset('landing/images/cropped-funai_Logo-1.png')}}" alt="logo">
    </div>
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>

                        
    <form class="pt-3"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" 
            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="exampleInputEmail1" placeholder="Username">
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" 
            required autocomplete="current-password" id="exampleInputPassword1" placeholder="Password">
            
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                SIGN IN
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
            <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input">
                Keep me signed in
            </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
        <div class="mb-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
            <i class="ti-facebook mr-2"></i>Connect using facebook
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="{{ url('register')}}" class="text-primary">Create</a>
        </div>
    </form>
</div>
@endsection
