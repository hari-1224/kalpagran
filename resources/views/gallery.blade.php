


@extends('layouts.app')

@section('content')
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
    <div class="banner-container" style="background-image: url('frontend/assets/img/galleries.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
     <div class="nine">
        <h1>Gallery<span>"Unearth the Extraordinary: Marbles and Granite That Define Luxury"</span></h1>
      </div>
    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-tb80 inner-page-padding">
        <div class="container">
            <!-- Filter Nav START -->
         
            <!-- Filter Nav END -->
            
            <!-- GALLERY CONTENT START -->
    <!-- ... existing code ... -->

    <!-- GALLERY CONTENT START -->
    <ul class="masonry-outer work-grid row clearfix list-unstyled">
        @if($gallery->isNotEmpty())
            @foreach($gallery as $row)
                {{-- <li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="sx-box image-hover-block">
                        <div class="text-center">
                            <div class="sx-thum-bx custom-img">
                                <a href="{{ asset('frontend/images/slide-1.jpg') }}" class="popup-link">
                                    <img src="{{ asset('frontend/images/slide-1.jpg') }}" alt="" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                                </a>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <li class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-12 m-b30">
                  <div class="sx-box   image-hover-block">
                      <div class="text-center">
                          <div class="sx-thum-bx custom-img">
                              <img src="{{ asset('storage/images/'.$row->avatar) }}" alt="" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
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
    
                     {{ $gallery->links() }} 
                    <!-- GALLERY CONTENT END -->
{{--                     
                    <div class="text-center load-more-btn-outer" style="background-image:url(images/background/cross-line.png)">
                        <button class="site-button-secondry btn-half"><span>Load More</span></button>
                    </div> --}}
            	</div>

            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
    <!-- GALLERY CONTENT END -->

    <!-- Initialize Magnific Popup -->
    <link rel="stylesheet" href="path/to/magnific-popup.css">
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
          $('.popup-link').magnificPopup({
            type: 'image',
            gallery: {
              enabled: true
            },
            mainClass: 'mfp-with-zoom mfp-img-mobile', 
          });
        });
      </script>

    <!-- ... existing code ... -->

@endsection


<style>
    .sx-thum-bx img {
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



/* === BASE HEADING === */ 

h1 {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 40px;
  color: #080808;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

h1 span {
  display: block;
  font-size: 0.5em;
  line-height: 1.3;
}
h1 em {
  font-style: normal;
  font-weight: 600;
}

.nine h1 {
  text-align:center; font-size:50px; text-transform:uppercase; color:#222; letter-spacing:1px;
  font-family:"Playfair Display", serif; font-weight:400;
  margin-top: -8%;
}
.nine h1 span {
  margin-top: 5px;
    font-size:15px; color:#444; word-spacing:1px; font-weight:normal; letter-spacing:2px;
    text-transform: uppercase; font-family:"Raleway", sans-serif; font-weight:500;

    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-template-rows: 27px 0;
    grid-gap: 20px;
    align-items: center;
}
.nine {
    padding-top: 8rem;
}
.nine h1 span:after,.nine h1 span:before {
    content: " ";
    display: block;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc;
    height: 5px;
  background-color:#f8f8f8;
}  

@media (max-width:700px) {
    .nine {
      text-align: center;
      margin: 20px;
    }

    h1 {
      position: relative;
      padding: 0;
      margin: 0;
      font-family: "Raleway", sans-serif;
      font-weight: 300;
      font-size: 40px;
      color: #080808;
      -webkit-transition: all 0.4s ease 0s;
      -o-transition: all 0.4s ease 0s;
      transition: all 0.4s ease 0s;
    }

    h1 span {
      display: block;
      font-size: 0.5em;
      line-height: 1.3;
    }

    h1 em {
      font-style: normal;
      font-weight: 600;
    }

    .nine h1 {
      text-align: center;
      font-size: 30px; /* Adjusted font size for smaller screens */
      text-transform: uppercase;
      color: #222;
      letter-spacing: 1px;
      font-family: "Playfair Display", serif;
      font-weight: 400;
    }

    .nine h1 span {
      margin-top: 5px;
      font-size: 14px; /* Adjusted font size for smaller screens */
      color: #444;
      word-spacing: 1px;
      font-weight: normal;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-family: "Raleway", sans-serif;
      font-weight: 500;
      display: grid;
      grid-template-columns: 1fr; /* Adjusted grid layout for smaller screens */
      grid-template-rows: auto;
      grid-gap: 10px; /* Adjusted grid gap for smaller screens */
      align-items: center;
    }

    .nine {
      padding-top: 4rem; /* Adjusted padding for smaller screens */
    }

    .nine h1 span:after,
    .nine h1 span:before {
      content: " ";
      display: block;
      border-bottom: 1px solid #ccc;
      border-top: 1px solid #ccc;
      height: 3px; /* Adjusted height for smaller screens */
      background-color: #f8f8f8;
    }

    /* Media query for screens less than 600px wide (typical mobile devices) */
    @media (max-width: 600px) {
      h1 {
        font-size: 20px;
      }

      h1 span {
        font-size: 12px;
      }

      .nine h1 {
        font-size: 24px;
      }

      .nine h1 span {
        font-size: 12px;
        grid-gap: 5px;
      }

      .nine {
        padding-top: 2rem;
      }

      .nine h1 span:after,
      .nine h1 span:before {
        height: 2px;
      }
    }
}


</style>



 