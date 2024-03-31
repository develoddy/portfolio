<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lujandev') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <meta name="description" content="">

        <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/imgs/favicon.ico') }}">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/animate.min.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/swiper.min.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/slick.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/fontawesome-pro.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/hover-reveal.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/icomoon.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/spacing.css')}}">
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/main.css')}}">

    </head>

    <body>

        <!-- Preloader start -->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!-- Preloader start -->

        <!-- Backtotop start -->
        <div class="backtotop-wrap cursor-pointer">
            <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Backtotop end -->

        <!-- Offcanvas area start -->
        <div class="fix">
            <div class="offcanvas__area">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="{{ Vite::asset('resources/imgs/logo/logo.svg') }}" alt="logo not found">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button class="offcanvas-close-icon animation--flip">
                                    <span class="offcanvas-m-lines">
                            <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="mobile-menu fix"></div>
                        <div class="offcanvas__social">
                            <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                            <div class="theme__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="icon-twiter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                        <div class="offcanvas__btn">
                            <div class="header__btn-wrap">
                                <a class="bd-btn is-btn-anim" href="#">
                                    <span class="bd-btn-inner"><span class="bd-btn-normal">Purchase now</span>
                                    <span class="bd-btn-hover">Purchase now</span>
                                    <i class="contentHidden"></i>
                                    </span>
                                </a>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>
        <div class="offcanvas__overlay-white"></div>
        <!-- Offcanvas area end-->

        @include('layouts.navigation')
        @yield('content')

        @include('layouts.footer')

        <!-- JS here -->
        <script src="{{ Vite::asset('resources/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/waypoints.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/meanmenu.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/swiper.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/slick.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/wow.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/magnific-popup.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/isotope.pkgd.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/vanilla.tilt.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/counterup.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/nice-select.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/jquery-ui.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/hover-reveal.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/tween-max.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/parallax.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/parallax-scroll.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/plugins/jarallax.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/ajax-form.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/vendor/js_circle-progress.min.js')}}"></script>
        <script src="{{ Vite::asset('resources/js/main.js')}}"></script>  
    </body>
</html>