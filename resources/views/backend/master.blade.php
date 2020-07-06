<!doctype html>
<html class="no-js" lang=""><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/jquery.dataTables.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/datepicker.min.css">
    {{-- Toster --}}
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/css/toastr.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/backend')}}/style.css">
    <!-- Modernize js -->
    <script src="{{asset('public/assets/backend')}}/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        @include('backend.headermenu')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                @include('backend.sidebar')
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
            <!-- Contentainer Area Start Here -->  
              @yield('content')
            <!-- Contentainer Area end Here -->    
            <!-- Footer Area Start Here -->
            <footer class="footer-wrap-layout1">
                <div class="copyright">© Copyrights <a href="https://www.facebook.com/sahadatjh">Sahadat Hossain</a> 2019. All rights reserved. Designed by <a href="https://www.facebook.com/sahadatjh">Sahadat</a></div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="{{asset('public/assets/backend')}}/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="{{asset('public/assets/backend')}}/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="{{asset('public/assets/backend')}}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/assets/backend')}}/js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="{{asset('public/assets/backend')}}/js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="{{asset('public/assets/backend')}}/js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('public/assets/backend')}}/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('public/assets/backend')}}/js/jquery.scrollUp.min.js"></script>
    <!-- Full Calender Js -->
    <script src="{{asset('public/assets/backend')}}/js/fullcalendar.min.js"></script>
    <!-- Chart Js -->
    <script src="{{asset('public/assets/backend')}}/js/Chart.min.js"></script>
    <!-- Data Table Js -->
    <script src="{{asset('public/assets/backend')}}/js/jquery.dataTables.min.js"></script>
    <!-- Select 2 Js -->
    <script src="{{asset('public/assets/backend')}}/js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="{{asset('public/assets/backend')}}/js/datepicker.min.js"></script>
    {{-- Toster --}}
    <script type="text/JavaScript" src="{{asset('public/assets/backend')}}/js/toastr.min.js" ></script>
    {{-- Handlebars js --}}
    <script type="text/JavaScript" src="{{asset('public/assets/backend')}}/js/handlebars.min.js" ></script>
    {{-- Page script --}}
    @yield('script')
    <!-- Custom Js -->
    <script src="{{asset('public/assets/backend')}}/js/main.js"></script>
    
{{-- Code for delete button --}}
<script type="text/javascript">
    function check_delete(){
        var chk = confirm("Are you sure DELETE this???");
        if (chk) {
        return true;
        } else {
        return false;
        }
    }
</script>
<!--code for show image when select-->
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}
$("#imgInp").change(function() {
    readURL(this);
});
</script>

{{-- code for Toster --}}
<script type="text/javascript">
    @if (Session::has('success')) 
      toastr.success("{{ Session::get('success')}}");
    @elseif(Session::has('error'))
      toastr.error("{{ Session::get('error')}}");
    @elseif(Session::has('info'))
      toastr.info("{{ Session::get('info')}}");
    @elseif(Session::has('warning'))
        toastr.warning("{{ Session::get('warning')}}");
    @endif
</script>

</body>
</html>