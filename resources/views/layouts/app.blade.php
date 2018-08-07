<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
        <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | SignUp Page :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : 'null' }}">
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('/')}}/public/fontenddash/css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="{{url('/')}}/public/fontenddash/css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="{{url('/')}}/public/fontenddash/css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->

        <!-- side nav css file -->
        <link href='{{url('/')}}/public/fontenddash/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- side nav css file -->

        <!-- js-->
        <script src="{{url('/')}}/public/fontenddash/js/jquery-1.11.1.min.js"></script>
        <script src="{{url('/')}}/public/fontenddash/js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- Metis Menu -->
        <script src="{{url('/')}}/public/fontenddash/js/metisMenu.min.js"></script>
        <script src="{{url('/')}}/public/fontenddash/js/custom.js"></script>
        <link href="{{url('/')}}/public/fontenddash/css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script>

$(function () {
    $('#registration').submit(function (event) {
        var verified = grecaptcha.getResponse();
        if (verified.length === 0) {
            event.preventDefault();
        }
    });
});


</script>
</html>
