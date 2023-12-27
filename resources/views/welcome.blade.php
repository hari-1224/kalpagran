@extends('layouts.app')
@section('content')
    {{-- <head> --}}
    <style>
        /* CSS for the pop-up message */
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        section {
            /* margin-bottom: 85px !important; */
            /* margin-top: 85px !important; */
        }

        .popup-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            font-size: 30px;
            max-width: 400px;
            /* Adjust the maximum width as needed */
            margin: 0 auto;
            /* Center the pop-up horizontally */
            position: absolute;
            top: 50%;
            /* Position the pop-up vertically at 50% of the screen height */
            left: 50%;
            /* Position the pop-up horizontally at 50% of the screen width */
            transform: translate(-50%, -50%);
            /* Center the pop-up precisely */
        }


        /* Style for the success message */
        .popup-success {
            color: #28a745;
            /* Green color for success */
            font-weight: bold;
        }

        /* Style for the error message */
        .popup-error {
            color: #dc3545;
            /* Red color for error */
            font-weight: bold;
        }

        /* Style for the close button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }

        .thumb-wrapper {
            overflow: hidden;
            position: relative;
            /* border: 1px solid #ddd; */
        }

        .thumb-wrapper img {
            transition: transform 0.3s ease-in-out;
        }

        .thumb-wrapper:hover img {
            transform: scale(1.1);
        }

        .thumb-content {
            padding: 15px;
            text-align: center;
        }

        .steve p {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-align: left;

        }

        .steve h2 {
            color: #fff;
            font-weight: 700;
        }

        .paul p {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-align: right;
        }

        .paul h2 {
            color: #fff;
            font-weight: 700;
        }

        .darryl p {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-align: left;
        }

        .darryl h2 {
            color: #fff;
            font-weight: 700;
        }

        .regin p {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-align: right;
        }

        .regin h2 {
            color: #fff;
            font-weight: 700;
        }

        .gray p {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-align: left;
        }

        .gray h2 {

            color: #fff;
            font-weight: 700;
        }

        .faq-heading {
            background-color: #EDEDED;
        }

        .form-group input,
    .form-group textarea {
        background-color: rgba(149, 155, 161, 0.8);
        border: 2px solid #A1A7AD;
        color: #fff; 
        padding: 10px;
        border-radius: 5px;
    }

        .form-group input:focus,
        .form-group textarea:focus {
            border-bottom-color: #ccc;
        }

        .card-body {
            background-color: rgba(16, 98, 133, 0.6);
        }

        section div {
            /* margin-top: 30px; */
            margin-bottom: 10px;
        }

        section .container {
            margin-top: auto;
            /* margin-bottom: 30px; */
        }

                        .grancol {
                            margin: 0 10px;
                          }
                      
                          .colgranite {
                            position: relative;
                            cursor: pointer;
                          }
                      
                          .colgranite img {
                            width: 100%;
                            height: auto;
                            border: 1px solid #ddd;
                            border-radius: 8px;
                          }
                      
                          .zoomedImage {
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.9);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            z-index: 999;
                            display: none;
                          }
                      
                          .zoomedImage img {
                            max-width: 80%;
                            max-height: 80%;
                            border: 2px solid #fff;
                            border-radius: 8px;
                          }
    </style>

<style>
    .whatsapp-sticky {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .whatsapp-sticky img {
        width: 50px;
        height: auto; 
        cursor: pointer;
        margin-bottom: 150px;
    }
</style>

<div id="whatsapp-icon" class="whatsapp-sticky">
<a href="https://wa.me/8148138485" target="_blank">
  <img src="frontend/assets/img/wp-icon.png" alt="WhatsApp Icon">
</a>
</div>

    {{-- </head> --}}

    <section id="hero" class="d-flex align-items-center" style="padding-top:320px;width:100%;">

        <div class="">


            <div class="row">
                <div class="mainbg">
                    <h1 class="text-uppercase">Make your dream house look like heaven</h1>
                </div>
            </div>

        </div>
        </div>

    </section><!-- End Hero -->

    {{-- <main id="main" style="
    margin-left: 50px;
    margin-right: 50px;
"> --}}

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <div id="prevBtn" class="slider-button"></div>
                    <div id="nextBtn" class="slider-button"></div>
                    <div id="dotContainer" class="dot-container"></div>
                    <img src="/frontend/assets/img/logokalpa.png" class="img-fluid" alt="">
                </div>
                <div class="hr" style="border:2px solid #CB7E48;width: 18%;margin:auto">
                </div>
            </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="banersection about">
        <div class="container" data-aos="fade-up">


            <div class="row">
                <div class="col-md-3">
                    <img src="frontend/assets/img/certify.png" />
                    <h4>Certified product</h4>
                    <p>Certified product granites typically refer to granite products that have undergone testing and
                        certification processes to ensure their quality and compliance with industry standards
                        associated with granite products:
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="frontend/assets/img/shield.png" />
                    <h4>Bestquality product</h4>
                    <p>When looking for the best quality granite products, there are several factors to consider.
                        High-quality granite should exhibit excellent durability, aesthetic appeal, and meet your
                        specific needs for your project.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="/frontend/assets/img/pricing.png" />
                    <h4>Affordable prize</h4>
                    <p>If you're looking for affordable granite options, there are several strategies you can employ to
                        find cost-effective granite products without compromising too much on quality. Here are some
                        tips to help you find affordable granite:
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="frontend/assets/img/age.png" />
                    <h4>Long Lasting</h4>
                    <p>When it comes to selecting long-lasting granite for your project, it's essential to choose a
                        high-quality granite variety and ensure proper maintenance and installation. Here are some key
                        factors to consider to ensure your granite lasts for many years:
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="banersection bgsection">
        <div class="container">
            <div class="cardbg">
                <div class="row">
                    {{-- <div class="col-md-3">
          <hr style="border:2px solid #ffff; width:100px; float: right; opacity: initial;">
               </div> --}}
                    <div class="col-md-6" style="text-align: center;">
                        <h3>Make your dream house look like heaven</h3>
                    </div>
                    {{-- <div class="col-md-3">
          <hr style="border:2px solid #ffff; width:100px; opacity: initial;">
           </div> --}}
                </div>
                <div class="amount d-flex">
                    <div class="col-md-3" style="text-align: center; color:#ffff">
                        <h4>18</h4>
                        <br /><span>No Of Years</span>
                    </div>
                    <span class="ver"></span>
                    <div class="col-md-3" style="text-align: center; color:#ffff">
                        <h4>460</h4>
                        <br /><span>Project Taken</span>
                    </div>
                    <span class="ver"></span>
                    <div class="col-md-3" style="text-align: center; color:#ffff">
                        <h4>600</h4>
                        <br /><span>No Of Teams</span>
                    </div>
                    <span class="ver"></span>
                    <div class="col-md-3" style="text-align: center; color:#ffff">
                        <h4>12</h4>
                        <br /><span>Quarry</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="banersection skills">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>About us</h3>
                    <h2>We are competitive in Granite solutions</h2>
                    <p>Kalpa Granite Private Limited is the leading exporter of Granite Blocks, Slabs and Tiles from
                        India since 2009. Predictions are meant to be challenged; and assumptions meant to be busted.
                        Only then a true leader emerges from an improbable position. Kalpa Granite India Pvt Ltd. has
                        been silencing the sceptics by setting benchmarks globally in the building materials domain. It
                        has debunked myths that a fledgling company from a small town region in Tamilnadu can lead the
                        change in the industry by setting higher goals, achieving the unthinkable and creating new
                        benchmarks.</p>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <div id="img" style="padding-top: 20px;"> <!-- Adjust the padding value as needed -->
                        <img src="/frontend/assets/img/sideimg.png" class="img-fluid1" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (max-width: 768px) {
            .img-fluid1 {
                max-width: 100%;
                height: auto;
            }
        }
    </style>

    <section id="services" class="banersection services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>What We DO</h3>
                <hr>
            </div>
            <div class="row rowbar ">
                <div class="" data-aos="zoom-in" data-aos-delay="100" style="width: auto">
                    <img src="frontend/assets/img/Group-3.png" />
                </div>
                <div class="" data-aos="zoom-in" data-aos-delay="200" style="width: auto">
                    <img src="frontend/assets/img/Group-2.png" />
                </div>
                <div class="" data-aos="zoom-in" data-aos-delay="300" style="width: auto">
                    <img src="frontend/assets/img/Group-1.png" />
                </div>
            </div>

        </div>
    </section>
    <style>
        @media (max-width: 768px) {
            .services .container {
                padding: 30px 0;
            }

            .services .section-title h2 {
                font-size: 28px;
                margin-block: -10px;
            }

            .services .row {
                flex-direction: column;
                align-items: center;
            }

            .services .col-md-4 {
                width: 100%;
                margin-bottom: 20px;
                /* Adjust margin as needed */
            }

            .services .col-md-4 img {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <section class="banersection sectionseven">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <div class="">
                        <div id="img">
                            <img src="/frontend/assets/img/centerimg.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="">
                        Gaspari Menotti
                    </h3>
                    <p>
                        Gaspari Menotti was founded in 1956 in Carrara, the world center for marble and granite
                        quarrying and processing. The tradition and progress here has always produced the advanced
                        technology in the industry that has been subsequently applied throughout the world.
                        Gaspari Menotti is one of the long-established companies in the region producing a range of
                        machinery fundamental to the processing of marble and granite including gang saws and slab and
                        tile processing lines. Such machines are the result of 40 years of experience, research and the
                        production of hundreds of machines.
                        Gaspari Menotti stands out for its advanced technology and original design with proven
                        reliability and efficiency to meet the most demanding market requirements. Experience, quality
                        and investment in research and human resources have enabled Gaspari Menotti to continue its
                        leadership in the market.
                        Gaspari Menotti is a company that specializes in the production of machines and plants for the
                        processing of marble, granite, and stones. It offers multi wires, polishing machines, single
                        wires, marble gang saw, and more.
                    </p>

                </div>
            </div>

        </div>
    </section>
    <style>
        @media (max-width: 768px) {
            .sectionseven .row {
                flex-direction: column-reverse;
            }

            .sectionseven .col-lg-6,
            .sectionseven .col-lg-6 img {
                width: 100%;
            }

            .sectionseven .content {
                padding-top: 20px;
                margin-top: -70px;
            }

            .sectionseven h4 {
                font-size: 20px;
            }

            .sectionseven p {
                font-size: 14px;
            }
            .sectionseven h3 {
                margin-top: 20px;
            }
        }
    </style>

    <section class="banersection sectioneight">
        <div class="container" data-aos="fade-up">

            <div class="row">


                <div class="col-lg-6 pt-4 pt-lg-0 content granite" data-aos="fade-left" data-aos-delay="100">
                    <div class="section-title">
                        <h3>Granite</h3>
                        <hr>
                    </div>

                    <p class="section-points">
                        It is used to make countertops, floor tiles, paving stone, curbing, stair treads, building
                        veneer, and cemetery monuments. Granite is used all around us - especially in building the
                        infrastructure of modern-day cities. Slow crystallisation of magma below the earth's surface
                        leads to the formation of granite rock.

                    </p>

                    <div class="row">
                        <div class="col">
                            <h3>200</h3><span>Marbles</span>
                        </div>
                        <div class="col">
                            <h3>230</h3><span>Granites</span>
                        </div>
                        <div class="col">
                            <h3>360</h3><span>Gangsaa</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 d-flex align-items-right" data-aos="fade-right" data-aos-delay="100">
                    <div class="">
                        <div id="img">
                            <img src="/frontend/assets/img/whatweedo.png" class="img-fluid" alt=""
                                style="height: auto;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <style>
        @media (max-width: 768px) {


            .sectioneight .col-lg-6 {
                padding-top: 20px;
            }

            .sectioneight .row .col {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .sectioneight .section-title {
                margin-bottom: -150px;
                margin-top: -50px;
            }

            .sectioneight .section-points {
                margin-top: 10px;
            }
        }

        @media (max-width: 767px) {
            .granite .section-title {
               margin-bottom: 40px; /* Adjust the margin as needed */
    }

}

    </style>


    <section class="banersection sectionnine">
        <div class="container">
            <div class="section-title" style="text-align: center">
                <h3>Our products </h3>
                <hr style="margin:auto"><br />
                <p>Kalpa Granites is known for its commitment and quality products. We
                    can cater all your natural stone needs of slabs/tiles from Granite, Marble, Slate, Quartzite,
                    Sandstone, Limestone & Stone mosaics.
                </p>
            </div>

             <div class="row">
                        <div class="col" style="display: grid;justify-content: center;margin-top:7%">
                            <img src="frontend/assets/img/category1.png" width="101"/>
                            <h5>Category 1</h5>

                            <img src="frontend/assets/img/category2.png" width="101"/>
                            <h5>Category 2</h5>

                            <img src="frontend/assets/img/category3.png" width="101"/>
                            <h5>Category 3</h5>
                        </div>
                        <div class="col-md-2 align-items-center">
                            <img src="frontend/assets/img/line.png" height="400" style="margin-top: -15%"/>

                        </div>


                      </head>
                      <body>
                        <div class="col align-items-center" style="margin-top: 5%">
                          <div class="grancol" onclick="zoomImage('frontend/assets/img/grancol1.png')">
                            <div class="colgranite">
                              <img src="frontend/assets/img/grancol1.png" alt="Collection 1" />
                              {{-- <h5>Collections</h5> --}}
                              {{-- <img src="frontend/assets/img/grancol1.png" alt="Collection 1" /> --}}
                              <br>
                              <div class="d-flex justify-content-around">
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <div class="grancol" onclick="zoomImage('frontend/assets/img/grancol2.png')">
                            <div class="colgranite">
                              <img src="frontend/assets/img/grancol2.png" alt="Collection 2" />
                              <br>
                              <div class="d-flex justify-content-around">
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <div class="grancol" onclick="zoomImage('frontend/assets/img/grancol1.png')">
                            <div class="colgranite">
                              <img src="frontend/assets/img/grancol1.png" alt="Collection 3" />
                              <br>
                              <div class="d-flex justify-content-around">
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                                <h5>Collections</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <div class="zoomedImage" onclick="closeZoomedImage()">
                          <img id="zoomedImg" />
                        </div>
                      
                        <script>
                          function zoomImage(imgSrc) {
                            const zoomedImg = document.getElementById('zoomedImg');
                            zoomedImg.src = imgSrc;
                            document.querySelector('.zoomedImage').style.display = 'flex';
                          }
                      
                          function closeZoomedImage() {
                            document.querySelector('.zoomedImage').style.display = 'none';
                          }
                        </script>
                        {{-- <div class="col align-items-center" style="margin-top: 5%">
                            <div class="grancol">
                                <div class="colgranite ">
                                    <img src="frontend/assets/img/grancol1.png" />
                                    <br>
                                    <div class="d-flex  justify-content-around">
                                        <h5>Collections</h5>
                                        <h5>Collections</h5>
                                        <h5>Collections</h5>
                                    </div>

                                </div>
                            </div>
                            <br/>
                            <div class=" grancol">
                                <div class="colgranite ">
                                    <img src="frontend/assets/img/grancol2.png" />
                                    <br>
                                    <div class="d-flex  justify-content-around">
                                        <h5>Collections</h5>
                                        <h5>Collections</h5>
                                        <h5>Collections</h5>
                                    </div>
                                </div>
                            </div>
                           <br/>
                           <div class="grancol">
                            <div class="colgranite ">
                                <img src="frontend/assets/img/grancol1.png" />
                                <br>
                                <div class="d-flex  justify-content-around">
                                    <h5>Collections</h5>
                                    <h5>Collections</h5>
                                    <h5>Collections</h5>
                                </div>

                            </div>
                        </div> --}}
                        <br/>
                            

                        </div>

                    </div> 
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators d-none">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            {{-- <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 22.png" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 1</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 23.png" class="img-fluid"
                                                        alt="Headphone">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 2</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 20.png" class="img-fluid"
                                                        alt="Macbook">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 3</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 29.png" class="img-fluid"
                                                        alt="Nikon">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 4</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="item carousel-item"> 
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 30.png" class="img-fluid"
                                                        alt="Play Station">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 5</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 31.png" class="img-fluid"
                                                        alt="Macbook">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 6</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 22.png" class="img-fluid"
                                                        alt="Speaker">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 7</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 23.png" class="img-fluid"
                                                        alt="Galaxy">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 8</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="item carousel-item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 20.png" class="img-fluid"
                                                        alt="iPhone">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 9</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 29.png" class="img-fluid"
                                                        alt="Canon">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 10</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 30.png" class="img-fluid"
                                                        alt="Pixel">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 11</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/frontend/assets/img/Rectangle 31.png" class="img-fluid"
                                                        alt="Watch">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Collections 12</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <style>
        @media (max-width: 768px) {
            .sectionnine .section-title h2 {
                font-size: 28px;
                /* Adjust font size as needed */
            }

            .sectionnine p {
                width: 100%;
                margin: 0 auto 20px;
            }

            .carousel-inner {
                width: 100%;
                overflow: hidden;
            }

            .carousel-inner .item {
                display: flex;
                flex-wrap: wrap;
            }

            .carousel-inner .item .col-sm-3 {
                width: 100%;
            }

            .carousel-inner .item .thumb-wrapper {
                text-align: center;
                margin-bottom: 20px;
            }

            .carousel-inner .item .thumb-wrapper .img-box img {
                width: 100%;
                height: auto;
            }
            #name {
                margin-top: 10%;
            }
            #email {
                margin-top: 10%;
            }
            #country {
                margin-top: 10%;
            }
            #phone {
                margin-top: -5%;
            }
        }
    </style>


    <section class="banersection bgbanner">

        <div class="gtco-testimonials">
            <div class="container">
                <div class="section-title" style="text-align: center">
                    <h3>Client voice</h3>
                    <hr style="margin:auto">
                </div>
            </div>
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="item">
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300"
                            alt="">
                        <div class="card-body">
                            <h5>steve charley <br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“ The global trade sector is not what it used to be many years ago, as
                                technological advancements and modernizations continue to contribute to multiple
                                improvements. B2B portals operate as a flourishing branch of E-commerce with the sole
                                purpose of connecting buyers and sellers without any restrictions of language, time
                                zone, and region. ” </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                            alt="">
                        <div class="card-body">
                            <h5>Mr. Paul Michalec<br />
                                <span> Engineer </span>
                            </h5>
                            <p class="card-text">“Granite is traded all around the world. The data provided on the
                                export analysis shows that there are almost 147 countries and territories, which
                                actively import Granite from India. The combined value of total export is 498.85 USD
                                million.” </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302"
                            alt="">
                        <div class="card-body">
                            <h5>Darryl Maddox<br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“What is the difference between granite and stone?
                                Stone is extracted from natural deposits called quarrying. ... Granite: It's an igneous
                                rock (quartz, feldspar and mica) – very resistant to impacts, compression and erosion. ”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303"
                            alt="">
                        <div class="card-body">
                            <h5>Mariyaa regin<br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“Generally, quartz is less expensive than granite, but many factors
                                influence the total price of a project. In this article, we'll look at the differences
                                between natural granite stone and engineered quartz stone.” </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303"
                            alt="">
                        <div class="card-body">
                            <h5>Debra Gray<br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“We are also well equipped for cut-to-size projects, Vanities, Counter
                                Tops etc. all over the world through our distributor network. Our state-of-the art plant
                                is also well equipped to undertake cut-to-size projects of any calibre.” </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <style>
        @media (max-width: 768px) {
            .section-title h4 {
                margin-top: -50px;
                /* Adjust the top margin as needed */
            }
        }
        @media (max-width: 767px) {
        .faqsection {
            display: none;
        }
    }
    </style>

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>

    </div>


    </div>
    </div>
    </section>



    <section class="banersection section11 faqsection">
        <div class="container">
            <div class="row">
                <div class="faq " style="padding-right: 36%">
                    <div class="section-title" style="text-align: center; margin-left:130px">
                        <h3>Faq</h3>
                        <hr style="margin:auto"><br />
                    </div>
                    <div class='faq' style="margin-left: 13%">
                        <!-- Your FAQ content goes here -->
                        <input id='faq-a' type='checkbox'>
                        <label for='faq-a'>
                            <p class="faq-heading">Health & Safety ?</p>
                            <div class='faq-arrow'></div>
                            <p class="faq-text">Enhancement of Occupational Health & Safety Performance by eliminating
                                the hazards, reducing the OH&S Risks and providing safe and healthy working conditions.
                            </p>
                        </label>
                        <input id='faq-b' type='checkbox'>
                        <label for='faq-b'>
                            <p class="faq-heading">Quality of work Environment ?</p>
                            <div class='faq-arrow'></div>
                            <p class="faq-text">Complying with applicable National / International legal requirements,
                                principles of the international instruments and other requirements to which the company
                                subscribes that relate to its product quality, environmental aspects and occupational
                                health hazards.
                            </p>
                        </label>
                        <input id='faq-c' type='checkbox'>
                        <label for='faq-c'>
                            <p class="faq-heading">Our Visionary Leadership ?</p>
                            <div class='faq-arrow'></div>
                            <p class="faq-text">The Kalpa Granites is the brainchild of entrepreneurs, whose dream was
                                to create the world’s most sustainable building materials company.Their inestimable
                                experience together with a young and dynamic management team has created a formidable
                                entity that is growing at an amazing pace.
                            </p>
                        </label>
                        <input id='faq-d' type='checkbox'>
                        <label for='faq-d'>
                            <p class="faq-heading"> Corporate Social Responsibility ?</p>
                            <div class='faq-arrow'></div>
                            <p class="faq-text">Besides quality, we lay an equal emphasis on good housekeeping and safe
                                working conditions. Every employee of Kalpa Granites India Ltd, is encouraged and
                                educated about environment protection and conservation of natural resources.
                            </p>
                        </label>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <style>
        .form-row {

            margin-bottom: 40px;
        }
    </style>


    <section class="banersection section11">
        <div class="container">
            <div class="row">
                <div class="contact col-lg-6">
                    <div class="section-title" style="text-align: center">
                        <h3>Contact us</h3>
                        <hr style="margin:auto"><br />
                    </div>
                    <div class="">
                        <div class="card-body" style="background-image: url('frontend/assets/img/contact.jpg'); background-size: cover; background-position: center; padding: 5%; width: 100%; height: 100%;">
                            <form id="submit-form" action="{{ route('form.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        {{-- <label for="name">Name</label> --}}
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter your name" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{-- <label for="email">Email</label> --}}
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email" name="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        {{-- <label for="phone">Phone number</label> --}}
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter your phone number" name="phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{-- <label for="country">Country</label> --}}
                                        <input type="text" class="form-control" id="country"
                                            placeholder="Enter your country" name="country">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    {{-- <label for="note">Notes</label> --}}
                                    <textarea class="form-control" id="note" name="note" placeholder="Enter any notes"></textarea>
                                </div>
                                {{-- <div class="form-row"> --}}

                                    <div class="form-group text-center" style="margin-top: 20px;" >
                                        <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                                    </div>
                            </form>

                            <div class="popup-container" id="popup-container">
                                <div class="popup-box">
                                    <span class="popup-close" id="popup-close">&times;</span>
                                    <!-- The response message will be displayed here -->
                                    <p id="response-message"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="banersection section12">
        <div class="container">
            <div class="">
                <div class="section-title" style="text-align: center">
                    <h3 >Our clients
                    </h3>
                    <hr style="margin:auto"><br />
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-md-12 owl-slider">
                    <div id="carousel" class="d-flex owl-carousel">
                        <div class="item">
                            <img src="frontend/assets/img/company_logos4.png" />
                        </div>
                        <div class="item">
                            <img src="frontend/assets/img/company_logos3.png" />
                        </div>
                        <div class="item">
                            <img src="frontend/assets/img/company_logos2.png" />
                        </div>
                        <div class="item">
                            <img src="frontend/assets/img/company_logos1.png" />
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        (function() {
            "use strict";
    
            var carousels = function() {
                $("#carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 2000, 
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 5,
                            nav: false
                        }
                    }
                });
            };
    
            (function($) {
                carousels();
            })(jQuery);
        })();
    </script>
    

    </div>
    </div>
    </section>

    <style>
        .section12 img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            /* Center the images */
        }

        @media (max-width: 768px) {
            .section12 .col-md-2 {
                text-align: center;
            }

            .section12 .section-title {
                text-align: center;
            }

            .section12 .owl-slider {
                margin-top: 20px;
                /* Adjust margin-top as needed */
                display: flex;
                flex-direction: column;
                /* Display images vertically */
                align-items: center;
                /* Center images horizontally */
            }

            .section12 .section-title hr {
                width: 50px;
                /* Adjust the width as needed */
                margin: 10px auto;
                /* Adjust margin as needed */
            }
        }

        </style>{{-- </main> --}} <style>.gtco-testimonials {
            position: relative;
            margin-top: 30px;
        }

        .gtco-testimonials h2 {
            font-size: 30px;
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        .gtco-testimonials .owl-stage-outer {
            padding: 30px 0;
        }

        .gtco-testimonials .owl-nav {
            display: none;
        }

        .owl-dots {
            display: none;
        }

        .gtco-testimonials .owl-dots {
            text-align: center;
        }

        .gtco-testimonials .owl-dots span {
            position: relative;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: block;
            background: #fff;
            border: 2px solid #01b0f8;
            margin: 0 5px;
        }

        .gtco-testimonials .owl-dots .active {
            box-shadow: none;
        }

        .gtco-testimonials .owl-dots .active span {
            background: #01b0f8;
            box-shadow: none;
            height: 12px;
            width: 12px;
            margin-bottom: -1px;
        }

        .gtco-testimonials .card {
            background: #fff;
            box-shadow: 0 8px 30px -7px #c9dff0;
            margin: 0 20px;
            padding: 0 10px;
            border-radius: 20px;
            border: 0;
        }

        .gtco-testimonials .card .card-img-top {
            max-width: 100px;
            border-radius: 50%;
            margin: 15px auto 0;
            box-shadow: 0 8px 20px -4px #95abbb;
            width: 100px;
            height: 100px;
        }

        .gtco-testimonials .card h5 {
            color: cornsilk;
            font-size: 21px;
            line-height: 1.3;
            font-weight: 600;
        }

        .gtco-testimonials .card h5 span {
            font-size: 18px;
            color: darkslategray;
            font-weight: 600;
        }

        .gtco-testimonials .card p {
            font-size: 18px;
            color: #ffff;
            padding-bottom: 15px;
        }

        .gtco-testimonials .active {
            opacity: 0.5;
            transition: all 0.3s;
        }

        .gtco-testimonials .center {
            opacity: 1;
        }

        .gtco-testimonials .center h5 {
            font-size: 24px;
        }

        .gtco-testimonials .center h5 span {
            font-size: 20px;
        }

        .gtco-testimonials .center .card-img-top {
            max-width: 100%;
            height: 120px;
            margin-bottom: 10px;
            width: 120px;
        }

         #name::placeholder {
            color: #EDEDED;
        
        } 

        #email::placeholder {
            color: #EDEDED;
        
        } 
        #phone::placeholder {
            color: #EDEDED;
        
        } 
        #country::placeholder {
            color: #EDEDED;
        
        } 
        #note::placeholder {
            color: #EDEDED;
        
        } 

        .form-group button {
            background: #EDEDED;
            border: none;
            color: #5F5F5F;
            font-weight: 600;
            margin-top: 5px;
        }

        @media (min-width: 800px) {
            .faq {
                margin-left: 15%;
            }
            .contact {
                margin-left: 25%;
            }
        }

        @media (max-width: 767px) {
            .gtco-testimonials {
                margin-top: 20px;
            }
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev {
            outline: 0;
        }

        .owl-carousel button.owl-dot {
            outline: 0;
        }

    </style>

    
    <script>
        $(".prev").click(function() {


            if ($(".img-fluid3").is(":visible")) {
                $(".img-fluid3").hide(2000);

            } else {
                $(".img-fluid2").hide(2000);
            }
        });

        $(".next").click(function() {

            if ($(".img-fluid1").not(":visible") && $(".img-fluid2").not(":visible") && $(".img-fluid3").is(
                    ":visible")) {
                $(".img-fluid1").show(2000);
            } else if ($(".img-fluid1").not(":visible") && $(".img-fluid2").is(":visible") && $(".img-fluid3").not(
                    ":visible")) {
                $(".img-fluid3").show(2000);
            } else {
                $(".img-fluid2").show(2000);
            }


        });
    </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    (function() {
        "use strict";

        var carousels = function() {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                autoplay: false, 
                autoplayTimeout: 2000, 
                autoplayHoverPause: false, 
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        };

        (function($) {
            carousels();
        })(jQuery);
    })();
</script>


    {{-- <script>
        (function() {
            "use strict";

            var carousels = function() {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        680: {
                            items: 2,
                            nav: false,
                            loop: false
                        },
                        1000: {
                            items: 3,
                            nav: true
                        }
                    }
                });
            };

            (function($) {
                carousels();
            })(jQuery);
        })();
    </script> --}}

    <script>
        const hero = document.getElementById('hero');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotContainer = document.getElementById('dotContainer');
        const images = [
            '/frontend/assets/img/herobanner.png',
            '/frontend/assets/img/Rectangle 2.jpg',
            '/frontend/assets/img/bgbanner.png',
            // '/frontend/assets/img/banner-1.jpg',
            '/frontend/assets/img/banner-2.webp',
            '/frontend/assets/img/banner-3.webp',
            '/frontend/assets/img/banner-4.webp',
            '/frontend/assets/img/banner-5.webp',
            '/frontend/assets/img/banner-6.webp',
            '/frontend/assets/img/banner-6.webp'
        ];
        let currentImageIndex = 0;

        function changeImage(index) {
            hero.style.backgroundImage = `url('${images[index]}')`;
            currentImageIndex = index;
            updateDots();
        }

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            changeImage(currentImageIndex);
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            changeImage(currentImageIndex);
        }

        function createDots() {
            for (let i = 0; i < images.length; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                dot.addEventListener('click', () => {
                    changeImage(i);
                });
                dotContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = document.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                if (index === currentImageIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        prevBtn.addEventListener('click', showPrevImage);
        nextBtn.addEventListener('click', showNextImage);

        // Automatic image change every 5 seconds (adjust the interval as needed)
        setInterval(showNextImage, 5000);

        // Initial image load and dot creation
        changeImage(currentImageIndex);
        createDots();
    </script><script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: '2',
            // coverflowEffect: {
            //   rotate: 50,
            //   stretch: 0,
            //   depth: 100,
            //   modifier: 1,
            //   slideShadows : true,
            // },

            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 50,
                modifier: 6,
                slideShadows: false,
            },

        });


        var galleryTop = new Swiper('.swiper-container.testimonial', {
            speed: 400,
            spaceBetween: 50,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            direction: 'vertical',
            pagination: {
                clickable: true,
                el: '.swiper-pagination',
                type: 'bullets',
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });
    </script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>
        $(document).ready(function() {
            // Function to animate the counting effect
            function countUp(span, start, end, duration) {
                var range = end - start;
                var current = start;
                var increment = end > start ? 1 : -1;
                var stepTime = Math.abs(Math.floor(duration / range));
                var timer = setInterval(function() {
                    current += increment;
                    span.text(current);
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }

            // Animate the count for each span when the page loads
            function startCounting() {
                $(".amount h4").each(function() {
                    var span = $(this);
                    var start = 0;
                    var end = parseInt(span.text());
                    var duration = 4000; // Adjust the duration as needed (in milliseconds)
                    countUp(span, start, end, duration);
                });
            }

            // Trigger counting animation when the content enters the viewport
            var observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        startCounting();
                        observer.unobserve(entry.target);
                    }
                });
            });

            // Observe the content element
            var contentElement = document.querySelector(".amount");
            if (contentElement) {
                observer.observe(contentElement);
            }
        });
    </script><script>
        // vars
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script><script>
        $(document).ready(function() {
            $("#submit-form").submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                $.ajax({
                    type: "POST",
                    url: "{{ route('form.store') }}",
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) {
                        // Display success message and show pop-up
                        $("#response-message").html(
                            'Thank You <br> Form submitted successfully.').addClass(
                            'popup-success');
                        $("#popup-container").fadeIn();

                        // Hide the pop-up after 3 seconds (adjust as needed)
                        setTimeout(function() {
                            $("#popup-container").fadeOut();
                        }, 3000);

                        // Clear the form
                        $("#submit-form")[0].reset();
                    },
                    error: function(xhr, status, error) {
                        // Display error message and show pop-up
                        $("#response-message").html(
                            'An error occurred while submitting the form.').addClass(
                            'popup-error');
                        $("#popup-container").fadeIn();

                        // Hide the pop-up after 3 seconds (adjust as needed)
                        setTimeout(function() {
                            $("#popup-container").fadeOut();
                        }, 3000);
                    },
                });
            });

            // Close the pop-up when the close button is clicked
            $("#popup-close").click(function() {
                $("#popup-container").fadeOut();
            });
        });
    </script>

  

    @endsection
