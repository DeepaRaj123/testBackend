<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="taxi Taxi">
    <meta name="keywords" content="taxi" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>{{ Setting::get('site_title','Taxi') }}</title>

    <!-- Favicons
    ================================================== -->
   <link rel="shortcut icon" href="{{ Setting::get('site_icon', asset('favicon.ico')) }}">
    <link rel="apple-touch-icon" href="asset/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/images/apple-touch-icon-114x114.png">

    <!-- Custom Font
    ================================================== -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="asset/assets/css/plugins.min.css">
    <link rel="stylesheet" href="asset/assets/css/icons.min.css">
    <link rel="stylesheet" href="asset/assets/css/style.css">
    <link rel="stylesheet" href="asset/assets/css/color-schemer.css">

    <!-- RS5.4 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="asset/assets/revolution/css/settings.css">
    <!-- RS5.4 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="asset/assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="asset/assets/revolution/css/navigation.css">
    <style type="text/css">
         .no-margin {
            margin: 0;
        }
    </style>
    <style>

    .header-top {

    position: relative;

    z-index: 99999;

    background: #1d1c1c;

    font-size: 12px;

    width: 100%;

    padding: 11px 20px;

    color: #fff;

    text-align: center;

    }

    .header-top p {

    color: #fff;

    margin-bottom: 0px;

    }

    span.cross-icon.pull-right i {

    color: #fff;

    }

    span.cross-icon.pull-right i:hover {

    cursor: pointer;

    }

    .fixedmenu {

    top: 0px;

    }

    </style>
</head>

<body>
@include('user.notification')
    <!-- ====== Header Top Area ====== --> 
    <header class="header-top-area bg-nero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 hidden-xs">
                    <div class="header-content-left">
                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-phone"></i>
                                    <span>Call Us - {{Setting::get('contact_number')}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:taxi@taxi.com" class="top-left-menu">
                                    <i mailto:webmaster@example.comlass="fa fa-envelope"></i>
                                    <span>{{Setting::get('contact_email')}}</span>
                                </a>                                 
                            </li>
                        </ul><!-- /.header-top-menu -->
                    </div><!-- /.header-content-left -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-6 col-sm-5">
                    <div class="header-content-right">
                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="language">
                                    <i class="fa fa-language"></i>
                                    <span>Language</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">English</a></li>
                                    <!-- <li><a href="#">Español</a></li>
                                    <li><a href="#">Français</a></li>
                                    <li><a href="#">Português</a></li> -->
                                </ul><!-- /.sub-menu -->
                            </li>
                        </ul>
                        <ul class="header-top-menu">
                            <!-- <li>
                                <a href="#" class="search-open">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li> -->
                            <li>
                                <a href="#" class="trigger-overlay">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ======= Header Modal Area =======-->
    <div class="header-modal-area">
        <!-- Modal Search -->
        <div class="overlay overlay-scale">
            <button type="button" class="overlay-close">&#x2716;</button>
            <div class="overlay__content">
                <form id="search-form" class="search-form outer" action="#" method="post">
                    <div class="input-group">
                        <input type="text" class=" input--full" placeholder="search text here ..."> 
                    </div>
                    <button class="btn text-uppercase search-button">Search</button>
                </form>
            </div>
        </div>

        <div class="overlay-sidebar">
            <div class="author-area">
                <a href="#" class="closebtn">&times;</a>
                <div class="author-area-content">                
                    <div class="login-author">   
                        <div class="author-info">                    
                            <div class="author-image yellow-border">
                                <img src="asset/assets/images/driver/driver-03.png" alt="author-image" />
                            </div><!-- /.author-image -->

                        </div><!-- /.author-info -->             
                        <div class="author-menu">
                            <ul class="yellow-color">
                                <li class="ham-1"><a href="{{ url('about_us') }}"><i class="fa fa-user-circle-o"></i>About Us</a></li>
                                <li class="ham-2"><a href="{{url('login')}}"><i class="fa fa-automobile"></i>Take a ride?</a></li>
                                <li class="ham-3"><a href="{{url('provider/login')}}"><i class="fa fa-location-arrow"></i>Have a ride?</a></li>
                                <li class="ham-4"><a href="{{ url('privacy') }}"><i class="fa fa-area-chart"></i>Privacy Policy</a></li>
                                <li class="ham-5"><a href="{{ url('terms') }}"><i class="fa fa-envelope-open"></i>Terms & Conditions</a></li>
                                <li class="ham-5"><a href="{{ url('cancellation') }}"><i class="fa fa-times-circle"></i>Cancellation Policy</a></li>
                            </ul>
                        </div><!-- /.author-menu -->
                    </div><!-- /.login-author -->
                </div><!-- /.author-area-content -->
            </div><!-- /.author-area -->
        </div><!-- /.overlay-sidebar -->
    </div><!-- /.header-modal-area -->

    <!-- ====== Header Nav Area ====== --> 
    <header class="header-nav-area">
        <div class="container">        
            <div class="row">
                <div class="col-md-3 col-sm-10 col-xs-10">
                    <div class="site-logo">
                        <a href="#"><img src="{{ Setting::get('site_logo', 'asset/assets/images/car-logo.png') }}" alt="logo" /></a>
                    </div><!-- /.logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-sm-2 col-xs-2 pd-right-0">
                    <nav class="site-navigation top-navigation nav-style-one">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a href="{{url('/')}}">Home</a>

                                    </li>
                                    <li>
                                        <a href="{{url('login')}}">Ride</a>
                                    </li>
                                    <li>
                                        <a href="{{url('provider/login')}}">Drive</a>
                                    </li>
                                    <li>
                                        <a href="./#app-block">Download App</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Contact</a>
                                    </li> -->
                                    <li>
                                    <a href="{{url('login')}}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/register') }}">Sign Up</a>
                                    </li>
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation -->
                    <!--Mobile Main Menu-->
                    <div class="mobile-menu-main hidden-md hidden-lg">
                        <div class="menucontent overlaybg"> </div>
                        <div class="menuexpandermain slideRight">
                            <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                <span></span>
                            </a>
                        </div><!--/.menuexpandermain-->

                        <div id="mobile-main-nav" class="mb-navigation slideLeft">
                            <div class="menu-wrapper">
                                <div id="main-mobile-container" class="menu-content clearfix"></div>
                            </div>
                        </div><!--/#mobile-main-nav-->
                    </div><!--/.mobile-menu-main-->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-area -->

    <!-- ======= Main Slider Area =======-->
   

<section class="about_us company-brand-block">
    <div class="container">
        <div class="row">
             <div class="col-md-12 block-title-area tb-cell">
                    <div class="heading-content style-one border">
                        <h3 class="subtitle">About Us</h3>
                        <h2 class="title">About LABA CABS</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                 
                <div class="service-section">
              
                    <div class="col-md-12">
                    <h3 class="title">Welcome to Laba Cabs</h3>
                    <p>LABA CABS is a leading Thrissur Taxi Service. We are the leading call taxi services in Thrissur with professional trained drivers. At LABA CABS,we offer you complete freedom to choose your own travel plan. We guarantee you hassle free journey throughout your tour. Our aim is to provide you complete convenient, comfortable and safe tour. We offer you variety of taxi cars depending upon your travel requirements and budget for transportation. LABA CABS Headquartered in Thrissur. We ensure your complete convenience, comfort and safety while traveling. At LABA CABS, we employ only professional trained drivers. Our drivers are licensed and required to successfully complete a formal training program, which includes training in defensive driving and safety.  </p>
                    <p>LABA CABS Thrissur on page travelers can get best deals available for all cabs types, Economical, AC, Non AC and luxury. LABA CABS Select for a range of options on such as thrissur one way trip cabs, Return trip cabs booking, Full day cabs booking and 1 hour to 12 hours packege booking. Routes information and online help. Book economy, budget and luxury cars online, Get offers and discounts and alsoget cabs availablity information. Compare thr fares of verious budget luxury and economy cabs availble and choose the range of options available online. Online cabs hire in thrissur.  Online confirmation of car hire in thrissur available online. LABA CABS Rentel provides cabs with reliable service in economy/cheapest price. Book hire online cabs no advance payments. Budget rate car operator in thrissur. LABA CABS Rentel provides cab from thrissur taxi service and thrissur to anywhere outstation travel one way, return, full day and 1 hour 12 hour packege - trip. LABA CABS provides best service and rate for thrissur to anywhere cab rentel search, select and book online cabs for anywhere from thrissur. </p>
                    <p>     The best option to have a relaxing journey is by taxi service from thrissur to anywhere. LABA CABS offers broad range of vehicle options for taxis. LABA CABS taxi service can be taken chosen from amongst different taxi categories like Hatchback, Sedan, Premium Sedan, SUV, Comfort SUV, Premium SUV. Also there are various car models to choose from like Toyota Etios, Swift Dzire, Mahindra Xylo, Maruti Ertiga, Toyota Innova, (6 & 7 seaters), Innova Crysta etc. You can choose from any of these car models for your own cab ride. LABA CABS also provides Thrissur to any places fixed itinerary taxi packages. </p>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</section>
    <!-- ======footer area======= -->
    <div class="footer-top-border p-0">
        <div class="vehicle-multi-border yellow-black"></div><!-- /.vehicle-multi-border -->
    </div><!-- /.container -->

    <footer class="footer-block bg-black" style="background-image: url(vassets/images/footer-bg.png);">
        <div class="container">
            <!-- footer-top-block -->
            <div class="footer-top-block yellow-theme">            
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_about">    
                            <h3 class="widget-title">
                                About us 
                            </h3><!-- /.widget-title -->
                            <div class="widget-about-content">
                                <img src="{{ Setting::get('site_logo', 'asset/assets/images/car-logsite_logoo.png') }}" alt="logo" />
                                <p>We Provide taxi service around the globe at most affordable price, feel free and safe to ride with us to enjoy the ambience of the taxi.</p>
                                <a href="" class="button">More</a>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget widget_about -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_menu">
                            <h3 class="widget-title">
                                Useful link
                            </h3><!-- /.widget-title -->
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('login')}}">Get a cab</a></li>
                                <li><a href="{{ url('provider/login')}} ">Our car</a></li>
                                <li><a href="{{url('login')}}"> Booking</a></li>
                            </ul> 
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_hot_contact">
                            <h3 class="widget-title">
                                Contact 
                            </h3><!-- /.widget-title -->
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i>{{Setting::get('contact_email')}}</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>(+91){{Setting::get('contact_number')}}</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>{{Setting::get('contact_address')}} </a></li>
                                
                            </ul> 
                        </div><!-- /.widget -->
                        <div class="widget widget_newsletter" style="display:none;">
                            <h3 class="widget-title">Subscribe</h3>
                            <form action="#" class="subscribes-newsletter" method="get">
                                <label>Subscribe to our Newsletters</label>
                                <div class="input-group">
                                    <input type="search" name="s" placeholder="Your email" class="form-controller">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-paper-plane"></span>
                                        </button>
                                    </span>
                                </div><!-- /. input-group -->
                            </form><!-- /.subscribes-newsletter -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.footer-top-block -->

            <!-- footer-bottom-block -->
            <div class="footer-bottom-block">            
                <div class="row">
                     <div class="col-md-9">
                        <div class="bottom-content-left">

                            <p class="copyright">{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}  -  All Right Reserved <a href="#"></a></p>

                            <!-- <p class="copyright">Copyright &copy; 2019 taxi  -  All Right Reserved <a href="#"></a></p> -->

                        </div><!-- /.bottom-top-content -->
                     </div><!-- /.col-md-9 -->
                     <div class="col-md-3">
                        <div class="bottom-content-right">
                            <div class="social-profile">
                                
                            </div><!-- /.social-profile -->
                        </div><!-- /.bottom-content-right -->
                     </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.footer-bottom-block -->
        </div><!-- /.container -->
    </footer><!-- /.footer-block -->
       
    <!-- All The JS Files
    ================================================== --> 
    <script src="asset/assets/js/plugins.min.js"></script>
    <script src="asset/assets/js/carrent.min.js"></script> <!-- main-js -->

    <!-- RS5.4 Core JS Files -->
    <script src="asset/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="asset/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
  
    <script>
        jQuery(document).ready(function() {
            var $sliderSelector = jQuery(".carrent-slider");
            $sliderSelector.revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: true,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels:[1400,1368,992,480],
                visibilityLevels:[1400,1368,992,480],
                gridwidth:[1400,1368,992,480],
                gridheight:[600,600,500,380],
                disableProgressBar:"on"
            });
        });
    </script>

    <!-- SLIDER REVOLUTION 5.4 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
    <script src="asset/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="asset/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
     <script>

$(document).ready(function()

{

$('span.cross-icon').click(function()

{

$('.header-top').slideUp();

$('.navbar').css('top','0px');

});



});

$(window).scroll(function()

{

if($(this).scrollTop()>50)

{

$('header>nav.navbar.navbar-fixed-top').addClass('fixedmenu')

}

else{

$('header>nav.navbar.navbar-fixed-top').removeClass('fixedmenu');

}

});
</script>
    @if(Setting::get('demo_mode', 0) == 1)
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 10555997;
            (function() {
                var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
        </script>
        <!-- End of LiveChat code -->
    @endif
</body>
</html>


