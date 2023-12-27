@extends('layouts.app')

@section('content')
        <!-- CONTENT START -->
        <div class="page-content">
        
            
            <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ URL::asset('frontend/images/banner/6.jpg') }});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-tb0">OUR CLIENTS</h2>
                            </div>
                        </div>
                        
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>clients</li>
                                </ul>
                            </div>
                        
                    </div>
                </div>                
            </div>
             
         
            <div class="section-full  mobile-page-padding bg-gray  p-t80 p-b10 bg-repeat" style="background-image:url({{ asset('frontend/images/background/bg-12.jpg')}});">
            	
				<div class="container">
                
                  
					<!--<div class="section-head">-->
					<!--	<div class="sx-separator-outer separator-left">-->
					<!--		<div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url({{ asset('frontend/images/background/cross-line2.png')}})">-->
					<!--			<h3 class="sep-line-one">Our Clients</h3>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>                   -->
                   
					<div class="section-content">
                    	<div class="client-grid m-b40">
                        
                        	<div class="row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo1.png')}}" alt="">
                                      <div>
                                        <span>View More</span>
                                      </div>                                      
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                        
                                    <img src="{{ asset('frontend/images/client-logo/logo2.png')}}" alt=""> 
                                      <div>
                                        <span>View More</span>
                                      </div>                                     
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo3.png')}}" alt="">
                                      <div>
                                        <span>View More</span>
                                      </div>                                      
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo4.png')}}" alt=""> 
                                      <div>
                                        <span>View More</span>
                                      </div>                                     
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo5.png')}}" alt="">
                                      <div>
                                        <span>View More</span>
                                      </div>                                      
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo6.png')}}" alt="">
                                      <div>
                                        <span>View More</span>
                                      </div>                                      
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo7.png')}}" alt="">
                                      <div>
                                        <span>View More</span>
                                      </div> 
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6  m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                    <img src="{{ asset('frontend/images/client-logo/logo8.png')}}" alt=""> 
                                      <div>
                                        <span>View More</span>
                                      </div>
                                    </a>
                                </div>
                            </div>

                                                                                   
                        </div>
                    </div>
                </div>
                
                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong>Clients</strong>
                </div>                     
             </div>   
          
            
            
        </div>
        <!-- CONTENT END -->
 @endsection