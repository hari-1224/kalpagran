@extends('layouts.app')
<style>
    .sx-thum-bx img {
        border-radius: 10px;
        border: 5px solid #209dd8;
        margin-bottom: 35px;
    }

    .image-container {
        position: relative;
    }

    .image-overlay {
        position: absolute;
        top: 5px;
        left: 5px;
        display: flex;

        background: rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    #image-container img {
        border: 8px solid #d1f1ff00;
        border-radius: 15px;
        max-width: 30%;
    }

    .horizontal-images {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        opacity: 0;
        transition: opacity 1.3s, transform 1.3s;
        transform: translateY(100%);
    }

    .container .product {
        /* margin-top: -50px; */
        padding-top: 2rem;
    }

    .show-all-button {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap; 
    }

    #product-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .product-button {
        margin: 0 5px; 
    }

    #image-container img {
        /* max-width: 100%; */
        margin-bottom: 10px; 
    }
    

    @media only screen and (max-width: 768px) {
        .show-all-button,
        #product-buttons {
            flex-direction: column;
            align-items: center;
        }

        .product-button {
            margin: 5px 0;
            width: 100%;
        }

        #image-container img {
            max-width: 100%; 
        }
        .mb-4.text-center h3 {
            margin-top: -180px; 
        }
    }

    .container .btn {
        font-size: 16px;
        font-weight: 600;
    }



  @media (max-width: 767px) {
    .header-banner {
      margin-top: 18%;
    }
  }

</style>





@section('content')
<!-- CONTENT START -->
<div class="page-content">
    <div class="banner-container header-banner" style="background-image: url('frontend/assets/img/productss.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
    <!-- INNER PAGE BANNER -->
    <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="sx-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name" style="visibility: hidden;">
                        <h2 class="m-tb0">Our Products</h2>
                        <p>Here at Kalpa Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs
                            and Cut size slabs.</p>
                    </div>
                </div>
                
                <!-- BREADCRUMB ROW -->
                
                <div class="product">
                    <ul style="visibility:hidden">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <!--<li>Our Products</li>-->
                    </ul>
                    

                        <div class="container" style="margin-top: -11%;">
                            <div class="mb-4 text-center">
                                
                                <h3><b>Natural Stones From Top Marbles And Granite Suppliers<b></h3>
                            </div>

                            
                            <div class=" justify-content-center align-items-center show-all-button">
                                
                                    <button class="btn btn-primary btn-sm mx-1 mb-2 product-button"
                                        data-image-name="show-all" type="button" id="show-all" >Show All</button>
                                <div class="">
                                    <div id="product-buttons" class="mb-2 ">
                                        @foreach ($products as $product)
                                        <button class="btn btn-primary btn-sm mx-1 product-button"
                                            data-image-name="{{ $product->name }}" >{{ $product->name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>

                </div>
            </div>
        </div>
        
    </div>
    
</div>


<!-- BREADCRUMB ROW END -->
</div>
</div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- SECTION CONTENT START -->
<div class="search-results-container">

</div>
<div class="section-full p-tb80 inner-page-padding">
    <div class="container">
        <div id="image-container" class="text-center mt-4 mb-4 ">
            <!-- The image will be displayed here -->
        </div>

        <div class="para">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar massa at libero rhoncus, eget ullamcorper nunc feugiat. Quisque dapibus nec nunc eget tristique. Suspendisse potenti. Duis gravida nec justo id cursus. Proin vel magna eget libero luctus scelerisque. Vestibulum eget tincidunt nisl, vel fermentum risus. Suspendisse potenti. Morbi non elit ac dui ullamcorper ultrices. Vivamus tincidunt ullamcorper ligula, in ultricies libero feugiat vel. Nam a fermentum tellus. Phasellus vitae dui nisl.</p>
      
          <p>Nullam venenatis leo non mi ultricies, a bibendum turpis interdum. Sed nec fermentum orci, eget euismod sapien. Nam ut justo ac neque vulputate mattis. Fusce non libero urna. Curabitur vestibulum risus vel varius tincidunt. Ut sit amet libero et leo efficitur tincidunt. Suspendisse potenti. Vivamus at bibendum justo, a suscipit turpis. Fusce in semper justo, id ullamcorper turpis. Aenean semper ligula nec nisi efficitur, id commodo lectus sagittis. Nullam aliquet euismod justo, id laoreet sem vestibulum a. Maecenas quis ex vel tortor convallis sollicitudin. Donec vel enim id sem pellentesque dignissim vel a nisi. Nulla facilisi.</p>
      
          <p>Curabitur bibendum justo vel dolor volutpat, sit amet gravida neque suscipit. Pellentesque eu lacus vel neque bibendum venenatis. Ut quis risus a justo ullamcorper cursus. Integer cursus ipsum at odio tincidunt, eget aliquet ligula consequat. Curabitur a aliquam mi. Vestibulum nec urna sit amet metus sollicitudin convallis. Proin euismod, sem nec tristique dapibus, erat lacus vehicula orci, vel efficitur lacus libero nec sapien. Fusce malesuada metus in dolor egestas, in congue nisi bibendum.</p>
      
          <p>Donec non mauris sit amet lectus sagittis varius. In hac habitasse platea dictumst. Sed consectetur felis vel metus blandit, at tincidunt odio vestibulum. Vivamus accumsan ex vel lacus euismod, vel commodo velit euismod. Fusce nec dolor arcu. Nam ac turpis a libero fermentum convallis. Quisque id mauris ligula. Etiam euismod quam vel accumsan tristique. Nam vel quam nec nunc vestibulum laoreet non in augue. Nam ac facilisis dui. Integer vel accumsan sapien, at ullamcorper ex.</p>
      </div>

    </div>


</div>
<!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->
{{-- <style>
    #image-container img {
        border: 5px solid #209dd8;
        border-radius: 10px;
        max-width: 100%;
    }
</style> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function loadImage(productName) {
  var imageContainer = $('#image-container');
  imageContainer.empty();

  var loadingAnimation = $('<div>Loading...</div>').css({
    'background-color': '#fff',
    'border': '1px solid #ccc',
    'padding': '10px',
    'text-align': 'center',
  });

  imageContainer.append(loadingAnimation);

  $.ajax({
    type: 'GET',
    url: '{{ route('get-product-image') }}',
    data: { name: productName },
    beforeSend: function() {
      loadingAnimation.show();
    },
    success: function(data) {
      imageContainer.empty();

      if (data.image_urls && data.image_urls.length > 0) {
        data.image_urls.forEach(function(imageUrl) {
          // Create an image element with the original size
        //   var imageItem = $('<img src="' + imageUrl + '" alt="Image">');

          var imageItem = $('<img src="' + imageUrl + '" alt="Image">');
        //   var productNameDiv = $(' <div class="image-overlay"><h4 class="sx-title m-t0">product->name</h4></div>');
        //     imageContainer.append(imageItem, productNameDiv);
          imageContainer.append(imageItem);
        });

        setTimeout(function() {
          imageContainer.find('img').css({
            'opacity': 1,
            'transform': 'translateY(0)',
          });
        }, 10);
      } else {
        imageContainer.html('No images found');
      }
      loadingAnimation.hide();
    },
    error: function(xhr) {
      $('#image-container').html('Error: Images not found');
      loadingAnimation.hide();
    }
  });
}
$(document).ready(function() {
  // Default productName
  var defaultProductName = 'show-all';

  // Call the function with the default productName
  loadImage(defaultProductName);

  $('.product-button').click(function(e) {
    e.preventDefault();
    var productName = $(this).data('image-name');

    // Call the function with the clicked productName
    loadImage(productName);
  });
});

</script>





@endsection