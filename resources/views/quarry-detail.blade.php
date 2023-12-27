@extends('layouts.app')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ URL::asset('frontend/images/banner/2.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="sx-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="m-tb0">{{ $quarry->name }} Details</h2>
                            <p>{{ $quarry->quarry_id }}</p>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->                            
                    
                        <div>
                            <ul class="sx-breadcrumb breadcrumb-style-2">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li>Quarry-detail</li>
                            </ul>
                        </div>
                    
                    <!-- BREADCRUMB ROW END -->                        
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        
        <!-- SECTION CONTENT START -->
        <div class="section-full p-tb80 inner-page-padding stick_in_parent">
            <div class="container">
                <div class="row">
                    <div  class="col-lg-7 col-md-7  sticky_column">
                        <div  class="project-detail-containt">
                            <div class="bg-white text-black">
                                <h3>Kalpa granite quarry relies on rock-solid reliability</h3>
                                <p>{{ $quarry->remark }}</p>
                                
                           <div class="product-block">
                                <ul>
                                  <li>
                                    <h4 class="m-b10">Date</h4>
                                    <p>{{ $quarry->start }}</p>
                                  </li>
                                  <li>
                                    <h4 class="m-b10">Name</h4>
                                    <p>{{ $quarry->name }}</p>
                                   </li>
                                  <li>
                                    <h4 class="m-b10">Material type</h4>
                                    <p>{{ $quarry->material }}</p>
                                  </li>
                                  <li>
                                    <h4 class="m-b10">Location</h4>
                                    <p>{{ $quarry->address }}</p>
                                  </li>
                                  <li>
                                    <h4 class="m-b10">Year</h4>
                                    <p>{{ $quarry->year }}</p>
                                  </li>                                          
                              </ul>
                            </div>  
                                
                                
                                <div class="m-b0">
                                    <div class="sx-divider divider-1px  bg-black"><i class="icon-dot c-square"></i></div>
                                </div>                                
                                <ul class="social-icons social-square social-darkest m-b0">
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
                
                    <div class="col-lg-5 col-md-5 ">
                
                        <div class="project-detail-outer">
    
                            <div class="project-detail-pic m-b30">
                                <div class="sx-media">
                                    <img src="/storage/images/{{ $quarry->avatar }}" alt="">
                                </div>
                            </div>
        
                            <div class="project-detail-pic m-b30">
                                <div class="sx-media">
                                    <img src="/storage/images/{{ $quarry->avatar2 }}" alt="">
                                </div>
                            </div>                        	
        
                            <div class="project-detail-pic m-b30">
                                <div class="sx-media">
                                    <img src="/storage/images/{{ $quarry->avatar3 }}" alt="">
                                </div>
                            </div> 
                            <div class="project-detail-pic m-b30">
                                <div class="sx-media">
                                    <img src="/storage/images/{{ $quarry->avatar4 }}" alt="">
                                </div>
                            </div>   
                            <div class="project-detail-pic m-b30">
                                <div class="sx-media">
                                    <img src="/storage/images/{{ $quarry->avatar5 }}" alt="">
                                </div>
                            </div>                          	
    
                            <div class="sx-box">
                                <div class="sx-thum-bx sx-img-overlay1 sx-img-effect yt-thum-box">
                                    <img src="../../img.youtube.com/vi/Oy2QIiSQT2U/0.jpg')}}" alt="">
                                    <a href="https://www.youtube.com/watch?v=OfFFZnOtqFQ" class="mfp-video play-now">
                                        <i class="icon fa fa-play"></i>
                                        <span class="ripple"></span>
                                    </a>
                                </div>
                            </div>                   	
    
                        </div>
                    </div>
                    
                </div>
                <div  class="project-detail-containt-2 m-t50">
                    <h3>Creating a sustainable future through building preservation, green architecture, and smart design</h3>
                    <p class="m-b0"> Here at Kalpa Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs and Cut size slabs. Manufacturers of Granite slabs and Cut size slabs, Granite slabs and suppliers, Exporters of  Granite Slabs and Cut size slabs. We believe in total customer satisfaction. Our Staff are highly trained to provide professional and courteous customer service and a desire to share our love of Kalpa Granites. We’ll assist you every step of the way in adding natural beauty to your life. We will assist and supply in 3D design flooring and Border designs. We will add value to your home with granite and Marble.</p>
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END  -->
        
        <!-- Similar projects START -->

        <div class="section-full p-tb80 bg-gray inner-page-padding">
            <div class="container">
                <div class="section-content">
                    <!-- TITLE START -->
                    <div class="section-head">
                        <div class="sx-separator-outer separator-left">
                            <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                <h3 class="sep-line-one">Similar Quarries</h3>
                            </div>
                        </div>
                    </div>                   
                    <!-- TITLE END -->                                 
                    <div class="work-carousel-outer">
                        <div class="owl-carousel mfp-gallery project-carousel project-carousel3 owl-btn-vertical-center p-lr80">
                          
                        @foreach($quarryy as $row)
                          
                            <div class="item">
                                <div class="project-mas m-a30">
                                    <div class="image-effect-one">
                                        <img src="/storage/images/{{ $row->avatar }}" alt="">
                                        <div class="figcaption">
                                            <a class="mfp-link" href="images/projects/portrait/pic1.jpg">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>  
                                        </div>
                                    </div> 
                                    <div class="project-info p-t20">
                                        <h4 class="sx-tilte  m-t0"><a href="javascript:;">{{ $row->name }}</a></h4>
                                        <p>{{ $row->remark }}</p>
                                        <a href="#"><i class="link-plus bg-primary"></i></a>
                                    </div>
                                </div>                                                       
                            </div>
                        @endforeach
                                                                                                                                                     
                         </div>
                    </div> 
                 </div>
             </div>
         </div>           

        <!-- Similar projects END -->            

    </div>
    <!-- CONTENT END -->
 @endsection
