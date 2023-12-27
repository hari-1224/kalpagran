@extends('layouts.app')

@section('content')
@php
$setting = DB::table('sitesetting')->first();
@endphp


<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="overlay-main bg-black opacity-07"></div>

</div>
<!-- INNER PAGE BANNER END -->
<!-- SECTION CONTENT START -->
<div class="banner-container header-banner" style="background-image: url('frontend/assets/img/contact-us.jpg');height:100%;width:100%;padding-top:35%;background-size:cover;"></div>
<div class="section-full p-tb80 inner-page-padding">
    <!-- LOCATION BLOCK-->
    <div class="container">
        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content">
            <!-- CONTACT FORM-->
            <section class="contact-address-area">
                <div class="container">
                    <div class="sec-title-style1 text-center max-width" style="padding-top: 4rem;">
                        <div class="title">Contact Us</div>
                        <div class="text"><div class="decor-left"><span></span></div><p>Quick Contact</p><div class="decor-right"><span></span></div></div>
                        <div class="bottom-text">
                            <p>Got questions? We're here to help. Contact us through the form below, or visit our showroom during business hours for personalized assistance.</p>
                        </div>
                    </div>
                            {{-- <div class="contact-address-box row">
                                <!--Start Single Contact Address Box-->
                                <div class="col-sm-4 single-contact-address-box text-center">
                                    <div class="icon-holder">
                                        <span class="icon-clock-1">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                                        </span>
                                    </div>
                                    <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                    <h2></h2>
                                </div> --}}
                                <!--End Single Contact Address Box-->
                                <!--Start Single Contact Address Box-->
                                {{-- <div class="col-sm-4 single-contact-address-box main-branch">
                                    <h3>CONTACT INFO</h3>
                                    <div class="inner">
                                        <ul>                        
                                            <li>
                                                <div class="title d-flex align-items-center">
                                                    <i class="fa fa-phone mb-1" ></i>
                                                    <h4 class="px-2">PHONE :</h4>
                                                </div>
                                                <div class="text">
                                                    <p><a style="color:black;" href="tel:{{$setting->phone_two}}">{{$setting->phone_two}}</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title d-flex align-items-center">
                                                    <i class="fa fa-envelope mb-2"></i>
                                                    <h4 class="px-2">EMAIL :</h4>
                                                </div>
                                                <div class="text">
                                                    <p><a style="color:black;" href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title d-flex align-items-center">
                                                    <i class="fa fa-map-marker mb-2"></i>
                                                    <h4 class="px-2">ADDRESS :</h4>
                                                </div>
                                                <div class="text">
                                                    <p>{{$setting->address}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <!--End Single Contact Address Box-->
                                <!--Start Single Contact Address Box-->
                                {{-- <div class="col-sm-4 single-contact-address-box text-center">
                                    <div class="icon-holder">
                                        <span class="icon-question-2">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                        </span>
                                    </div>
                                    <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>
                                    <h2></h2>
                                </div> --}}
                                <!--End Single Contact Address Box-->
                    </div>
                </div>
            </section>  
            <!--End Contact Address Area-->  
             <style>
                @media (max-width: 767px) {
                    .contact-info-area {
                         margin-top: -140%;

                  }
                }
               .container input::placeholder {
                    color: #fff;
                }
             </style>
            <!--Start contact form area-->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row">
                        <div class="contact col-xl-12 col-lg-12 col-md-12 col-sm-12" style="background-image: url('frontend/assets/img/contact-bg.png');background-size:cover;background-repeat:no-repeat;">
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="sec-title-style1 float-left" > 
                                            <div class="title" style="color: #fff">Send Your Message</div>
                                            <div class="text"><div class="decor-left"><span></span></div><p>Contact Form</p></div>
                                        </div>
                    
                                    </div> 
                                </div>   
                                <div class="inner-box" style="padding: 5%">
                                    <form id="contact-form" name="contact_form" class="default-form" method="post" action="{{ route('add_contact.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="input-box">   
                                                            <input name="name" type="text" required class="form-control" id="name" value="{{old('name')}}" placeholder="NAME">
                                                            @error('name')
                                                                <div class="text-danger">{{$message}}</div>
                                                            @enderror
                                                        </div>                    
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="input-box"> 
                                                            <input name="phone" type="text" class="form-control" id="phone" value="{{old('phone')}}" required placeholder="PHONE NUMBER">
                                                            @error('phone')
                                                                <div class="text-danger">{{$message}}</div>
                                                            @enderror
                                                        </div>                                                        
                                                    </div>  
                                                </div> 
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                       <div class="input-box"> 
                                                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}" required placeholder="EMAIL">
                                                        @error('email')
                                                                <div class="text-danger">{{$message}}</div>
                                                            @enderror
                                                    </div>     
                                                   </div> 
                                               </div>                                               
                                                
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                       <div class="input-box"> 
                                                           <input name="location" type="text" class="form-control" id="location" value="{{old('location')}}" required placeholder="LOCATION">
                                                           @error('location')
                                                           <div class="text-danger">{{$message}}</div>
                                                       @enderror
                                                        </div>     
                                                   </div> 
                                               </div>                               
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="input-box">    
                                                    <textarea name="message_data" rows="4" class="form-control" id="message" value="{{old('message_data')}}" required placeholder="YOUR MESSAGE">{{old('message_data')}}</textarea>
                                                </div>
                                                <div class="button-box">
                                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button type="submit" data-loading-text="Please wait..." class=" fs-5" >SEND MESSAGE<span class="flaticon-next"></span></button>
                                    
                                                </div>         
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<style>
     .responsive-map {
        overflow: hidden;
        padding-bottom: 30%;
        position: relative;
        margin-bottom: -1%;
     } 

     .responsive-map iframe {
        left: 0;
        top: 0;
     
        width: 100%;
        position: absolute;
    }  

    /* @media (min-width: 800px) {
        .contact-form {
             padding: 0px;
        }   
    } */
    
    @media (max-width: 767px) {
        .header-banner {
            margin-top: 70px;
        }
    }
</style>

<div class="responsive-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124544.21792516224!2d77.8341831346673!3d12.712978270659153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3badd7004305692b%3A0x70642ec763d0444d!2sSun%20Granites!5e0!3m2!1sen!2sin!4v1653351886859!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;"></iframe>
</div>
<!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->
@if(session('message'))
    <script>
        alert('{{ session('message') }}');
    </script>
@endif

@endsection

