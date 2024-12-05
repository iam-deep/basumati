@extends('front.layout.app')

@section('content')
        
<!-- CONTENT START -->
<div class="page-content">
        
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
     
    <!-- SECTION CONTENTG START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
        
            <!-- CONTACT DETAIL BLOCK -->
            <div class="section-content m-b30">

                <div class="row">
                
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Phone number</h5>
                                <p class="text-gray-dark">+9051077126<br><br></p>
                            
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Email address</h5>
                                <p class="text-gray-dark">basumatiincorporation@gmail.com <br><br></p>
                           
                            </div>
                        </div>
                    </div>
             

                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Address info</h5>
                                <p class="text-gray-dark"> 20, Dr Lal Mohan Bhattacharya Rd, Raja Bazar, Kolkata, West Bengal 700014</p>
                            
                            </div>
                        </div>
                    </div>
                
                </div>
  
            </div>
            
            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="section-content m-b50">
                <div class="row">
                
                    <!-- LOCATION BLOCK-->
                    <div class="wt-box col-md-6">
                    
                         <h4 class="text-uppercase">Location</h4>
                        <div class="wt-separator-outer m-b30">
                           <div class="wt-separator style-square">
                               <span class="separator-left site-bg-primary"></span>
                               <span class="separator-right site-bg-primary"></span>
                           </div>
                       </div>      
                                                

                        <div class="gmap-outline m-b30">
                            <div id="gmap_canvas" class="google-map">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="504" height="313" id="gmap_canvas" src="https://maps.google.com/maps?q=Basumati+Incorporation&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://online.stopwatch-timer.net"></a><br><a href="https://www.timeronline.net"></a><br><style>.mapouter{position: relative;text-align: right;height: 313px;width: 504px;}</style><a href="https://www.ongooglemaps.com">insert google map html</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 313px;width: 504px;}</style></div></div>
                            </div>
                        </div>
                            
                    </div>

                    <!-- CONTACT FORM-->
                    <div class="wt-box col-md-6">
                    
                        <h4 class="text-uppercase">Contact Form </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                               <span class="separator-left site-bg-primary"></span>
                               <span class="separator-right site-bg-primary"></span>
                            </div>
                            
                        </div>
                    
                        <div class="p-a30 bg-gray">
                    
                            <form class="cons-contact-form" method="post" action="">
                    
                                <div class="row">
                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="username" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea name="message" rows="1" class="form-control " required placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                        <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset  <i class="fa fa-angle-double-right"></i></button>
                                    </div>
    
                                </div>

                            </form>
                        
                        </div>
                
                    </div>
                    
                </div>
            </div>
            
        </div>
   </div>
    <!-- SECTION CONTENT END -->
    
</div>
<!-- CONTENT END -->

@endsection