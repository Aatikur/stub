<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>STUPS PRINTING- Innovation In Print.</title>
    <!-- mobile responsive meta -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('web/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('web/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('web/img/favicon/favicon-96x96.png')}}">
    @yield('seo')
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('web/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('web/img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/lightbox.min.css')}}">
</head>
<body class="active-preloader-ovh">

    <div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->

    <header class="header home-page-one">
        <nav class="navbar navbar-default header-navigation stricky stricky-fixed">
            <div class="thm-container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('web.index')}}">
                        <img src="{{asset('web/img/logo.png')}}" alt="Awesome Image"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                    
                    <ul class="nav navbar-nav navigation-box">
                        <li><a href="{{route('web.index')}}">Home</a></li>
                        <li><a href="{{route('web.about.about')}}">About</a></li>
                        <li><a href="{{route('web.product.product')}}">Product</a></li>
                        <li><a href="{{route('web.gallery.gallery')}}">Portfolio</a></li>
                        <li><a href="{{route('web.contact.contact')}}">Contact</a> </li>
                    </ul>   
                </div><!-- /.navbar-collapse -->
                <div class="right-side-box">
                    <div class="social"><a href="https://www.instagram.com/stupsprinting" target="_blank" class="fab fa-instagram hvr-pulse"></a><!--  
                        --><a href="https://www.facebook.com/stupsprinting.printing.7/" target="_blank" class="fab fa-facebook-f hvr-pulse"></a>
                    </div><!-- /.social -->
                </div><!-- /.right-side-box -->
            </div><!-- /.container -->
        </nav>   
    </header><!-- /.header -->