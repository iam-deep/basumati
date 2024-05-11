@extends('front.layout.app')

@section('content')
        
    <!-- CONTENT START -->
    <div class="page-content">
    
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('/assets') }}/images/banner/about-banner.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Services</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        
        <!-- BREADCRUMB ROW -->                            
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->
        
            
        <!-- ABOUT COMPANY SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">About Services</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p>Basumati Incorporation is your trusted partner for all your construction and repair
                        needs. With a commitment to excellence and a dedication to customer satisfaction,
                        we offer a comprehensive range of services tailored to meet the diverse needs of our
                        clients.</p>
                </div>
                <!-- TITLE END -->                	
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-12 m-b30">
                        <!--Fade slider-->
                        <div class="owl-carousel about-us-carousel owl-btn-vertical-center owl-dots-bottom-center">
                        
                            <div class="item">
                                <div class="aon-thum-bx">
                                    <img src="{{ asset('/assets') }}/images/our-work/pic1.jpg" alt="">
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="aon-thum-bx">
                                    <img src="{{ asset('/assets') }}/images/our-work/pic2.jpg" alt="">
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="aon-thum-bx">
                                    <img src="{{ asset('/assets') }}/images/our-work/pic3.jpg" alt="">
                                </div>
                            </div>                                    
                        
                        </div>
                        <!--fade slider END-->
                    </div> --}}
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        {{-- <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion9">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                            <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9" ><i class="fa fa-globe"></i>
                                                High Rise Building Construction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                            </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                            <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed"  ><i class="fa fa-photo"></i>
                                            Road Construction & Repair 
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                            </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                        <a data-bs-toggle="collapse"  href="javascript:;" data-bs-target="#collapseThree9" class="collapsed" ><i class="fa fa-cog"></i>
                                        Design for Business Center
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse"  data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
                                    </div>
                                </div>
                            </div>                                        
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>   
        <!-- ABOUT COMPANY SECTION END -->
        
        <!-- COMPANY DETAIL SECTION START -->
        {{-- <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url({{ asset('/assets') }}/images/background/bg-5.jpg);">
            <div class="overlay-main opacity-07 bg-black"></div>
            <div class="container ">
                <div class="row d-flex justify-content-end">
                    
                    <div class="col-lg-8 col-md-12">

                        <div class="text-right text-white">
                            <h3 class="font-24">The Construction Company</h3>
                            <h1 class="font-60">AWESOME FACTS</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada.</p>
                        </div>
                        
                        <div class="row">
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
                        </div>

                        </div>
                    
                    
                </div>
            </div>
        </div> --}}
        <!-- COMPANY DETAIL SECTION End -->   
                    
        <!-- SECTION CONTENT START -->
        {{-- <div class="section-full p-t80 p-b50 bg-gray">
            <div class="container">
            
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Our best Projects</h2>
                    <span class="title-small">Best construction Deals</span>
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <!-- TITLE END -->                
                <!-- PAGINATION TOP START -->
                <div class="filter-wrap p-tb15">
                    <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".cat-1" href="#">House</a></li>
                        <li><a data-filter=".cat-2" href="#">Building</a></li>
                        <li><a data-filter=".cat-3" href="#">Office</a></li>
                        <li><a data-filter=".cat-4" href="#">Garden</a></li>
                        <li><a data-filter=".cat-5" href="#">Interior</a></li>
                    </ul>
                </div>
                <!-- PAGINATION END -->
                
                <!-- GALLERY CONTENT START -->
                
                <div class="portfolio-wrap mfp-gallery row no-col-gap">
                
                    <!-- COLUMNS 1 -->
                    <div class="masonry-item cat-1 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                    <div class="masonry-item cat-2 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                    <div class="masonry-item cat-3 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                    <div class="masonry-item cat-4 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="portfolio-detail.html">
                                    <img src="{{ asset('/assets') }}/images/latest-projects/pic4.jpg"  alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-detail.html">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('/assets') }}/images/gallery/pic4.jpg" class="mfp-link m-b15">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="masonry-item cat-5 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                    <div class="masonry-item cat-4 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="portfolio-detail.html">
                                    <img src="{{ asset('/assets') }}/images/latest-projects/pic6.jpg"  alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-detail.html">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('/assets') }}/images/gallery/pic6.jpg" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="masonry-item cat-3 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                    <div class="masonry-item cat-2 col-lg-3 col-md-4">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
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
                
                <!-- GALLERY CONTENT END -->
                
            </div>
        </div> --}}
        <!-- SECTION CONTENT END --> 
            
        <!-- OUR TEAM MEMBER SECTION START -->
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
            <div class="container">
            
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Construction Services</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p></p>
                </div>
                <!-- TITLE END -->
                
                <div class="section-content">
                    <div class="row">
                    
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-1.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">General Contracting:</a></h4>
                                    <p>From residential homes to commercial buildings, Basumati
                                        Incorporation provides comprehensive general contracting services for projects of
                                        any scale or complexity. Our experienced team manages every aspect of the
                                        construction process, ensuring timely completion, adherence to budget, and superior
                                        craftsmanship.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10 ">
                                <div class="wt-team-media ">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-2.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">New Construction:</a></h4>
                                    <p>Whether you&#39;re building from the ground up or embarking on a
                                        major renovation project, Basumati Incorporation brings years of expertise and
                                        innovation to every new construction endeavor. We work closely with clients to bring
                                        their vision to life while adhering to the highest standards of quality and safety.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-3.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Design-Build:</a></h4>
                                    <p>As proponents of integrated project delivery, Basumati Incorporation
                                        offers design-build services to streamline the construction process and optimize
                                        project outcomes. By combining design and construction under one roof, we
                                        minimize risks, improve efficiency, and deliver superior results.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        {{-- <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-4.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Key Leadership Team Members:</a></h4>
                                    <p>Basumati Incorporation thrives on the expertise and dedication of its diverse team. From
                                        skilled engineers to meticulous craftsmen, every member plays a vital role in delivering top-
                                        notch construction and repair services to our clients.</p>
                                    <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>--}}
                        
                    </div>
                </div>
            
            </div>
        </div>

        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
            <div class="container">
            
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Repair and Renovation Service</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p></p>
                </div>
                <!-- TITLE END -->
                
                <div class="section-content">
                    <div class="row">
                    
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-1.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Building Repairs:</a></h4>
                                    <p>Basumati Incorporation specializes in repairing and restoring
                                        buildings to their former glory. Whether it&#39;s fixing structural damage, addressing
                                        water infiltration issues, or restoring historical properties, our skilled craftsmen have
                                        the expertise to handle any repair challenge with precision and care.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10 ">
                                <div class="wt-team-media ">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-2.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Renovations:</a></h4>
                                    <p>Transform your space with Basumati Incorporation&#39;s renovation
                                        services. Whether you&#39;re updating your home, office, or commercial space, our team
                                        of experts will work with you to create a customized renovation plan that meets your
                                        needs, budget, and timeline.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!-- <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-3.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Maintenance Services:</a></h4>
                                    <p>Keep your property in top condition with Basumati
                                        Incorporation&#39;s maintenance services. From routine inspections and preventive
                            maintenance to emergency repairs and ongoing support, we offer comprehensive
                                    maintenance solutions to protect your investment and ensure long-term durability.</p>
                                       {{--  <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div> 
                        <!-- COLUMNS 4 -->
                        {{-- <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-4.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">John Halpern</a></h4>
                                    <p>Building Worker</p>
                                        <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
            
            </div>
        </div>
        
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
            <div class="container">
            
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Additional Services</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p></p>
                </div>
                <!-- TITLE END -->
                
                <div class="section-content">
                    <div class="row">
                    
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-1.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Consulting:</a></h4>
                                    <p>Basumati Incorporation provides expert consulting services to guide
                                    clients through every stage of the construction process. From feasibility studies and
                                    project planning to cost estimation and regulatory compliance, our experienced
                                    consultants offer strategic insights and solutions to help you achieve your goals.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one bg-white p-a10 ">
                                <div class="wt-team-media ">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-2.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Project Management:</a></h4>
                                    <p>Trust Basumati Incorporation to oversee your construction
                                        project from start to finish. Our dedicated project managers ensure seamless
                                        coordination, clear communication, and timely delivery, allowing you to focus on your
                                        core business while we handle the details.</p>
                                    {{-- <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        {{-- <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!-- <a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-3.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Tommy Atkins</a></h4>
                                    <p>Building Worker</p>
                                        <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div> --}}
                        <!-- COLUMNS 4 -->
                        {{-- <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-4.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">John Halpern</a></h4>
                                    <p>Building Worker</p>
                                    <ul class="social-icons social-square social-dark m-b0">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
            
            </div>
        </div>
      
  
        <!-- OUR TEAM MEMBER SECTION END -->
        
        <!-- OUR CLIENT SLIDER START -->
        {{-- <div class="section-full p-t80 p-b50">
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
        
        </div> --}}
        <!-- OUR CLIENT SLIDER END -->  
                            
    </div>
    <!-- CONTENT END -->

@endsection