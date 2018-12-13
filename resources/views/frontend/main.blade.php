<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- Mirrored from ivang-design.com/thalia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 08:09:30 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Atul Traders</title>
    <meta name="description"  content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />


    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('css/datepicker.css')}}"/>--}}
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/colors/color.css')}}"/>

    <!-- Favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>
<body>

<div class="loader">
    <div class="loader__figure"></div>
</div>

<svg class="hidden">
    <svg id="icon-nav" viewBox="0 0 152 63">
        <title>navarrow</title>
        <path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z"/>
    </svg>
</svg>



@include('frontend.layout.header')
@include('frontend.layout.slider')
@include('frontend.partials.about')
@include('frontend.partials.products')
@include('frontend.partials.message')
@include('frontend.partials.contact')
@include('frontend.layout.footer')

<div class="scroll-to-top"></div>


<!-- JAVASCRIPT
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/flip-slider.js')}}"></script>
<script src="{{asset('js/reveal-home.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!-- End Document
================================================== -->
</body>

<!-- Mirrored from ivang-design.com/thalia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 08:09:30 GMT -->
</html>