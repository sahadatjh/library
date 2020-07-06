<!doctype html>
<html class="no-js" lang=""><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IBIT | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token copy from laravel default installation-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/backend')}}/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/animate.min.css">
    <!-- Scripts copy from laravel default installation-->
    {{-- <script src="{{ asset('public/js/app.js') }}" defer></script> --}}
    <!-- Styles copy from laravel default installation-->
    {{-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> --}}
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/style.css">
    <!-- Modernize js -->
    <script src="{{asset('public/assets/backend')}}/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{asset('public/assets/backend')}}/img/logo2.png" alt="logo">
                </div>
                
                @yield('form')


            </div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="{{asset('public/assets/backend')}}/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="{{asset('public/assets/backend')}}/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="{{asset('public/assets/backend')}}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/assets/backend')}}/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('public/assets/backend')}}/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="{{asset('public/assets/backend')}}/js/main.js"></script>
</body>
</html>