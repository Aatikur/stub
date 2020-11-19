<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>STUPS PRINTING- Innovation In Print.</title>
    <!-- mobile responsive meta -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">
</head>
<body class="active-preloader-ovh">
    <div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->
    <header class="header-404 text-center" style="padding: 20px 0">
        <div class="thm-container">
            <a href="index-2.html" class="logo">
                <img src="{{asset ('web/img/logo.png') }}" alt="Awesome Image" style="width: 20%;"/>
            </a>
        </div><!-- /.thm-container -->
    </header><!-- /.header-404 -->
    <section class="content-404 text-center sec-pad">
        @if($status==1)
            <div class="thm-container">
                <h2>Thank You! Your Message has been send</h2>
                <p>Please go back to home.</p>
                <a href="{{ route('web.index') }}" class="thm-btn">Go Back To Home</a>
            </div>
        @else<!-- /.thm-container -->
            <div class="thm-container">
                <h2 style="color:red">Oop! we encounter a problem</h2>
                <p>Please go back and resend your message.</p>
                <a href="{{ route('web.contact.contact') }}" class="thm-btn">Go Back To Home</a>
            </div><!-- /.thm-container -->
        @endif
    </section><!-- /.content-404 -->
    <script src="{{ asset('web/js/jquery.js')}}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('web/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('web/js/isotope.js')}}"></script>
    <script src="{{ asset('web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('web/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('web/js/wow.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('web/js/custom.js')}}"></script>
</body>

</html>