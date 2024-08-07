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
                    <li>Team</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->
        
            
        <!-- ABOUT COMPANY SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <!-- TITTLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">About Company</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
                    <h2 class="text-uppercase">Our team</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p>LEADRESHIP</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Founder/CEO Name:</a></h4>
                                    <p>With [X] years of experience in the construction industry</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Founder/CEO Name</a></h4>
                                    <p>is the visionary leader behind Basumati Incorporation. Their
                                        strategic vision, industry knowledge, and commitment to excellence set the tone for
                                        our company culture and guide our long-term growth and success.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Key Leadership Team Members:</a></h4>
                                    <p>Our leadership team comprises experienced
                                        professionals with diverse backgrounds in construction, engineering, project
                                        management, and business development. With their collective expertise and
                                        leadership, they ensure that Basumati Incorporation remains at the forefront of the
                                        industry, delivering innovative solutions and exceeding client expectations.</p>
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
                        <div class="col-lg-3 col-md-6 m-b30">
                            <div class="wt-team-one  bg-white p-a10">
                                <div class="wt-team-media">
                                    <!--<a href="our-team-detail.html"><img src="{{ asset('/assets') }}/images/our-team2/pic-4.jpg" alt=""></a>-->
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Key Leadership Team Members:</a></h4>
                                    <p>Basumati Incorporation thrives on the expertise and dedication of its diverse team. From
                                        skilled engineers to meticulous craftsmen, every member plays a vital role in delivering top-
                                        notch construction and repair services to our clients.</p>
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
                        
                    </div>
                </div>
            
            </div>
        </div>

        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
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
                    <p>ENGINEERING</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Civil Engineers:</a></h4>
                                    <p>Our team of civil engineers brings expertise in structural design,
                                        site planning, and project management. With their knowledge of engineering
                                        principles and building codes, they ensure that our projects are not only aesthetically
                                        pleasing but also structurally sound and safe.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Electrical Engineers:</a></h4>
                                    <p>Our electrical engineers are responsible for designing,
                                        installing, and maintaining electrical systems, including wiring, lighting, and power
                                        distribution. With their expertise in electrical engineering principles and safety
                                        regulations, they ensure that our buildings are powered safely and efficiently.</p>
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
        
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
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
                    <p>PROJECT MANAGEMENT</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Project Managers:</a></h4>
                                    <p>Our dedicated project managers are the backbone of Basumati
                                        Incorporation, overseeing every aspect of our construction and repair projects. From
                                        initial planning and procurement to execution and closeout, they ensure that projects
                                        are completed on time, within budget, and to the highest quality standards.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Site Supervisors:</a></h4>
                                    <p>Our experienced site supervisors play a crucial role in
                                        coordinating on-site activities, managing resources, and maintaining safety and
                                        quality standards. With their hands-on approach and attention to detail, they ensure
                                        that projects run smoothly and efficiently from start to finish.</p>
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
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
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
                    <p>SKILLED TRADES PEOPLE</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Carpenters:</a></h4>
                                    <p>Our team of skilled carpenters brings precision and craftsmanship to
                                        every project, whether it&#39;s framing, finishing, or custom woodworking. With their
                                        expertise and attention to detail, they ensure that every piece fits together
                                        seamlessly, creating beautiful and durable structures.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Masons:</a></h4>
                                    <p>From laying bricks to pouring concrete, our skilled masons are masters of
                                        their craft, building strong and enduring foundations, walls, and structures. With their
                                        expertise in masonry techniques and materials, they ensure that our projects stand
                                        the test of time.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Electricians and Plumbers:</a></h4>
                                    <p>Our team of licensed electricians and plumbers
                                        ensures that all electrical and plumbing systems are installed and maintained to the
                                        highest safety and quality standards. From wiring and lighting to pipes and fixtures,
                                        they ensure that our buildings are functional, efficient, and reliable.</p>
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
                    <h2 class="text-uppercase">Our team</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>
                    <p>SUPPORT STAFF</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Administrative Team:</a></h4>
                                    <p>Behind the scenes, our administrative team keeps Basumati
                                        Incorporation running smoothly, handling everything from scheduling and logistics to
                                        billing and customer service. With their professionalism and attention to detail, they
                                        ensure that our clients receive the support they need throughout the project lifecycle.</p>
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
                                    <h4 class="wt-team-title"><a href="our-team-detail.html">Customer Service Representatives:</a></h4>
                                    <p>Our dedicated customer service
                                        representatives are committed to providing exceptional service and support to our
                                        clients, addressing their questions, concerns, and feedback with care and
                                        professionalism. With their focus on client satisfaction, they ensure that every client&#39;s
                                        experience with Basumati Incorporation is positive and rewarding.</p>
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