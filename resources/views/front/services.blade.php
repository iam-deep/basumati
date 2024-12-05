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
        
  
        <div class="section-full p-t80 p-b50 bg-gray">
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
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion9">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9">
                                                <i class="fa fa-globe"></i>
                                                High Rise Building Construction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                Road Construction &amp; Repair
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree9" class="collapsed">
                                                <i class="fa fa-cog"></i>
                                                Design for Business Center
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
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
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion9">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9">
                                                <i class="fa fa-globe"></i>
                                                High Rise Building Construction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                Road Construction &amp; Repair
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree9" class="collapsed">
                                                <i class="fa fa-cog"></i>
                                                Design for Business Center
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
  
        <div class="section-full p-t80 p-b50 bg-gray">
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
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion9">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9">
                                                <i class="fa fa-globe"></i>
                                                High Rise Building Construction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                Road Construction &amp; Repair
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree9" class="collapsed">
                                                <i class="fa fa-cog"></i>
                                                Design for Business Center
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Web design lorem Ipsum is simply dummy text of the printing and typesetting and industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of
                                            type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was
                                            popularised sheets containing lorem Ipsum passagese.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTENT END -->

@endsection