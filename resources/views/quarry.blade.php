@extends('layouts.app')
<style>
    .mfp-gallery {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: flex-end;
    }

    .masonry-item {
    /* background-color: #3498db; */
    background-image: url(frontend/assets/img/Rectangle%209.png);
    padding: 10px 15px;
    margin-bottom: 10px;
    list-style: none;
    width: 80%;
    position: relative;
    border-radius: 5px;
    margin-top: 5px;
    border: 2px solid #EDEDED; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}


.query-link {
    color: #ffffff;
    text-decoration: none;
    display: block;
    text-align: center;
    margin:10px;
}

.query-link:hover,
.query-link.active {
    color: #fff;
    background-color: #6FA0B5;
    border-radius: 8px;
}

.container-section {
    margin-top: -130px;
}

.container .query-link {
    font-weight: 600;
}

@media only screen and (max-width: 768px) {
        .col-lg-2,
        .col-lg-10 {
            width: 100%;
        }

        .masonry-outer {
            text-align: center;
            margin-left: 15%;
        }

        .mfp-img-item {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
        }

        .mfp-img-item img {
            width: 100%; /* Adjust the width of the image as needed */
            max-width: 100%; /* Ensure images do not exceed their container */
           
        }
    }

</style>
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
                        		<h2 class="m-tb0">Our Quarry</h2>
                                <p>Here at Kalpa Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs and Cut size slabs.</p>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2" style="visibility: hidden">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Our Quarry</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <div class="banner-container" style="background-image: url('frontend/assets/img/quarry.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
            <div class="nine">
                <h1>QUARRIES<span>"Beyond Stones: Crafting Foundations for Success."</span></h1>
              </div>

              <style>

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
      font-size: 14px;
      color: #444;
      word-spacing: 1px;
      font-weight: normal;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-family: "Raleway", sans-serif;
      font-weight: 500;
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: auto;
      grid-gap: 10px; 
      align-items: center;
    }

    .nine {
      padding-top: 4rem;
    }

    .nine h1 span:after,
    .nine h1 span:before {
      content: " ";
      display: block;
      border-bottom: 1px solid #ccc;
      border-top: 1px solid #ccc;
      height: 3px; 
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

        <div class="section-full p-tb80 inner-page-padding">
            <div class="container">
                <!-- Filter Nav START -->
                
                <!-- Filter Nav END -->
                
                <!-- GALLERY CONTENT START -->
                    <div class="col-lg-12">
                        <div class="row ">

                    <!-- LEFT COLUMN - QUERY NAMES -->
                    <div class="col-lg-6">
                        <ul class="masonry-outer work-grid">
                            <li class="masonry-item cat-1">
                                @foreach ($quarr as $quarry)
                                    <a href="#" class="query-link" data-images="{{ $quarry->avatar . '|' . $quarry->avatar2 . '|' . $quarry->avatar3 . '|' . $quarry->avatar4 . '|' . $quarry->avatar5 }}" >
                                        {{ $quarry->name }}
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    
                    <!-- RIGHT COLUMN - QUERY IMAGES -->
                    <div class="col-lg-6">
                        <div class="mfp-gallery row">
                            @foreach ($quarr as $quarry)
                                <div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px;  ">
                                    @if ($quarry->avatar)
                                    <a class="mfp-link" href="{{ asset('storage/images/' . $quarry->avatar) }}">
                                        <img src="{{ asset('storage/images/' . $quarry->avatar) }}" alt="" style="width: 60% ;margin-left:50px;">
                                    </a>
                                    @endif
                                </div>
                                <div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px; ">
                                    @if ($quarry->avatar2)
                                    <a class="mfp-link" href="{{ asset('storage/images/' . $quarry->avatar2) }}">
                                        <img src="{{ asset('storage/images/' . $quarry->avatar2) }}" alt="" style="width: 60% ;margin-left:50px;">
                                    </a>
                                    @endif
                                </div>
                                <div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px; ">
                                    @if ($quarry->avatar3)
                                    <a class="mfp-link" href="{{ asset('storage/images/' . $quarry->avatar3) }}">
                                        <img src="{{ asset('storage/images/' . $quarry->avatar3) }}" alt="" style="width: 60% ;margin-left:50px;">
                                    </a>
                                    @endif
                                </div>
                                <div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px; ">
                                    @if ($quarry->avatar4)
                                    <a class="mfp-link" href="{{ asset('storage/images/' . $quarry->avatar4) }}">
                                        <img src="{{ asset('storage/images/' . $quarry->avatar4) }}" alt="" style="width: 60% ;margin-left:50px;">
                                    </a>
                                    @endif
                                </div>
                                <div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px; ">
                                    @if ($quarry->avatar5)
                                    <a class="mfp-link" href="{{ asset('storage/images/' . $quarry->avatar5) }}">
                                        <img src="{{ asset('storage/images/' . $quarry->avatar5) }}" alt="" style="width: 60% ;margin-left:50px;">
                                    </a>
                                    @endif
                                </div>
                     
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
                <!-- GALLERY CONTENT END -->
            </div>
        </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Define the base path for images
        var basePath = "{{ asset('storage/images/') }}/";

        // Handle query name click to show corresponding images
        $('.query-link').on('click', function (e) {
            e.preventDefault();
            var imagePaths = $(this).data('images').split('|');

            // Populate the right column with the clicked query's images
            var imageContainer = $('.mfp-gallery');
            imageContainer.empty();

            imagePaths.forEach(function (imagePath) {
                var fullImagePath = basePath + imagePath;
                if(imagePath){

                    var imageItem = '<div class="mfp-img-item " style="width: auto;margin-top: 10px;margin-bottom: 10px; "><a class="mfp-link" href="' + fullImagePath + '"><img src="' + fullImagePath + '" alt="" style="width: 60%;" ></a></div>';
                    imageContainer.append(imageItem);
                }
            });
        });
    });
</script>

<script>
    // Add an 'active' class to the currently active link
    document.addEventListener('DOMContentLoaded', function () {
        var links = document.querySelectorAll('.query-link');
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                links.forEach(function (otherLink) {
                    otherLink.classList.remove('active');
                });
                link.classList.add('active');
            });
        });
    });
</script>

{{-- <script>
    $(document).ready(function () {
        // Define the base path for images
        var basePath = "{{ asset('storage/images/') }}/";

        // Handle query name click to show corresponding images
        $('.query-link').on('click', function (e) {
            e.preventDefault();
            var imagePaths = $(this).data('images').split('|');

            // Populate the right column with the clicked query's images
            var imageContainer = $('.mfp-gallery');
            imageContainer.empty();

            imagePaths.forEach(function (imagePath) {
                // console.log(imagePath);
                var fullImagePath = basePath + imagePath;
                var imageItem = '<div class="mfp-img-item"><a class="mfp-link" href="' + fullImagePath + '"><img src="' + fullImagePath + '" alt=""></a></div>';
                imageContainer.append(imageItem);
            });
        });
    });
</script> --}}




			<!-- SECTION CONTENT START -->
  
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->


  
 @endsection
