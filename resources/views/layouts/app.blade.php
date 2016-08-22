<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>@yield('title')</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/themify-icons/themify-icons.min.css') }}">
        <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/theme-6.css')}}"> <!-- id="skin_color"-->

        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css')}}">
        @yield('styles')
        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <body>
        <div id="app">
            <!-- sidebar -->
            @include('layouts.sidebar')
            <!-- / sidebar -->
            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                @include('layouts.header-navbar')
                <!-- end: TOP NAVBAR -->
                <div class="main-content" >
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    @yield('section-title')
                                    @yield('section-description')
                                </div>
                            </div>
                        </section>
                        <!-- end: PAGE TITLE -->
                        <!-- start: YOUR CONTENT HERE -->
                        @yield('content')
                        <!-- end: YOUR CONTENT HERE -->
                    </div>
                </div>
            </div>
            <!-- start: FOOTER -->
            @include('layouts.footer')
            <!-- end: FOOTER -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>
        <script src="{{asset('vendor/jquery-cookie/jquery.cookie.js')}}"></script>
        <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('vendor/switchery/switchery.min.js')}}"></script>
        
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('vendor/vue/vue.min.js')}}"></script>
        <script src="{{asset('vendor/vue/vue-resource.min.js')}}"></script>
        <script src="{{asset('vendor/vue/vue-table.min.js')}}"></script>
        {{-- <script src="{{ asset('vendor/app.js')}}"></script> --}}
        <!-- start: JavaScript Event Handlers for this page -->
        <script>
        jQuery(document).ready(function() {
            Main.init();
        });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
        @yield('scripts');
    </body>
</html>