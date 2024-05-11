<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('/assets') }}/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    
    <!-- PAGE TITLE HERE -->
    <title>Basumati</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/fontawesome/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/flaticon.min.css"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/animate.min.css"><!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/bootstrap-select.min.css"><!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/loader.min.css"><!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/css/style.css"><!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('/assets') }}/css/skin/skin-1.css"><!-- THEME COLOR CHANGE STYLE SHEET -->

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets') }}/plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

    <style>
        .expertise .wt-icon-box-wraper {
            height: 92.5%;
        }
    </style>
</head>

<body id="bg">

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu">
        
            <div class="top-bar bg-secondry">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx">
                            <li><i class="fa fa-envelope"></i>mail@masumati.com</li>
                            <li><i class="fa fa-phone"></i>(654) 321-7654</li>
                        </ul>
                        <ul class="social-bx list-inline">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="index.html">
                                <img src="{{ asset('/assets') }}/images/logo-dark.png" width="171" height="49" alt="" >
                            </a>
                        </div>
                        
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="{{ url('/') }}">Home<!--<i class="fa fa-chevron-down">--></i></a>
                                   <!--  <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                    </ul> -->
                                </li>
                            
                                <li>
                                    <a href="{{ url('/services') }}">Services<!--<i class="fa fa-chevron-down">--></i></a>
                                   <!-- <ul class="sub-menu">
                                         <li>
                                            <a href="javascript:;">About us</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-1.html">About us 1</a></li>
                                                <li><a href="about-2.html">About us 2</a></li>
                                            </ul>
                                        </li> 
                                        <li>
                                            <a href="javascript:;">FAQ</a>
                                             <ul class="sub-menu">
                                                <li><a href="faq-1.html">FAQ 1</a></li>
                                                <li><a href="faq-2.html">FAQ 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="career.html">Career</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                                <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                                <li><a href="portfolio-detail.html">Portfolio Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Our Team</a>
                                             <ul class="sub-menu">
                                                <li><a href="our-team.html">Our Team 1</a></li>
                                                <li><a href="our-team-detail.html">Our Team Detail</a></li>
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="javascript:;">Services</a>
                                                <ul class="sub-menu">
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="services-detail.html">Services Detail</a></li>
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="javascript:;">Galley</a>
                                             <ul class="sub-menu">
                                                <li><a href="gallery-grid-1.html">Galley Grid 1</a></li>
                                                <li><a href="gallery-grid-2.html">Galley Grid 2</a></li>
                                                <li><a href="gallery-grid-3.html">Galley Grid 3</a></li>
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="javascript:;">Error</a>
                                           <ul class="sub-menu">
                                                <li><a href="error-403.html">Error 403</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="error-500.html">Error 500</a></li>
                                            </ul>
                                        </li> 
                                        <li>
                                            <a href="javascript:;">Contact us</a>
                                           <ul class="sub-menu">
                                                <li><a href="contact-1.html">Contact us 1</a></li>
                                                <li><a href="contact-2.html">Contact us 2</a></li>
                                                <li><a href="contact-3.html">Contact us 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                
                                <li>
                                    <a href="javascript:;">Team<!--<i class="fa fa-chevron-down">--></i></a>
                                     <!--<ul class="sub-menu">
                                        <li>
                                            <a href="javascript:;">Header</a>
                                           <ul class="sub-menu">
                                                <li><a href="header-style-1.html">Header 1</a></li>
                                                <li><a href="header-style-2.html">Header 2</a></li>
                                                <li><a href="header-style-3.html">Header 3</a></li>
                                                <li><a href="header-style-4.html">Header 4</a></li>
                                                <li><a href="header-style-5.html">Header 5</a></li>
                                                <li><a href="header-style-6.html">Header 6</a></li>
                                                <li><a href="header-style-7.html">Header 7</a></li>
                                                <li><a href="header-style-8.html">Header 8</a></li>
                                                <li><a href="header-style-9.html">Header 9</a></li>
                                                <li><a href="header-style-10.html">Header 10</a></li>
                                            </ul> 
                                        </li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                        <li><a href="footer-light.html">Footer Light</a></li>
                                        <li><a href="footer-dark.html">Footer Dark</a></li>
                                    </ul> -->
                                </li>
                            
                                <li>
                                    <a href="javascript:;">Projects<!--<i class="fa fa-chevron-down">--></i></a>
                                  <!--  <ul class="sub-menu">
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="shopping-cart.html">Shopping cart</a></li>
                                        <li><a href="wish-list.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul> -->
                                </li>
                                
                                <li class="submenu-direction">
                                    <a href="javascript:;">Contact<!--<i class="fa fa-chevron-down">--></i></a>
                                   <!-- <ul class="sub-menu">
                                        <li>
                                             <a href="javascript:;">Media</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-media-list.html">Media list</a></li>
                                                <li><a href="blog-media-grid.html">Media grid</a></li>
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="javascript:;">list</a>
                                             <ul class="sub-menu">
                                                <li><a href="blog-half-img.html">Half image</a></li>
                                                <li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
                                                <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
                                                <li><a href="blog-large-img.html">Large image</a></li>
                                                <li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
                                                <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>                                                    
                                            </ul> 
                                        </li>
                                        <li>
                                            <a href="javascript:;">Grid</a>
                                             <ul class="sub-menu">
                                                <li><a href="blog-grid-2.html">Grid 2</a></li>
                                                <li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                                <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
                                                <li><a href="blog-grid-3.html">Grid 3</a></li>
                                                <li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                                <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
                                                <li><a href="blog-grid-4.html">Grid 4</a></li>
                                            </ul>  
                                        </li>
                                        <li>
                                            <a href="javascript:;">Single</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-single.html">Single full</a></li>
                                                <li><a href="blog-single-left-sidebar.html">Single sidebar</a></li>
                                                <li><a href="blog-single-sidebar.html">Single sidebar right</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                
                                <li class="has-mega-menu ">
                                 <!--   <a href="javascript:;">Elements <i class="fa fa-chevron-down"></i></a>
                                   <ul class="mega-menu">
                                        <li>
                                            
                                            <ul>
                                                <li><a href="shortcode-animations.html"><i class="fa fa-ravelry"></i> Animations</a></li>
                                                <li><a href="shortcode-accordians.html"> <i class="fa fa-bars"></i>Accordians</a></li>
                                                <li><a href="shortcode-alert-box.html"> <i class="fa fa-bell-o"></i>Alert box</a></li>
                                                <li><a href="shortcode-buttons.html"> <i class="fa fa-toggle-on"></i>Buttons</a></li>
                                                <li><a href="shortcode-client.html"> <i class="fa fa-group"></i>Clients</a></li>
                                                <li><a href="shortcode-client-slider.html"> <i class="fa fa-drivers-license-o"></i>Clients slider</a></li>
                                                <li><a href="shortcode-carousel-sliders.html"> <i class="fa fa-sliders"></i>Carousel sliders</a></li>
                                            </ul>
                                        </li>
                            
                                        <li>
                                            
                                            <ul>
                                                <li><a href="shortcode-counters.html"> <i class="fa fa-calculator"></i>Counters</a></li>
                                                <li><a href="shortcode-dividers.html"> <i class="fa fa-ellipsis-h"></i>Dividers</a></li>
                                                <li><a href="shortcode-google-map.html"> <i class="fa fa-map-o"></i>Google map</a></li>
                                                <li><a href="shortcode-icons.html"> <i class="fa fa-ellipsis-h"></i>Icons Shortcodes</a></li>
                                                <li><a href="shortcode-icon-box.html"> <i class="fa fa-square-o"></i>Icon-box</a></li>
                                                <li><a href="shortcode-icon-box-styles.html"> <i class="fa fa-square-o"></i>Icon box styles</a></li>
                                                <li><a href="shortcode-image-box-content.html"> <i class="fa fa-address-card-o"></i>Image box content</a></li>
                                            </ul>
                                        </li>
                            
                                        <li>
                                            
                                            <ul>
                                                <li><a href="shortcode-images-effects.html"> <i class="fa fa-photo"></i>Images effects</a></li>
                                                <li><a href="shortcode-list-group.html"> <i class="fa fa-list-ol"></i>List group</a></li>
                                                <li><a href="shortcode-modal-popup.html"> <i class="fa fa-window-maximize"></i>Modal popup</a></li>
                                                <li><a href="shortcode-pagination.html"> <i class="fa fa-terminal"></i>Pagination</a></li>
                                                <li><a href="shortcode-pricing-table.html"> <i class="fa fa-dollar"></i>Pricing table</a></li>
                                                <li><a href="shortcode-toggles.html"> <i class="fa fa-plus-square-o"></i>Toggles</a></li>
                                                <li><a href="shortcode-tooltips.html"> <i class="fa fa-window-maximize"></i>Tooltips</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            
                                            <ul>
                                                <li><a href="shortcode-tabs.html"> <i class="fa fa-th-list"></i>Tabs</a></li>
                                                <li><a href="shortcode-table.html"> <i class="fa fa-table"></i>Table</a></li>
                                                <li><a href="shortcode-testimonials.html"> <i class="fa fa-twitch"></i>Testimonials</a></li>
                                                <li><a href="shortcode-testimonials-grid.html"> <i class="fa fa-twitch"></i>Testimonials grid</a></li>
                                                <li><a href="shortcode-title-separators.html"> <i class="fa fa-ellipsis-h"></i>Title-separators</a></li>
                                                <li><a href="shortcode-video.html"> <i class="fa fa-video-camera"></i>Video</a></li>
                                                <li><a href="shortcode-all-widgets.html"> <i class="fa fa-retweet"></i>Widgets</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>

                        <!-- ETRA Nav -->
                        {{-- <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="extra-cell">

                                <a href="javascript:;" class="wt-cart cart-btn dropdown-toggle" title="Your Cart" id="ID-MSG_dropdown" data-bs-toggle="dropdown">
                                    <span class="link-inner">
                                        <span class="woo-cart-total"> </span>
                                        <span class="woo-cart-count">
                                            <span class="shopping-bag wcmenucart-count ">4</span>
                                        </span>
                                    </span>
                                </a>
                                
                                <div class="dropdown-menu cart-dropdown-item-wraper">
                                <div class="nav-cart-content">
                                    
                                    <div class="nav-cart-items p-a15">
                                        <div class="nav-cart-item clearfix">
                                            <div class="nav-cart-item-image">
                                                <a href="#"><img src="{{ asset('/assets') }}/images/cart/pic-1.jpg" alt="p-1"></a>
                                            </div>
                                            <div class="nav-cart-item-desc">
                                                <a href="#">Safety helmet</a>
                                                <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                <a href="#" class="nav-cart-item-quantity">x</a>
                                            </div>
                                        </div>
                                        <div class="nav-cart-item clearfix">
                                            <div class="nav-cart-item-image">
                                                <a href="#"><img src="{{ asset('/assets') }}/images/cart/pic-2.jpg" alt="p-2"></a>
                                            </div>
                                            <div class="nav-cart-item-desc">
                                                <a href="#">Hammer drill machine</a>
                                                <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                                <a href="#" class="nav-cart-item-quantity">x</a>
                                            </div>
                                        </div>
                                        <div class="nav-cart-item clearfix">
                                            <div class="nav-cart-item-image">
                                                <a href="#"><img src="{{ asset('/assets') }}/images/cart/pic-3.jpg" alt="p-1"></a>
                                            </div>
                                            <div class="nav-cart-item-desc">
                                                <a href="#">Safety helmet</a>
                                                <span class="nav-cart-item-price"><strong>2</strong> x $19.99</span>
                                                <a href="#" class="nav-cart-item-quantity">x</a>
                                            </div>
                                        </div>
                                        <div class="nav-cart-item clearfix">
                                            <div class="nav-cart-item-image">
                                                <a href="#"><img src="{{ asset('/assets') }}/images/cart/pic-4.jpg" alt="p-2"></a>
                                            </div>
                                            <div class="nav-cart-item-desc">
                                                <a href="#">Hammer drill machine</a>
                                                <span class="nav-cart-item-price"><strong>1</strong> x $24.99</span>
                                                <a href="#" class="nav-cart-item-quantity">x</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                        <h4  class="pull-left m-a0">Subtotal:</h4>
                                        <h5 class="pull-right m-a0">$114.95</h5>
                                    </div>
                                    <div class="nav-cart-action p-a15 clearfix">
                                        <button class="site-button  btn-block m-b15 " type="button">View Cart</button>
                                        <button class="site-button  btn-block" type="button">Checkout </button>
                                    </div>
                                </div>
                                </div>
                             
                            </div>
                         </div> --}}
                         <!-- NAV Toggle Button -->
                        
                         <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- SITE Search -->
                        {{-- <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search">
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- SLIDER START -->
            <div class="main-slider style-two default-banner">
           		<div class="tp-banner-container">
                    <div class="tp-banner" >
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                           <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('/assets') }}/images/main-slider/slider2/slide2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/slide2.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                        
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " 
                                        id="slide-200-layer-1" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                                        data-height="full"
                                        data-whitespace="nowrap"
                                        data-type="shape" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                        </div>
                                    
                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption   tp-resizeme" 
                                        id="slide-200-layer-2" 
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
                                        data-fontsize="['60','60','60','50']"
                                        data-lineheight="['70','70','70','60']"
                                        data-width="['700','700','700','700']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text" 
                                        data-responsive_offset="on" 
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        white-space: normal; 
                                        font-weight: 700; 
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                        <span class="text-uppercase" style="font-family:'Roboto' ;"><span class="site-text-primary">We Build </span> Your Dream</span>
                                        </div>
                                    
                                        <!-- LAYER NR. 3 [ for paragraph] -->
                                        <div class="tp-caption  tp-resizeme" 
                                        id="slide-200-layer-3" 
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"  
                                        data-fontsize="['18','18','18','30']"
                                        data-lineheight="['30','30','30','40']"
                                        data-width="['650','650','650','650']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        font-weight: 500; 
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                        <span style="font-family:'Roboto';">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.</span>
                                        </div>
                                    
                                        <!-- LAYER NR. 4 [ for readmore botton ] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-200-layer-4"						
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['530','530','530','630']"  
                                        data-lineheight="['none','none','none','none']"
                                        data-width="['300','300','300','300']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                        
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index:13; text-transform:uppercase; font-weight:700;">
                                        <a href="about-1.html" class="site-button">Read more </a>
                                        </div>
                                        
                                        <!-- LAYER NR. 5 [ for worker pic 1 big] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-200-layer-5"						
                                        data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                        
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        
                                        style="z-index: 13;">
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/banner2-1.png" width="400" alt="">
                                        </div>
                                              
                                        <!-- LAYER NR. 6 [ for worker pic 2 small ] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-200-layer-6"						
                                        data-x="['right','right','right','right']" data-hoffset="['-250','-250','-250','-250']" 
                                        data-y="['top','top','top','top']" data-voffset="['320','280','280','280']"
                                        
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        
                                        style="z-index: 13;">
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/banner2-2.png" width="400" alt="">
                                        </div> 
                                        
                                        <!-- LAYER NR. 7 [ for worker pic road white line] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-200-layer-7"						
                                        data-x="['right','right','right','right']" data-hoffset="['-150','-150','-150','-150']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','100','100']"
                                        
                                        data-frames='[ 
                                        {"from":"y:0px(R);opacity:0;","speed":3000,"to":"o:1;","delay":5000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        
                                        style="z-index: 13;">
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/banner2-3.png" width="400" alt="">
                                        </div>                                
                                        
                                                                      
                                    </li>
                                    
                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider2/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/slide3.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                        
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " 
                                        id="slide-300-layer-1" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                                        data-height="full"
                                        data-whitespace="nowrap"
                                        data-type="shape" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                        </div>
                                    
                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption   tp-resizeme" 
                                        id="slide-300-layer-2" 
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
                                        data-fontsize="['60','60','60','50']"
                                        data-lineheight="['70','70','70','60']"
                                        data-width="['700','700','700','700']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text" 
                                        data-responsive_offset="on" 
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        white-space: normal; 
                                        font-weight: 700; 
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                        <span class="text-uppercase" style="font-family:'Roboto' ;"><span class="site-text-primary">We Build </span> Your Dream</span>
                                        </div>
                                    
                                        <!-- LAYER NR. 3 [ for paragraph] -->
                                        <div class="tp-caption  tp-resizeme" 
                                        id="slide-300-layer-3" 
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"  
                                        data-fontsize="['18','18','18','30']"
                                        data-lineheight="['30','30','30','40']"
                                        data-width="['650','650','650','650']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        font-weight: 500; 
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                        <span style="font-family:'Roboto';">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.</span>
                                        </div>
                                    
                                        <!-- LAYER NR. 4 [ for readmore botton ] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-300-layer-4"						
                                        data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['530','530','530','630']"  
                                        data-lineheight="['none','none','none','none']"
                                        data-width="['300','300','300','300']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                        
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index:13; text-transform:uppercase; font-weight:700;">
                                        <a href="about-1.html" class="site-button">Read more</a>
                                        </div>
                                        
                                        <!-- LAYER NR. 5 [ for worker pic ] -->
                                        <div class="tp-caption tp-resizeme" 	
                                        id="slide-300-layer-5"						
                                        data-x="['right','right','right','right']" data-hoffset="['-200','-100','-50','-10']" 
                                        data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                        
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        
                                        style="z-index: 13;">
                                        <img src="{{ asset('/assets') }}/images/main-slider/slider2/banner3-1.png" width="400" alt="">
                                        </div>    
                                    
                                    </li>
                                    
                                    <!-- SLIDE 3 -->	
                                    <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider2/slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('/assets') }}/images/main-slider/slider2/slide1.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
                                    id="slide-100-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-type="shape" 
                                    data-basealign="slide" 
                                    data-responsive_offset="off" 
                                    data-responsive="off"
                                    data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    
                                    style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                    </div>
                                
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" 
                                    id="slide-100-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                    data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"  
                                    data-fontsize="['60','60','60','50']"
                                    data-lineheight="['70','70','70','60']"
                                    data-width="['700','700','700','700']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"
                                
                                    data-type="text" 
                                    data-responsive_offset="on" 
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                
                                    style="z-index: 13; 
                                    white-space: normal; 
                                    font-weight: 700; 
                                    color: rgba(255, 255, 255, 1.00);
                                    border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'Roboto' ;"><span class="site-text-primary">We Build </span> Your Dream</span>
                                    </div>
                                
                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" 
                                    id="slide-100-layer-3" 
                                    data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                    data-y="['top','top','top','top']" data-voffset="['400','400','400','400']"  
                                    data-fontsize="['18','18','18','30']"
                                    data-lineheight="['30','30','30','40']"
                                    data-width="['650','650','650','650']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"
                                
                                    data-type="text" 
                                    data-responsive_offset="on"
                                    data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                
                                    style="z-index: 13; 
                                    font-weight: 500; 
                                    color: rgba(255, 255, 255, 0.85);
                                    border-width:0px;">
                                    <span style="font-family:'Roboto';">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.</span>
                                    </div>
                                
                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme" 	
                                    id="slide-100-layer-4"						
                                    data-x="['left','left','left','left']" data-hoffset="['48','30','30','100']" 
                                    data-y="['top','top','top','top']" data-voffset="['530','530','530','630']"  
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']"
                                    data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']"
                                    
                                    data-type="text" 
                                    data-responsive_offset="on"
                                    data-frames='[ 
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    data-textAlign="['left','left','left','left']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    
                                    style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="about-1.html" class="site-button">Read more</a>
                                    </div>
                                    
                                    <!-- LAYER NR. 5 [ for worker pic ] -->
                                    <div class="tp-caption tp-resizeme" 	
                                    id="slide-100-layer-5"						
                                    data-x="['right','right','right','right']" data-hoffset="['-200','-100','-50','-100']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="images/main-slider/slider2/banner1-1.png" width="400" alt="">
                                    </div>                            
                                    
                                  </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
                           </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
            	</div>
            </div>
            <!-- SLIDER END -->
            
             <!-- OUR VALUE SECTION START -->
             <div class="section-full site-bg-primary p-t40 p-b10">
                <div class="container our-value">
                     <div class="row"> 
                        <div class="col-lg-8 col-md-8 our-value-left">
                             <div class="row">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-icon-box-wraper left ">
                                        <div class="icon-md">
                                            <div class="icon-cell text-white">
                                                <span class="iconmoon-buildings"></span>
                                            </div>
                                        </div>
                                        <div class="icon-content text-secondry">
                                            <h5 class="wt-tilte text-uppercase m-b5">best quality</h5>
                                            <p>Lorem ipsum dolor sit amet, cdipiscing elit, sed diam non dolore .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <div class="icon-cell text-white">
                                                <span class="iconmoon-hours"></span>
                                            </div>
                                        </div>
                                        <div class="icon-content text-secondry">
                                            <h5 class="wt-tilte text-uppercase m-b0">24 hour support</h5>
                                            <p>Lorem ipsum dolor sit amet, cdipiscing elit, sed diam non dolore .</p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 our-value-right m-b30">
                            <div class="pull-right">
                                <a href="contact-1.html" class="site-button-secondry text-uppercase font-weight-600">Contact us</a>
                            </div>
                        </div>
                     </div>
                </div>
             </div>
            <!-- OUR VALUE SECTION  END -->


                 <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80 p-b50 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 m-b30">
                            <div class="about-com-pic">
                                <img src="{{ asset('/assets') }}/images/about-pic.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h2 class="text-uppercase">About Company </h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-square">
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p> 
                                Welcome to Basumati Incorporation, where innovation meets craftsmanship in the
                    world of construction. Since our inception, we have been dedicated to shaping
                        skylines, creating landmarks, and building dreams that stand the test of time.
                                </p>
                                <!--<p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .
                                </p>-->
                            </div>
                            <div class="about-types row">
                                <div class="col-md-6 col-sm-6 p-tb20">
                                    <div class="wt-icon-box-wraper left p-l20  bdr-1 bdr-gray-light">
                                        <div class="icon-sm site-text-primary">
                                            <a href="about-1.html" class="icon-cell p-t5 center-block"><i class="fa fa-building" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Building</h5>
                                            <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm site-text-primary">
                                            <a href="about-1.html" class="icon-cell p-t5 center-block"><i class="fa fa-paint-brush" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Renovation</h5>
                                            <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm site-text-primary">
                                            <a href="about-1.html" class="icon-cell p-t5 center-block"><i class="fa fa-gavel" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0 ">Digging</h5>
                                            <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 p-tb20 ">
                                    <div class="wt-icon-box-wraper left p-l20 bdr-1 bdr-gray-light">
                                        <div class="icon-sm site-text-primary">
                                            <a href="about-1.html" class="icon-cell p-t5 center-block"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">interior</h5>
                                            <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->    


            <!-- COMPANY DETAIL SECTION START -->
            <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url({{ asset('/assets') }}/images/background/bg-5.jpg);">
                <div class="overlay-main opacity-07 bg-black"></div>
                <div class="container ">
                    <div class="row d-flex">
                        
                        <div class="col-lg-8 col-md-12">

                            <div class=" text-white">
                                <h3 class="font-24">Vision</h3>
                            
                                <p>At Basumati Incorporation, we envision a world where every structure we build
                                    becomes a symbol of excellence, integrity, and sustainability. Our goal is not just to
                                    construct buildings, but to forge enduring relationships and make a positive impact
                                    on the communities we serve.</p>
                            </div>

                            <div class=" text-white">
                                <h3 class="font-24">Mission</h3>
                            
                                <p>Driven by a passion for perfection, our mission is to deliver exceptional construction
                                    solutions that exceed expectations, inspire awe, and enrich lives. We strive to
                                    achieve this by harnessing the latest technologies, fostering innovation, and
                                    upholding the highest standards of quality and integrity.</p>
                            </div>
                            
                            {{-- <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="status-marks  text-white m-b30">
                                        <div class="status-value text-right">
                                            <span class="counter">1150</span>
                                            <i class="fa fa-building font-26 m-l15"></i>
                                        </div>
                                        <h6 class="text-uppercase text-white text-right">PROJECT COMPLETED</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="status-marks  text-white m-b30">
                                        <div class="status-value text-right">
                                            <span class="counter">5223</span>
                                            <i class="fa fa-users font-26 m-l15"></i>
                                        </div>
                                        <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="status-marks  text-white m-b30">
                                        <div class="status-value text-right">
                                            <span class="counter">4522</span>
                                            <i class="fa fa-user-plus font-26 m-l15"></i>
                                        </div>
                                        <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <!-- COMPANY DETAIL SECTION End --> 
                    
            <!-- WHY CHOOSE US SECTION START  -->
            <div class="section-full bg-gray p-t80 p-b50 expertise">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">What Sets Us Apart</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content m-b20">
                        <div class="row">
                    
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">EXPERTISE</h5>
                                        <p>With a team of seasoned professionals and craftsmen, we bring decades
                                                    of combined experience to every project, ensuring precision and excellence in every
                                                    detail.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h5 class="wt-tilte text-uppercase">INNOVATION</h5>
                                        <p>We embrace cutting-edge technologies and sustainable practices to
                                            enhance efficiency, minimize environmental impact, and maximize value for our
                                            clients.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white ">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">COLLABORATION</h5>
                                        <p>We believe in the power of collaboration and open communication.
                                            By working closely with clients, architects, engineers, and subcontractors, we ensure
                                            seamless project delivery and exceed expectations.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white ">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">COMMITMENT TO SAFETY</h5>
                                        <p>The safety of our team members and partners is
                                            paramount. We maintain rigorous safety standards and protocols on every job site to
                                            ensure a secure working environment for all.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-area-chart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">COMMITMENT TO QUALITY</h5>
                                        <p>Quality is non-negotiable at Basumati Incorporation. We
                                                adhere to the highest standards of craftsmanship, using premium materials and
                                                meticulous attention to detail to deliver projects of unparalleled quality and durability.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            {{-- <div class="col-lg-4 col-md-6 col-sm-6 m-b10 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white">
                                    <div class="icon-sm site-text-primary m-b20">
                                        <a href="about-1.html" class="icon-cell"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">SUSTAINABILITY</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- WHY CHOOSE US SECTION END  --> 

            <!-- LATEST PROJECT SECTION START -->
            <div class="section-full bg-white p-t80">
            
                <div class="container">
                    <div class="section-head text-center">
                    
                    	<h2 class="text-uppercase ">Portfolio</h2>
                        
                        <div class="wt-separator-outer m-b50">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        
                        {{-- <div class="filter-wrap center">
                            <ul class="masonry-filter link-style  text-uppercase">
                                <li class="active"><a data-filter="*" href="#"><span> All</span></a></li>
                                <li><a data-filter=".cat-1" href="#">House</a></li>
                                <li><a data-filter=".cat-2" href="#">Building</a></li>
                                <li><a data-filter=".cat-3" href="#">Office</a></li>
                                <li><a data-filter=".cat-4" href="#">Garden</a></li>
                                <li><a data-filter=".cat-5" href="#">Interior</a></li>
                            </ul>
                        </div> --}}
                        <p>Over the years, we have had the privilege of working on a diverse range of projects,
                            including residential developments, residential complexes, and institutional buildings. Each
                            project in our portfolio showcases our unwavering commitment to excellence, innovation,
                            and client satisfaction.</p>
                    </div>
                </div>
                <div class="container-fluid">
                   
                    <div class="portfolio-wrap mfp-gallery no-col-gap row">
                    
                        <!-- COLUMNS 1 --> 
                        <div class="masonry-item cat-1 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic1.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic1.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 --> 
                        <div class="masonry-item cat-2 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow wt-img-effect zoom">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic2.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic2.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 --> 
                        <div class="masonry-item cat-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic3.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic3.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 --> 
                        <div class="masonry-item cat-4 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic4.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic4.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 --> 
                        <div class="masonry-item cat-5 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic5.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic5.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 --> 
                        <div class="masonry-item cat-4 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic6.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/gallery/pic6.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 --> 
                        <div class="masonry-item cat-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic7.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="{{ asset('/assets') }}/images/gallery/pic7.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 --> 
                        <div class="masonry-item cat-2 col-xl-3 col-lg-3 col-md-6">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom-slow">
                                    <a href="portfolio-detail.html">
                                        <img src="{{ asset('/assets') }}/images/latest-projects/pic8.jpg"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="portfolio-detail.html">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a  href="{{ asset('/assets') }}/images/gallery/pic8.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                   
                </div>
            </div>
            <!-- LATEST PROJECT SECTION END -->
            
            <!-- OUR TEAM MEMBER SECTION START -->
            {{-- <div class="section-full text-center wt-our-team bg-white p-t80 bg-no-repeat bg-bottom-center" style="background-image:url({{ asset('/assets') }}/images/background/bg-8.jpg);">
                <div class="container">
                
                	<!-- TITTLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our team</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <div class="section-content">
                        <div class="wt-team-five-warper  clearfix">
                        
                        	<!-- COLUMNS 1 -->
                            <div class="wt-col-5 team-col-one">
                                <div class="wt-team-five">
                                    <div class="wt-team-media">
                                        <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team3/pic1.png" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                    	<div class="p-a20 site-bg-primary ">
                                            <h4 class="wt-team-title text-uppercase m-a0 m-b10"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                            <div class="wt-team-position">Building Worker</div>
                                        </div>
                                        <div class="p-a20 bg-black wt-arrow-up">
                                            <ul class="social-icons social-square social-dark white-border m-a0">
                                              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="wt-col-5 team-col-two">
                                <div class="wt-team-five">
                                    <div class="wt-team-media">
                                        <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team3/pic2.png" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                    	<div class="p-a20 site-bg-primary ">
                                            <h4 class="wt-team-title text-uppercase m-a0 m-b10"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                            <div class="wt-team-position">Building Worker</div>
                                        </div>
                                        <div class="p-a20 bg-black wt-arrow-up">
                                            <ul class="social-icons social-square social-dark white-border m-a0">
                                              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="wt-col-5 team-col-three wt-team-active">
                                <div class="wt-team-five">
                                    <div class="wt-team-media">
                                        <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team3/pic3.png" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                    	<div class="p-a20 site-bg-primary ">
                                            <h4 class="wt-team-title text-uppercase m-a0 m-b10"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                            <div class="wt-team-position">Building Worker</div>
                                        </div>
                                        <div class="p-a20 bg-black wt-arrow-up">
                                            <ul class="social-icons social-square social-dark white-border m-a0">
                                              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="wt-col-5  team-col-four">
                                <div class="wt-team-five">
                                    <div class="wt-team-media">
                                        <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team3/pic4.png" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                    	<div class="p-a20 site-bg-primary ">
                                            <h4 class="wt-team-title text-uppercase m-a0 m-b10"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                            <div class="wt-team-position">Building Worker</div>
                                        </div>
                                        <div class="p-a20 bg-black wt-arrow-up">
                                            <ul class="social-icons social-square social-dark white-border m-a0">
                                              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="wt-col-5 team-col-five">
                                <div class="wt-team-five">
                                    <div class="wt-team-media">
                                        <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team3/pic5.png" alt="" ></a>
                                    </div>
                                    <div class="wt-team-info">
                                    	<div class="p-a20 site-bg-primary ">
                                            <h4 class="wt-team-title text-uppercase m-a0 m-b10"><a href="our-team-detail.html">Richard Wagner</a></h4>
                                            <div class="wt-team-position">Building Worker</div>
                                        </div>
                                        <div class="p-a20 bg-black wt-arrow-up">
                                            <ul class="social-icons social-square social-dark white-border m-a0">
                                              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                              <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            </div> --}}
            <!-- OUR TEAM MEMBER SECTION END -->
            
            <!-- LATEST BLOG SECTION START -->
            {{-- <div class="section-full latest-blog bg-gray p-t80 p-b50">
                <div class="container">
                	<!-- TITLE -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Latest blog post</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been tahe industry.</p>
                    </div>
                    <!-- TITLE -->
                    
                    <div class="section-content ">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog-post latest-blog-1 date-style-3">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog-single.html"><img src="{{ asset('/assets') }}/images/blog/latest-blog/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="blog-single.html">Title of first blog post</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span> 2022</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                             the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog-post latest-blog-1 date-style-3">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog-single.html"><img src="{{ asset('/assets') }}/images/blog/latest-blog/pic2.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="blog-single.html">Title of first blog post</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span> 2022</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                          the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-post latest-blog-1 date-style-3">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog-single.html"><img src="{{ asset('/assets') }}/images/blog/latest-blog/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="blog-single.html">Title of first blog post</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span> 2022</span></li>
                                                <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single.html">John</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single.html">0 comment</a> </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since
                                          the when an printer .</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- LATEST BLOG SECTION END -->
            
            
            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our Client</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content m-b30">
                        <div class="owl-carousel client-logo-carousel">
                        
                            <!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo1.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{ asset('/assets') }}/images/client-logo/logo6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>                        
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            
            </div>
            <!-- OUR CLIENT SLIDER END --> 
            
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url({{ asset('/assets') }}/images/background/bg3.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                	<!-- TITLE START -->
                    <div class="section-head text-center text-white">
                        <h2 class="text-uppercase">Testimonials</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- TESTIMONIAL 1 START ON BACKGROUND -->
                    <div class="section-content">
                        <div class="owl-carousel testimonial-one m-b30">
                            <div class="item">
                                <div class="testimonial-1 testimonial-bg">
                                    <div class="testimonial-pic  radius shadow"><img src="{{ asset('/assets') }}/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">Steve Jobs</strong>
                                        <span class="testimonial-position">Cfo Loop Inc</span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p> Excellent Customer support!.The template itself is very extended. simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy  simply dummy text. Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1 testimonial-bg">
                                    <div class="testimonial-pic  radius shadow"><img src="{{ asset('/assets') }}/images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">Steve Jobs</strong>
                                        <span class="testimonial-position">Cfo Loop Inc</span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p> Excellent Customer support!.The template itself is very extended. simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy  simply dummy text. Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1 testimonial-bg">
                                    <div class="testimonial-pic  radius shadow"><img src="{{ asset('/assets') }}/images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">Steve Jobs</strong>
                                        <span class="testimonial-position">Cfo Loop Inc</span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p> Excellent Customer support!.The template itself is very extended. simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy  simply dummy text. Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL SECTION START -->
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-light">
            <!-- COLL-TO ACTION START -->
            <div class="call-to-action-wrap call-to-action-skew site-bg-primary bg-no-repeat" style="background-image:url({{ asset('/assets') }}/images/background/bg-4.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="call-to-action-left p-tb20 p-r50">
                                <h4 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-5">
                            <div class="call-to-action-right p-tb30">
                                <a href="contact-1.html" class="site-button-secondry  m-r15 text-uppercase font-weight-600">
                                    Contact us  <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-4 col-md-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title">About Company</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{ asset('/assets') }}/images/logo-dark.png" width="230" height="67" alt=""></a>
                                </div>
                                <p>Thewebmax ipsum dolor sit amet, interior adipiscing elit,
                                      sed diam nonummy nibh is euismod tincidunt ut laoreet dolore agna aliquam erat .   
                                      wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.
                                      ipsum dolor sit amet, consectetuer adipiscing. ipsum dolor sit .
                                </p>
                            </div>
                        </div>
                        <!-- RESENT POST -->
                       <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget recent-posts-entry-date">
                              <h4 class="widget-title">Resent Post</h4>
                                <div class="widget-post-bx">
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>20</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>30</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 29</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>31</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 30</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   -->   
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="faq-1.html">FAQ</a></li>
                                    <li><a href="career.html">Career</a></li>
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="gallery-grid-1.html">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                       <div class="col-lg-4 col-md-6">
                           <!-- <div class="widget widget_newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div> -->
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                       <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                                    <p>No.123 Chalingt Gates, Supper market New York</p>
                                </div>
                           </div>
                        </div>
                       <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-smartphone-1"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                    <p class="m-b0">+41 555 888 9585</p>
                                    <p>+41 555 888 9585</p>
                                </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-fax"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                                    <p class="m-b0">FAX: (123) 123-4567</p>
                                    <p>FAX: (123) 123-4567</p>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-secondry">
                                    <span class="iconmoon-email"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                    <p class="m-b0">info@demo.com</p>
                                    <p>info@demo1234.com</p>
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© <?php echo date('Y'); ?> Basumati. All Rights Reserved. Designed By  <a href="https://www.piedpiper.co.in/" target="_blank">PiedPiper</a> </span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right"> 
                                <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                <li><a href="contact-1.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        
        <!-- SCROLL TOP BUTTON -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ asset('/assets') }}/js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('/assets') }}/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script   src="{{ asset('/assets') }}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script   src="{{ asset('/assets') }}/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="{{ asset('/assets') }}/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script   src="{{ asset('/assets') }}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script   src="{{ asset('/assets') }}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('/assets') }}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('/assets') }}/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('/assets') }}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="{{ asset('/assets') }}/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="{{ asset('/assets') }}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script   src="{{ asset('/assets') }}/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 
<script   src="{{ asset('/assets') }}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('/assets') }}/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->

<!-- SLIDER REVOLUTION -->
<script  src="{{ asset('/assets') }}/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="{{ asset('/assets') }}/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script  src="{{ asset('/assets') }}/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('/assets') }}/js/rev-script-2.js"></script>
</body>
</html>
