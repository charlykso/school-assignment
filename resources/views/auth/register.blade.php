@extends('layouts.auth_layout')

@section('content')
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo">
        <img src="{{ asset('landing/images/cropped-funai_Logo-1.png')}}" alt="logo">
    </div>
    <h4>New here?</h4>
    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
    <form class="pt-3" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" 
            name="first_name"  required autocomplete="first_name"  placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" 
            name="middle_name"  required autocomplete="middle_name"  placeholder="Middle Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" 
            name="last_name"  required autocomplete="last_name"  placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" 
            name="phone_number"  required autocomplete="phone_number"  placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" 
            name="matric_no"  required autocomplete="matric_no"  placeholder="Matric Number">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" required autocomplete="email"  placeholder="Email">
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" name="password" required autocomplete="password"  placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="password"  placeholder="Confirm Password">
            <small class="form-text" style="color: #e91e63">
                Your password must be 6 characters long.
            </small>
        </div>
        
        <div class="form-check-inline text-start" style="margin-bottom: 20px">
            <div class="col-sm-4">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Male" required>
                    Male
                </label>
            </div>
            </div>
            <div class="col-sm-5">
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Female" required>
                  Female
                </label>
            </div>
            </div>
            {{-- <input type="radio" class="form-check-input" name="gender" value="Male" required >
            <label for="Male" class="form-check-label">Male </label>
            <input type="radio" class="form-check-input" name="gender" value="Female" required >
            <label for="Female" class="form-check-label">Female</label> --}}
        </div><br>
        <div class="form-group">
            <input type="file" class="form-control" name="picture" required  placeholder="Profile Pic">
            <label for="picture" class="form-label">Profile Picture</label>
        </div>
        <div class="mb-4">
            <div class="form-check">
                <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input">
                I agree to all Terms & Conditions
                </label>
            </div>
        </div>
        <div class="mt-3">
            
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                SIGN UP
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="{{ url('login')}}" class="text-primary">Login</a>
        </div>
    </form>
</div>
@endsection
