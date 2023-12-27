@extends('layouts.app')

@section('content')
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ URL::asset('frontend/images/banner/6.jpg') }});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-tb0">Our Gallery</h2>
                                <p>Here at Sun Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs and Cut size slabs.</p>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Our Gallery</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 inner-page-padding">
            	<div class="container">
                    <!-- Filter Nav START -->
                  <div class="filter-wrap p-b30 text-center">
                        <ul class="filter-navigation masonry-filter clearfix">
                            <li class="active"><a class="btn from-top" data-filter="*" href="#" data-hover="All">All</a></li>
                            <li><a class=" btn from-top" data-filter=".cat-1" href="#">Rough Block</a></li>
                            <li><a class=" btn from-top" data-filter=".cat-2" href="#">Process</a></li>
                            <li><a class=" btn from-top" data-filter=".cat-3" href="#">Marble</a></li>
                            <li><a class=" btn from-top" data-filter=".cat-4" href="#">Export </a></li>
                            <li><a class=" btn from-top" data-filter=".cat-5" href="#">Tiles</a></li>
                        </ul>
                    </div>
                    <!-- Filter Nav END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <ul  class="masonry-outer mfp-gallery work-grid row clearfix list-unstyled">
                     
                        <!-- COLUMNS 1 -->
                        <li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic1.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Block Dressing</a></h4>
                                    <p class="m-b0">Rough Block</p>      
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic1.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 2 -->
                        <li class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic2.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Block Dressing</a></h4>
                                    <p class="m-b0">Rough Block</p>        
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic2.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 3 -->
                        <li class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic3.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Block Cutting</a></h4>
                                    <p class="m-b0">Rough Block</p>         
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic3.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 4 -->
                        <li class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic4.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Cut to size</a></h4>
                                    <p class="m-b0">Slabs</p>          
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic4.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 5 -->
                        <li class="masonry-item cat-5 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic5.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Cut to size</a></h4>
                                    <p class="m-b0">Slabs</p>             
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic5.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 6 -->
                        <li class="masonry-item cat-4 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic6.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Cut to size</a></h4>
                                    <p class="m-b0">Slabs</p>             
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic6.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 7 -->
                        <li class="masonry-item cat-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic7.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Rough Block</a></h4>
                                    <p class="m-b0">Block Cutting</p>            
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic7.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 8 -->
                        <li class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic8.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Slabs</a></h4>
                                    <p class="m-b0">Block </p>                  
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic8.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>
                        <!-- COLUMNS 9 -->
                        <li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="{{ asset('frontend/images/projects/portrait/pic5.jpg')}}" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="#">Slabs</a></h4>
                                    <p class="m-b0">Block </p>                     
                                </div>
                                <a class="mfp-link" href="images/projects/portrait/pic5.jpg">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </li>                                   
                     </ul>
                    <!-- GALLERY CONTENT END -->
{{--                     
                    <div class="text-center load-more-btn-outer" style="background-image:url(images/background/cross-line.png)">
                        <button class="site-button-secondry btn-half"><span>Load More</span></button>
                    </div> --}}
            	</div>

            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
 @endsection
