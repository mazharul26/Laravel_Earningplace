@extends('layouts.app')

@section('content')

<div id="page-wrapper">
    <div class="main-page signup-page">
        <h2 class="title1">SignUp Here</h2>
        <div class="sign-up-row widget-shadow">
            <h5>Personal Information :</h5>
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="registration" enctype="multipart/form-data">
                @csrf
                <div class="sign-u">
                    <label for="name" class="">{{ __('Name') }}</label>
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder=" Name" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>Gender* :</h4>
                    </div>
                    <div class="sign-up2">
                        <label>
                            <input type="radio" name="gender" value="male" required>
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender"  value="female" required>
                            Female
                        </label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <h6>Login Information :</h6>
                <div class="sign-u">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required>
                </div>
                <div class="clearfix"> </div>
                
                  <div class="sign-u">
                      <input id="" type="file" class="" name="picture" required>
                </div>
                <br/><br/>
                <div class="sign-u">
                    <div class="g-recaptcha" data-sitekey="6LfWAGMUAAAAAO44JociLW_SsqZO4QV_MvzRs8Qf"></div>
                </div>
                <div class="sub_home">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <div class="clearfix"> </div>
                </div>
                <div class="registration">
                    Already Registered.
                    <a class="" href="{{url('/login')}}">
                        Login
                    </a>
                </div>
               
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Fiverr</a></p>
</div>
@endsection
