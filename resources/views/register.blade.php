<!doctype html>
<html lang="zxx">
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="images/favicon.png"/>
    <meta property="og:title" content="Social Clinic" />
    <meta name="keywords" content="socilal, clinic, media, Platform, pay, advertise, links, Marketing, Platform, Increase, treat, online, presence ">
    <meta name="description" content="We treat all social media issues - Increase your social media presence through a Social Marketing Platform 
                                      with real Human involvement" />
    <!--====== TITLE TAG ======-->
    <title>Social Clinic - Login </title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assets/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style> 
            .white {
                color:#ffffff !important; }
               
             .white :hover {
                 color: #000 !important;
             }
       </style>
</head>

<body class="single-page" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area single-page" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="mainmenu-and-right-button">
                            <div id="main-nav" class="stellarnav">
                                <ul id="nav" class="nav navbar-nav">
                                    <li class="active"><a href="{{ route('index') }}#home">Home</a></li>
                                    <li><a href="index.html#features">Service</a></li>
                                    <li><a href="index.html#about">About Us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="{{ route('contact') }}"> Contact </a></li>
                                    <li class="white inline-block read-more">
                                        <a class="white" href="{{ route('login') }}"> Login </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="page-barner-area">
			<!--<img src="assets/img/banner.jpg" alt="">--->
            <div class="area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="barner-text mt50 center">
                            <h1> REGISTER HERE </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--BLOG AREA-->
    <section>
        <div class="container">
            <div class="row"> 
                <div class="comment-box">
                    <form action="#">
                            <div class="col-md-12 col-xs-12 mt20 mb30"> 
                            <span>  I Already have an Account? <a href="{{ route('login') }}"> Login Here </a> </span>
                            </div>
                            <div class="col-md-6 col-xs-12 mb30">
                                <input name="comment_author" id="comment_author" type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-xs-12 mb30">
                                <input name="comment_email" id="comment_email" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-xs-12 mb30">
                                <input name="comment_phone" id="comment_phone" type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 col-xs-12 mb30">
                                <input name="passw" id="comment_author" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 col-xs-12 mb30">
                                <input name="cpassw" id="comment_author" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-4 col-xs-12 mb30">
                                <button type="submit"> Register </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg padding-bottom-30 padding-top-30 relative wow fadeIn">
        <div class="footer-top-area padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-to-action flex-v-center">
                            <div class="cta-content width50p xs-width100p">
                                <h3 class="font32 xs-font24">Get Started Today </h3>
                                <p> Be Smart enough to use <b>socialclinic.ng</b> to keep your social handles healthy. 
                                    We are offering the most Affordable and Efficient Social Media Growth to customers across the world </p>
                            </div>
                            <div class="cta-button width50p xs-width100p right xs-left xs-mt30"><a href="{{ route('login') }}" class="read-more"> Register Now </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 sm-center xs-center sm-mb50 xs-mb50">
                        <div class="footer-logo mb10">
                            <a href="#"><img src="assets/img/logo.png" alt=""></a>
                        </div>
                        <div class="footer-about">
                            <p>
                             We treat all social media issues, Increase your social media handles with real humans providing direct organic reach. 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1 col-xs-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-footer-widget">
                                    <h4> Company </h4>
                                    <ul>
                                        <li><a href="#">How we work</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-footer-widget">
                                    <h4> Links </h4>
                                    <ul>
                                        <li><a href="register"> Register </a></li>
                                        <li><a href="login"> Login </a></li>
                                        <li><a href="contact"> Contact </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-footer-widget">
                                    <h4>Legal</h4>
                                    <ul>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Payments Policy </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright mt50 center">
                            <p>Copyright &copy; 2021,
                            <a href="#"> Socialclinic.ng </a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
