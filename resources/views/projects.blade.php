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

    .container .project {
        /* margin-top: -120px; */
        padding-top: 2rem;
    }

   .container .btn {
        font-weight: 600;
    }
</style>

<style>
    /* Your existing styles here */

    @media only screen and (max-width: 768px) {
        .show-all-button {
            flex-direction: column;
            align-items: center;
        }

        #project-buttons {
            flex-direction: column;
            text-align: center;
        }

        .project-button {
            width: 100%;
            margin-bottom: 10px;
        }

        #image-container img {
            max-width: 100%;
        }

        .row {
            flex-direction: column;
            align-items: center;
        }
    }
    @media (max-width: 767px) {
    .header-banner {
      margin-top: -22%;
    }
  }
  /* .para {
    font-size: 14px;
    font-weight: 600;
    margin-top: 1rem;
  } */
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
                        		<h2 class="m-tb0">Our Projects</h2>
                                <p>Here at Kalpa Granites PVT Ltd., Tamil Nadu, India. We are leading Granite Exporters of Slabs and Cut size slabs.</p>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div >
                                <ul class="sx-breadcrumb breadcrumb-style-2" style="visibility: hidden">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                   <!-- <li>Our Projects</li>-->
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="banner-container header-banner" style="background-image: url('frontend/assets/img/projects-banner.jpg');width:100%;padding-top:25%;background-size:cover;"></div>
            <div class="section-full p-tb80 inner-page-padding">

                    
            	<div class="container">
                    <!-- Filter Nav START -->
                 
                    <!-- Filter Nav END -->
                    
                     <!-- GALLERY CONTENT START -->

                     <div class="d-flex justify-content-center align-items-center show-all-button project">
                        <div class="text-center mt-2 mb-3">
                            <h3><b>"Unveiling Timeless Elegance: Our Captivating Granite and Marble Masterpieces"<b></h3>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center align-items-center show-all-button">
                        <div id="project-buttons" class="mb-4">
                            
                            <button data-category="International" class="btn btn-primary mx-2 project-button">International Projects</button>

                            <button data-category="Domestic" class="btn btn-primary mx-2 project-button">Domestic Projects</button>

                        </div>
                    </div>
                    
                    {{-- <div id="project-container" class="text-center mt-2 mb-2"> --}}
                        <div class="row">
                            <div id="image-container" class="text-center mt-4 mb-4 " >
                            </div>
                        </div>
                    {{-- </div> --}}

                    <div class="para">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar massa at libero rhoncus, eget ullamcorper nunc feugiat. Quisque dapibus nec nunc eget tristique. Suspendisse potenti. Duis gravida nec justo id cursus. Proin vel magna eget libero luctus scelerisque. Vestibulum eget tincidunt nisl, vel fermentum risus. Suspendisse potenti. Morbi non elit ac dui ullamcorper ultrices. Vivamus tincidunt ullamcorper ligula, in ultricies libero feugiat vel. Nam a fermentum tellus. Phasellus vitae dui nisl.</p>
                    
                        <p>Nullam venenatis leo non mi ultricies, a bibendum turpis interdum. Sed nec fermentum orci, eget euismod sapien. Nam ut justo ac neque vulputate mattis. Fusce non libero urna. Curabitur vestibulum risus vel varius tincidunt. Ut sit amet libero et leo efficitur tincidunt. Suspendisse potenti. Vivamus at bibendum justo, a suscipit turpis. Fusce in semper justo, id ullamcorper turpis. Aenean semper ligula nec nisi efficitur, id commodo lectus sagittis. Nullam aliquet euismod justo, id laoreet sem vestibulum a. Maecenas quis ex vel tortor convallis sollicitudin. Donec vel enim id sem pellentesque dignissim vel a nisi. Nulla facilisi.</p>
                    
                        <p>Curabitur bibendum justo vel dolor volutpat, sit amet gravida neque suscipit. Pellentesque eu lacus vel neque bibendum venenatis. Ut quis risus a justo ullamcorper cursus. Integer cursus ipsum at odio tincidunt, eget aliquet ligula consequat. Curabitur a aliquam mi. Vestibulum nec urna sit amet metus sollicitudin convallis. Proin euismod, sem nec tristique dapibus, erat lacus vehicula orci, vel efficitur lacus libero nec sapien. Fusce malesuada metus in dolor egestas, in congue nisi bibendum.</p>
                    
                        <p>Donec non mauris sit amet lectus sagittis varius. In hac habitasse platea dictumst. Sed consectetur felis vel metus blandit, at tincidunt odio vestibulum. Vivamus accumsan ex vel lacus euismod, vel commodo velit euismod. Fusce nec dolor arcu. Nam ac turpis a libero fermentum convallis. Quisque id mauris ligula. Etiam euismod quam vel accumsan tristique. Nam vel quam nec nunc vestibulum laoreet non in augue. Nam ac facilisis dui. Integer vel accumsan sapien, at ullamcorper ex.</p>
                    </div>
                </div>
             

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

        <!-- Loader -->
        <div id="loader" class="loader" style="display: none;"></div>

    


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        fetchProjects('International');
        
        $('#project-buttons button').click(function () {
            var category = $(this).data('category');
            fetchProjects(category);
        });
    });

    function fetchProjects(category) {
        $('#loader').show();

        $.ajax({
            url: '/fetch-projects/' + category,
            type: 'GET',
            beforeSend: function () {

            },
            success: function (data) {
                displayProjects(data);
            },
            error: function () {
                console.log('Error fetching projects.');
            },
            complete: function () {
                $('#loader').hide();
            }
        });
    }

    function displayProjects(projects) {
        var projectList = $('#project-container .row');
        // projectList.empty();
        var imageContainer = $('#image-container');
  imageContainer.empty();
        if (projects.length > 0) {
            

                projects.forEach(function(imageUrl) {
          // Create an image element with the original size
        //   var imageItem = $('<img src="' + imageUrl + '" alt="Image">');
                    console.log(imageUrl);
          var imageItem = $('<img src="{{ asset('storage/images/') }}/' + imageUrl.avatar + '" alt="Image">');
          imageContainer.append(imageItem);
        });

        setTimeout(function() {
          imageContainer.find('img').css({
            'opacity': 1,
            'transform': 'translateY(0)',
            'margin-top': '10px',
            'margin-bottom': '10px',
          });
        }, 10);
                // projectList.append(projectItem);
            // });

            $('.fade-in-image').css('opacity', 0).animate({ opacity: 1 }, 1000);
        } else {
            projectList.html('<h2>No Project found</h2>');
        }
    }
</script>
  
@endsection
