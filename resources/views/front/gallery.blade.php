@extends('front.layout.app')

@section('content')

<!-- CONTENT START -->
<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/gallery-banner.jpg)">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Gallery</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
    
    <!-- CONTENT SECTION START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

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
            <!-- PAGINATION TOP END -->
            
            <!-- GALLERY CONTENT START -->
           
            <div class="portfolio-wrap mfp-gallery row no-col-gap">
            
                <!-- COLUMNS 1 --> 
                <div class="masonry-item cat-1 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="javascript:void(0);">
                                <img src="images/latest-projects/pic1.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic1.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 2 --> 
                <div class="masonry-item cat-2 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic2.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic2.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 3 --> 
                <div class="masonry-item cat-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic3.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic3.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 4 --> 
                <div class="masonry-item cat-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic4.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic4.jpg" class="mfp-link m-b15">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 5 --> 
                <div class="masonry-item cat-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic5.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic5.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 6 --> 
                <div class="masonry-item cat-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic6.jpg"  alt="">
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
                <div class="masonry-item cat-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic7.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="images/gallery/pic7.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 8 --> 
                <div class="masonry-item cat-2 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx p-lr15">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="portfolio-detail.html">
                                <img src="images/latest-projects/pic8.jpg"  alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="portfolio-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a  href="images/gallery/pic8.jpg" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
           
            <!-- GALLERY CONTENT END -->
            
            <!-- PAGINATION START -->
            <div class="pagination-bx  clearfix ">
                <ul class = "custom-pagination pagination-1">
                   <li><a href = "#">&laquo;</a></li>
                   <li class = "active"><a href = "#">1</a></li>
                   <li><a href = "#">2</a></li>
                   <li><a href = "#">3</a></li>
                   <li><a href = "#">4</a></li>
                   <li><a href = "#">5</a></li>
                   <li><a href = "#">&raquo;</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->
            
        </div>
    </div>
    <!-- CONTENT SECTION END  -->

</div>
<!-- CONTENT END -->

@endsection