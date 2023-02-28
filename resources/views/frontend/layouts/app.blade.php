<!doctype html>
<html lang="zxx">
    <!-- Mirrored from templates.envytheme.com/zust/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 18:13:03 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Laravel') }} Social Network</title>

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/remixicon.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/simplebar.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/metismenu.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/dark.css">
		<link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/responsive.css">
        <link rel="stylesheet" href="{{asset('public/admin/css/toastr.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

        <link rel="icon" type="image/png" href="{{ asset('public/frontend') }}/assets/images/favicon.png">

        @stack('styles')
    </head>

    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content-wrapper d-flex flex-column">
            <!-- Start Navbar Area -->
            @include('frontend.layouts.top-nav.top-navbar')
            <!-- End Navbar Area -->

            <!-- Start Sidemenu Area -->
            @include('frontend.layouts.left-sidebar')
            <!-- End Sidemenu Area -->

            <!-- Main Content -->
            @yield('content')
            <!-- Main Content -->

            <!-- Start Right Sidebar Area -->
            @include('frontend.layouts.right-sidebar')
            <!-- End Right Sidebar Area -->
        </div>
        <!-- End Main Content Wrapper Area -->

        <!-- Start Copyright Area -->
        <div class="copyrights-area">
            <div class="container">
                <div class="row align-items-center">
                    <p><i class="ri-copyright-line"></i> <script data-cfasync="false" src="../../cd n-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Zust. All Rights Reserved by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Links of JS files -->
        <script src="{{ asset('public/frontend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/jquery-ui.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/simplebar.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/metismenu.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/wow.min.js"></script>
        <script src="{{ asset('public/frontend') }}/assets/js/main.js"></script>
        <script src="{{asset('public/admin/js/toastr.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

        @stack('scripts')
    </body>

<!-- Mirrored from templates.envytheme.com/zust/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 18:13:26 GMT -->
</html>
