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
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
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
                    <h2 class="text-uppercase">Services Offered by Basumati Incorporation</h2>
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="{{ asset('assets/new-images/slider.png') }}" alt="">
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
                                                Construction Services
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            From residential homes to commercial buildings, Basumati
                                            Incorporation provides comprehensive general contracting services for projects of any
                                            scale or complexity. Our experienced team manages every aspect of the construction
                                            process, ensuring timely completion, adherence to budget, and superior craftsmanship.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                New Construction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            Whether you&#39;re building from the ground up or embarking on a
                                            major renovation project, Basumati Incorporation brings years of expertise and
                                            innovation to every new construction endeavor. We work closely with clients to bring
                                            their vision to life while adhering to the highest standards of quality and safety.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree9" class="collapsed">
                                                <i class="fa fa-cog"></i>
                                                Design-Build
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion9">
                                        <div class="acod-content p-tb15">
                                            As proponents of integrated project delivery, Basumati Incorporation
                                    offers design-build services to streamline the construction process and optimize project
                            outcomes. By combining design and construction under one roof, we minimize risks,
                                improve efficiency, and deliver superior results.
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion10">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9">
                                                <i class="fa fa-globe"></i>
                                                Building Repairs
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion10">
                                        <div class="acod-content p-tb15">
                                            Basumati Incorporation specializes in repairing and restoring
                                            buildings to their former glory. Whether it&#39;s fixing structural damage, addressing water
                                            infiltration issues, or restoring historical properties, our skilled craftsmen have the
                                            expertise to handle any repair challenge with precision and care.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                Renovations
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion10">
                                        <div class="acod-content p-tb15">
                                            Transform your space with Basumati Incorporation&#39;s renovation services.
Whether you&#39;re updating your home, office, or commercial space, our team of experts
will work with you to create a customized renovation plan that meets your needs,
budget, and timeline.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree9" class="collapsed">
                                                <i class="fa fa-cog"></i>
                                                Maintenance Services
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree9" class="acod-body collapse" data-bs-parent="#accordion10">
                                        <div class="acod-content p-tb15">
                                            Keep your property in top condition with Basumati
Incorporation&#39;s maintenance services. From routine inspections and preventive
maintenance to emergency repairs and ongoing support, we offer comprehensive
maintenance solutions to protect your investment and ensure long-term durability.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="{{ asset('assets/new-images/slider.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
  
        <div class="section-full p-t80 p-b50 bg-gray">
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <img src="{{ asset('assets/new-images/slider.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- ACCORDIAN  BG DARK -->
                        <div class="section-content">
                            <div class="wt-accordion acc-bg-dark" id="accordion11">
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne9">
                                                <i class="fa fa-globe"></i>
                                                Consulting
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion11">
                                        <div class="acod-content p-tb15">
                                            Basumati Incorporation provides expert consulting services to guide clients
                                            through every stage of the construction process. From feasibility studies and project
                                             planning to cost estimation and regulatory compliance, our experienced consultants
                                            offer strategic insights and solutions to help you achieve your goals.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo9" class="collapsed">
                                                <i class="fa fa-photo"></i>
                                                Project Management
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo9" class="acod-body collapse" data-bs-parent="#accordion11">
                                        <div class="acod-content p-tb15">
                                            Trust Basumati Incorporation to oversee your construction
                                    project from start to finish. Our dedicated project managers ensure seamless
                                    coordination, clear communication, and timely delivery, allowing you to focus on your
                                    core business while we handle the details.
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="panel wt-panel">
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- CONTENT END -->

@endsection