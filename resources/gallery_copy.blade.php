@extends('layouts.app')

@section('content')
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <!--<div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ URL::asset('frontend/images/banner/6.jpg') }});">-->
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name" style="visibility: hidden">
                        		<h2 class="m-tb0">Our Gallery</h2> 
                                <p>Here at Kalpa Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs and Cut size slabs.</p>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2" style="visibility: collapse">
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
                 
                    <!-- Filter Nav END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <ul  class="masonry-outer mfp-gallery work-grid row clearfix list-unstyled">
                     
                        <!-- COLUMNS 1 -->
                        @if($gallery->isNotEmpty())
                        @foreach($gallery as $row)
                        <li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="text-center">
                                    <div class="sx-thum-bx custom-img">
                                        <img src="{{ asset('storage/images/'.$row->avatar) }}" alt="" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">>
                                    </div>
                                </div>
                                
                                <a class="mfp-link" href="{{ asset('storage/images/'.$row->avatar) }}">
                                    <!--<i class="fa fa-arrows-alt"></i>-->
                                </a>                                            
                           </div>
                        </li>
                        
                        @endforeach

                        @else 
                            <div>
                                <h2>No Project found</h2>
                            </div>
                        @endif
                                                        
                     </ul>
                     {{-- {{ $gallery->links() }} --}}
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

        <style>
            .sx-thum-bx img{
                border: 8px solid #d1f1ff00; 
                border-radius: 15px;
                max-width: 100%;
            }
            .sx-thum-bx .sx-tilte {
                position: absolute;
                top: 8px;
                left: 150px;
                display: flex;
                background: rgba(0, 0, 0, 0.5);
                color: #fff; 
            }

            .container-section {
                margin-top: -130px;
            }
        </style>

 @endsection
