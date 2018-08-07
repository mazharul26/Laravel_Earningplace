@extends('layouts.app')

@section('content')
 


<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    </div>

    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Login</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <input id="email" type="email" class="user{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email"  required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif


                        <input id="password" type="password" class="lock{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" required>  
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif

                        <div class="forgot-grid">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                            <div class="forgot">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        <div class="registration">
                            Don't have an account ?
                            <a class="btn btn-dark" href="{{url('/register')}}">
                                Create an account
                            </a>
                        </div>
                         <br/><br/>
                         <a href="{{url('/login/facebook')}}"><img src="{{asset('public/images/facebook.jpg')}}" ></a>
                    </form>
                    <br/><br/>
                    
                </div>
            </div>

        </div>
    </div>
    <!--footer-->
   
<div class="footer">
    <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Fiverr</a></p>
</div>
    <!--//footer-->
</div>

<!-- side nav js -->
<script src='{{url('/')}}/public/fontenddash/js/SidebarNav.min.js' type='text/javascript'></script>
<script>
$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- Classie --><!-- for toggle left push menu script -->
<script src="{{url('/')}}/public/fontenddash/js/classie.js"></script>
<script>
var menuLeft = document.getElementById('cbp-spmenu-s1'),
showLeftPush = document.getElementById('showLeftPush'),
body = document.body;

showLeftPush.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(body, 'cbp-spmenu-push-toright');
classie.toggle(menuLeft, 'cbp-spmenu-open');
disableOther('showLeftPush');
};

function disableOther(button) {
if (button !== 'showLeftPush') {
classie.toggle(showLeftPush, 'disabled');
}
}
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="{{url('/')}}/public/fontenddash/js/jquery.nicescroll.js"></script>
<script src="{{url('/')}}/public/fontenddash/js/scripts.js"></script>
<!--//scrolling js-->

<!-- Bootstrap Core JavaScript -->
<script src="{{url('/')}}/public/fontenddash/js/bootstrap.js"></script>
<!-- //Bootstrap Core JavaScript -->

@endsection
