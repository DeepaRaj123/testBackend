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
    <meta name="description" content="Laba cabs Taxi">
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
                     <!--    <ul class="header-top-menu">
                        <li>
                                <a href="#" class="search-open">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li> -->
                             <!--  <li>
                                <a href="#" class="trigger-overlay">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul> -->


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
                                        <a href="{{url('ride')}}">Ride</a>
                                    </li>
                                    <li>
                                        <a href="{{url('drive')}}">Drive</a>
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
                                     <li>
                                        <a href="{{ url('/about_us') }}">About Us</a>
                                    </li>

                                     <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">More <span class="caret"></span></a>
                                   <ul class="dropdown-menu" role="menu" >
                                     <li><a class="dropdown-item" href="{{ url('/privacy') }}">Privacy Policy</a></li>
                                     <li><a class="dropdown-item" href="{{ url('/terms') }}">Terms and Conditions</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/cancellation') }}">Cancellation & Refund</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/help') }}">Help</a></li>
                                  </ul>
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
    <div class="slider-block">    
        <div class="rev_slider_wrapper">
            <div class="rev_slider carrent-slider" >
                <ul>
                    <!-- slide 1 --> 
                    <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">

                        <!-- main image -->
                        <img src="asset/assets/images/slider-car/slider-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                        <!-- layer no 1 -->
                        <div class="tp-caption tp-resizeme rev-subheading"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-85']" 
                            data-y="['middle']" data-voffset="['-163','-163','-130','-130']"
                            data-fontsize="['22','22','22','22']"
                            data-lineheight="['30','30','30','30']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">All discount just for you
                        </div>

                        <!-- layer no 2 -->
                        <div class="tp-caption tp-resizeme rev-subheading"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['102','102','75','-75']" 
                            data-y="['middle']" data-voffset="['-110','-110','-90','-90']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-fontsize="['60','60','45','45']"
                            data-lineheight="['60','60','60','60']"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 6; color: #ffa200; font-family: 'Exo', sans-serif; font-weight: 800;">Need A Ride?
                        </div>

                        <!-- layer no 3 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Title"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['103','103','75','0']" 
                            data-y="['middle']" data-voffset="['0']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-fontsize="['60','60','45','45']"
                            data-lineheight="['75','75','60','60']"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; color: #000000; font-family: 'Exo', sans-serif; font-weight: 900; text-transform: uppercase;">Choose your<br> Comfortable Taxi
                        </div>

                        <!-- layer no 4 -->
                        <div class="tp-caption rev-subheading tp-resizeme"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-28']" 
                            data-y="['middle']" data-voffset="['95','95','75','75']"
                            data-fontsize="['24']"
                            data-lineheight="['20']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">Best worldwide car hire deals!!!!!
                        </div>

                        <!-- layer no 5 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-105']" 
                            data-y="['middle']" data-voffset="['150','150','135','120']"
                            data-fontsize="['22']"
                            data-lineheight="['45']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-style_hover="cursor:default;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:600;e:Power2.easeInOut;s:600;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1200" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; font-weight: bold; font-family: 'Exo', sans-serif;">
                            <a href="{{Setting::get('store_link_android_user')}}" class="button black-button slider-button" data-fontsize="['22','22','22','22']">Become A Rider</a>
                        </div>

                        <!-- layer no 6 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="['right','right','right','center']" data-hoffset="['0','-15','30','-10']"
                            data-y="['middle','middle','middle','bottom']" data-voffset="['15','15','0','0']"
                            data-transform_idle="o:1;" 
                            data-visibility="['on','on','on','off']"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:600;" 
                            data-splitin="none"
                            data-start="1500"
                            data-type="image"
                            data-responsive_offset="on"
                            data-width="none"
                            data-height="none" data-no-retina>
                                <img src="asset/assets/images/dummy.png" alt="" data-lazyload="asset/assets/images/slider-car/car-new.png" data-ww="['805','805','500','350']" data-hh="['auto']" >
                        </div>
                    </li><!-- /.slide 1 -->
                    <!-- slide 1 --> 
                    <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">

                        <!-- main image -->
                        <img src="asset/assets/images/slider-car/slider-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                        <!-- layer no 1 -->
                        <div class="tp-caption tp-resizeme rev-subheading"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-85']" 
                            data-y="['middle']" data-voffset="['-163','-163','-130','-130']"
                            data-fontsize="['22','22','22','22']"
                            data-lineheight="['30','30','30','30']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">All discount just for you
                        </div>

                        <!-- layer no 2 -->
                        <div class="tp-caption tp-resizeme rev-subheading"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['102','102','75','-75']" 
                            data-y="['middle']" data-voffset="['-110','-110','-90','-90']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-fontsize="['60','60','45','45']"
                            data-lineheight="['60','60','60','60']"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 6; color: #ffa200; font-family: 'Exo', sans-serif; font-weight: 800;">Have A Ride?
                        </div>

                        <!-- layer no 3 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Title"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['103','103','75','0']" 
                            data-y="['middle']" data-voffset="['0']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-fontsize="['60','60','45','45']"
                            data-lineheight="['75','75','60','60']"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; color: #000000; font-family: 'Exo', sans-serif; font-weight: 900; text-transform: uppercase;">Choose your<br> Comfortable Taxi
                        </div>

                        <!-- layer no 4 -->
                        <div class="tp-caption rev-subheading tp-resizeme"
                            data-type="text" 
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-28']" 
                            data-y="['middle']" data-voffset="['95','95','75','75']"
                            data-fontsize="['24']"
                            data-lineheight="['20']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="800" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">Best worldwide car hire deals!!!!!
                        </div>

                        <!-- layer no 5 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-105']" 
                            data-y="['middle']" data-voffset="['150','150','135','120']"
                            data-fontsize="['22']"
                            data-lineheight="['45']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-style_hover="cursor:default;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:600;e:Power2.easeInOut;s:600;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                            data-start="1200" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; font-weight: bold; font-family: 'Exo', sans-serif;">
                            <a href="{{ url('/provider/register') }}" class="button black-button slider-button" data-fontsize="['22','22','22','22']">Become A Driver</a>
                        </div>

                        <!-- layer no 6 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="['right','right','right','center']" data-hoffset="['0','-15','30','-10']"
                            data-y="['middle','middle','middle','bottom']" data-voffset="['15','15','0','0']"
                            data-transform_idle="o:1;" 
                            data-visibility="['on','on','on','off']"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:600;" 
                            data-splitin="none"
                            data-start="1500"
                            data-type="image"
                            data-responsive_offset="on"
                            data-width="none"
                            data-height="none" data-no-retina>
                                <img src="asset/assets/images/dummy.png" alt="" data-lazyload="asset/assets/images/slider-car/car-new2.png" data-ww="['805','805','500','350']" data-hh="['auto']" >
                        </div>
                    </li><!-- /.slide 1 -->
                </ul>             
            </div><!-- /.revolution slider -->
        </div><!-- /.slider wrapper -->
    </div><!-- /.slider-block -->

    <!-- ====== Section divider ====== --> 
    <div class="vehicle-section-divider night-rider">
        <div class="contoiner-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-divider-content">
                        <div class="vehicle-border">
                            <img src="asset/assets/images/block-car01.png" alt="car-item" />
                        </div><!-- /.car-border -->
                    </div><!-- /.section-divider-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.section-divider -->

    
        <!-- ====== Service Brand Block ====== --> 
        <div class="company-brand-block company-service">
        <div class="container">
            <div class="row tb default-margin-bottom yellow-theme">
                <!-- block-title-area -->
                <div class="col-md-12 block-title-area tb-cell">
                    <div class="heading-content style-one border">
                        <h3 class="subtitle">Why do you have to choose us?</h3>
                        <h2 class="title">Some service we offer</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->

                <!-- block-navigation-area -->

            </div><!-- /.row --> 
            <div class="col-md-6 ">
                <div class="service-section">
                <div class="col-md-4">
                    <img src="asset/assets/images/service-1.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <h3 class="title">Cabs for every pocket</h3>
                    <p>From Sedans and SUVs to Luxury cars for special occasions, we have cabs to suit every pocket</p>
                    </div>
                </div>
           
                    
                </div>
                <div class="col-md-6 ">
                <div class="service-section">
                <div class="col-md-4">
                    <img src="asset/assets/images/service-4.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <h3 class="title">Cashless Rides</h3>
                    <p>Now go cashless and travel easy.Add your credit/debit card to enjoy hassle free payments.</p>
                    </div>
                </div>

                </div>
                <div class="col-md-6 ">
                 <div class="service-section">
                <div class="col-md-4">
                    <img src="asset/assets/images/Offer.jpeg" alt="">
                    </div>
                    <div class="col-md-8">
                    <h3 class="title">Get 25% off upto Rs.50</h3>
                    <p>Get a cab and enjoy savings of up to Rs.50 on your first ride! Huge savings up to 25% await you with LaBa Promo Coupon Today. Book a ride now!</p>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="service-section">
                <div class="col-md-4">
                    <img src="asset/assets/images/service-2.png" alt="">
                    </div>
                    <div class="col-md-8">
                    <h3 class="title">Secure and Safer Rides</h3>
                    <p>Verified drivers, an emergency alert button, and live ride tracking are some of the features.</p>
                    </div>
                </div>
                </div>

        </div><!-- /.container -->
    </div><!-- /.company-logo-block -->

    <div class="vehicle-multi-border yellow-black"></div><!-- /.vehicle-multi-border -->
        <!-- ======Excellent Service Block======= --> 
        <div class="excellent-service-block pd-90">
        <div class="container">
            <div class="row tb default-margin-bottom yellow-theme">
                <div class="col-md-12 block-title-area tb-cell">
                    <div class="heading-content style-one border">
                        <h3 class="subtitle">Our Services and Hospitality</h3>
                        <h2 class="title">Our Excellent Services</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->

            </div><!-- /.row --> 

            <div class="service-slider slider-style-two owl-carousel" data-item="[1,1,1,1]">
                <div class="item row">
                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-2.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">Tap the app, get a ride</h2>
                                <p class="service-details">Taxi is the smartest way to get around. One tap and a car comes directly to you. Your driver knows exactly where to go. And you can pay with either cash or card.</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-1.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">Ready anywhere, anytime</h2>
                                <p class="service-details">Daily commute. Errand across town. Early morning flight. Late night drinks. Wherever you’re headed, count on Laba cabs Taxi for a ride—no reservations needed.</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-3.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">Low-cost to luxury</h2>
                                <p class="service-details">You can always request everyday cars at everyday prices. But sometimes you need a bit more space. Or you want to go big on style. With Laba cabs Taxi, the choice is yours.</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 

                    <div class="clearfix"></div><!-- /.clearfix -->

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-4.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">Helping Cities For the good</h2>
                                <p class="service-details">A city with Laba cabs Taxi has more economic opportunities for residents, fewer drunk drivers on the streets, and better access to transportation for those without it.</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-5.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">They’re people like you .</h2>
                                <p class="service-details">What makes the Laba cabs Taxi experience truly great are the people behind the wheel.Our partners drive their own cars—on their own schedule—in cities big and small.</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 

                    <div class="col-md-4">
                        <div class="service-content">
                            <div class="service-thumbnail">
                                <img src="asset/assets/images/about-6.png" alt="car-item" />
                            </div><!-- /.service-thumbnail -->
                            <div class="service-details-content">
                                <h2 class="service-title">Safety Putting people first</h2>
                                <p class="service-details">Whether riding in the backseat or driving up front, every part of the Laba cabs Taxi experience has been designed around your safety and security</p>
                            </div><!-- /.service-details-content -->
                        </div><!-- /.service-content -->
                    </div><!-- /.col-md-4 --> 
                </div><!-- /.item -->

</div> 
        </div><!-- /.container  -->
    </div><!-- /.Regular-Vehicle Block -->

    <?php 

        $fleets_count = App\Fleet::count();
        $users_count = App\User::count();
        $providers_count = App\Provider::count();
    ?>

    <!-- ======fun facts block======= -->
    <div class="fun-facts-block background-overlay" style="background-image:url(asset/assets/images/fun-fect-image.png)">
        <div class="container">
            <div class="stat">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $fleets_count }}" data-speed="2500">{{ $fleets_count }}</h3>
                        <div class="milestone-details">Cars in Fleet</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $users_count}}
" data-speed="2500">{{ $users_count}}</h3>
                        <div class="milestone-details">Happy Customers</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="{{ $providers_count }}" data-speed="2500">{{ $providers_count }}</h3>
                        <div class="milestone-details">Drivers</div>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="0" data-to="525" data-speed="2500">525</h3>
                        <div class="milestone-details">Days in Business</div>
                    </div>
                </div> -->
            </div><!-- stat -->
        </div><!-- /.container -->
    </div><!-- /.fun-facts-block -->



    <!-- ====== App block ====== --> 
    <div class="app-block bg-gray-color" id="app-block">
        <div class="container-large-device">
            <div class="container">
                <div class="row tb">
                    <div class="col-md-6 tb-cell">
                        <div class="mobile-app-details">
                            <h4 class="top-subtitle">All discount just for you</h4>
                            <h2 class="title red-color">Our Free Mobile App</h2>
                            <h3 class="subtitle">Search taxi on iphone &amp; Android marker places</h3>
                            <div class="app-location-link">
                                <a href="{{Setting::get('store_link_ios_user')}}">
                                    <img src="asset/assets/images/user-appstore.png" alt="mobile" style="height:60px;"/>
                                </a>
                                <a href="{{Setting::get('store_link_android_user')}}">
                                    <img src="asset/assets/images/user-playstore.png" alt="mobile" />
                                </a>
                            </div><!-- /.app-location-link -->
                        </div><!-- /.mobile-app-details -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 tb-cell">
                        <div class="app-mokeup">
                            <img src="asset/assets/images/mobilenew.png" alt="mobile" />
                        </div><!-- /.app-mokeup -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.container-large-device -->
    </div><!-- /.app-block -->





    <!-- ======footer area======= -->
    <div class="footer-top-border">
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
                                <a href="{{url('about_us')}}" class="button">More</a>
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
                                <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                                <li ><a href="{{ url('terms') }}"></i>Terms & Conditions</a></li>
                                <li ><a href="{{ url('cancellation') }}"></i>Cancellation Policy</a></li>        
                            </ul>
    </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_hot_contact">
                            <h3 class="widget-title">
                                Contact 
                            </h3><!-- /.widget-title -->
                            <ul>
                                <li><a href="mailto:{{Setting::get('contact_email')}}"><i class="fa fa-envelope"></i>{{Setting::get('contact_email')}}</a></li>
                                <li><a href="tel:+{{Setting::get('contact_number')}}"><i class="fa fa-phone"></i>(+91){{Setting::get('contact_number')}}</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>{{Setting::get('address')}}</a></li>
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
                                <!-- <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a> -->
                                <!-- <a href="{{Setting::get('facebook_link')}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{Setting::get('twitter_link')}}"><i class="fa fa-twitter"></i></a> -->
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


