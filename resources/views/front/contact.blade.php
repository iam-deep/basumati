@extends('front.layout.app')

@section('content')
        
<!-- CONTENT START -->
<div class="page-content">
        
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact 3</li>
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
                                <p class="text-gray-dark">+91 564 548 4854</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Email address</h5>
                                <p class="text-gray-dark">thewebmaxinfo@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Address info</h5>
                                <p class="text-gray-dark">252 W 43rd St New York, NY</p>
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin" width="600" height="450"></iframe>
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
                    
                            <form class="cons-contact-form" method="post" action="https://thewebmax.org/build/form-handler.php">
                    
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