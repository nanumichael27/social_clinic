<!doctype html>
<html lang="zxx">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="images/socialc-fav.png" />
    <meta property="og:title" content="Social Clinic" />
    <meta name="keywords" content="socilal, clinic, media, Platform, pay, advertise, links, Marketing, Platform, Increase, treat, online, presence ">
    <meta name="description" content="We treat all social media issues - Increase your social media presence through a Social Marketing Platform 
                                      with real Human involvement" />
    <!--====== TITLE TAG ======-->
    <title>Social Clinic - Treat all Social Media Issues </title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assets/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
        .white {
            color: #ffffff !important;
        }

        .white :hover {
            color: #000 !important;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area home3_top_area" id="home">
        <span class="floating triangle1"></span>
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div>
                        <div class="mainmenu-and-right-button">
                            <div id="main-nav" class="stellarnav">
                                <ul id="nav" class="nav navbar-nav">
                                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="#features"> Services </a></li>
                                    <li><a href="#about"> About Us </a></li>
                                    <li><a href="#news"> Blog </a></li>
                                    <li><a href="{{ route('contact') }}"> Contact </a></li>

                                    <li class="white inline-block read-more">
                                        <a class="white" href="{{ route('login') }}"> Login </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        @section('banner')

        @show
    </header>