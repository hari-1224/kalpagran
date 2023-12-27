@extends('layouts.app')


@section('content')

<!doctype html>
<html x-data="{colorMode: localStorage.getItem('colorMode') || localStorage.setItem('colorMode', 'light')}" x-init="$watch('colorMode', val => localStorage.setItem('colorMode', val))" x-bind:class="{'dark': colorMode === 'dark' || (colorMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}" class="scroll-smooth h-full overflow-y-auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The Play CDN is designed for development purposes only, and is not the best choice for production. -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <link id="heading-font" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" media="all" />
  
  <link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/bootstrap-select.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/owl.carousel.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/magnific-popup.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/loader.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/flaticon.min.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/css/style.css">

<link rel="stylesheet" href="https://sungranitesindia.com/frontend/css/bootstrap-slider.min.css">

<link rel="stylesheet" class="skin" type="text/css" href="https://sungranitesindia.com/css/skin/skin-1.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/css/switcher.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/plugins/revolution/revolution/css/settings.css">

<link rel="stylesheet" type="text/css" href="https://sungranitesindia.com/frontend/plugins/revolution/revolution/css/navigation.css">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
  
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      /* font-family: "DM Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; */
    }
  </style>
<script>
    window.tailwind.config = {
      "darkMode": "class",
      "theme": {
        "fontFamily": {
          "heading": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""],
          "body": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""]
        },
        "extend": {
          "borderRadius": {
            "global": "5px"
          },
          "colors": {
            "primary": {
              "50": "#f8f5ff",
              "100": "#eee6fe",
              "200": "#ddcefd",
              "300": "#c1a6fc",
              "400": "#844df9",
              "500": "#4d07e4",
              "600": "#3705a3",
              "700": "#280477",
              "800": "#170245",
              "900": "#0c0123",
              "950": "#070114",
              "DEFAULT": "#570df8"
            },
            "secondary": {
              "50": "#fff5fd",
              "100": "#ffe6f9",
              "200": "#fecdf3",
              "300": "#fea4e9",
              "400": "#fd49d3",
              "500": "#e802b3",
              "600": "#a70280",
              "700": "#79015d",
              "800": "#470136",
              "900": "#23001b",
              "950": "#140010",
              "DEFAULT": "#f002b8"
            }
          }
        }
      },
      "plugins": [window.tailwind.plugin.withOptions(({
        prefix = "ui"
      } = {}) => {
        return ({
          addVariant
        }) => {
          for (let state of ["open", "checked", "selected", "active", "disabled"]) {
            addVariant(`${prefix}-${state}`, [
              `&[data-headlessui-state~="${state}"]`,
              `:where([data-headlessui-state~="${state}"]) &`,
            ]);

            addVariant(`${prefix}-not-${state}`, [
              `&[data-headlessui-state]:not([data-headlessui-state~="${state}"])`,
              `:where([data-headlessui-state]:not([data-headlessui-state~="${state}"])) &:not([data-headlessui-state])`,
            ]);
          }
        };
      }), ]
    };
  </script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
  @media (max-width: 767px) {
    .header-banner {
      margin-top: 18%;
    }
  }
</style>
</head>
<div class="banner-container header-banner" style="background-image: url('frontend/assets/img/about-us.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
<body x-data="{'openDialogId': ''}" x-on:keydown.escape="openDialogId=''" class='font-body antialiased h-full font-body antialiased text-[#000000] bg-[#fcfcfc] dark:text-[#ffffff] dark:bg-[#031022]'>
  <div class="py-11">
    <div class="text-center flex flex-col gap-y-3 px-2 sm:mx-auto sm:max-w-xl">
      <h1 class="font-bold text-3xl text-slate-900 dark:text-gray-100 sm:text-4xl">Let&#x27;s show the world</h1>
      <p class="text-base dark:text-gray-400 sm:text-lg">"Crafting Elegance, Shaping Excellence – Unveiling the Beauty of Marble and Granite to Showcase to the World."</p>
    </div>
  </div>
  &nbsp;
  <section class="py-10">
    <div class="mx-auto max-w-7xl">
      <div class="flex flex-wrap w-full px-4 pb-5">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="text-3xl title-font mb-2 text-gray-900 font-bold dark:text-slate-100 sm:text-4xl">We present the idea with impressive details!</h1>
          <div class="h-1 rounded bg-primary w-14">
            <div class="p-2"></div>
          </div>
        </div>
        <p class="w-full text-lg leading-snug font-light font-body lg:w-1/2">Kalpa Granite Industries started operations as a 100% Export Oriented Unit in 2009 for processing Polished / Flamed Granite Tiles & Slabs.</p>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="p-4 md:w-1/2 xl:w-1/4">
          <div class="bg-gray-50 dark:bg-gray-900"><a class="" href="#"><img class="h-40 rounded w-full object-cover object-center mb-2 xl:mb-0" alt="No alt" src="{{ asset('frontend/images/gallery/integrity.png')}}"/></a>
            <div class="p-6 rounded-lg dark:divide-undefined">
              <h2 class="text-lg text-gray-900 title-font mb-0 font-semibold dark:text-gray-200 dark:divide-undefined">Integrity</h2>
              <p class="">We are fair and ethical while taking every decision Our team also provides consultations on all architectural issues, even if you need.</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/2 xl:w-1/4">
          <div class="bg-gray-50 dark:bg-gray-900"><img class="h-40 rounded w-full object-cover object-center mb-2 xl:mb-0" alt="No alt" src="{{ asset('frontend/images/gallery/transparency.png')}}" />
            <div class="p-6 rounded-lg dark:divide-undefined">
              <h2 class="text-lg text-gray-900 title-font mb-0 font-semibold dark:text-gray-200 dark:divide-undefined">Transparency</h2>
              <p class="">We share evert learning and failure with the world and be open for feedback.</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/2 xl:w-1/4">
          <div class="bg-gray-50 dark:bg-gray-900"><img class="h-40 rounded w-full object-cover object-center mb-2 xl:mb-0" alt="No alt" src="{{ asset('frontend/images/gallery/quality.png')}}" />
            <div class="p-6 rounded-lg dark:divide-undefined">
              <h2 class="text-lg text-gray-900 title-font font-semibold mb-0 dark:text-gray-200">Quality And Customer Focus</h2>
              <p class="">we strives to provide highest quality of products with and objective to add value to the success of our customers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="">
    <div class="text-center px-3 py-16 max-w-7xl mx-auto">
      <h1 class="font-black tracking-tight text-slate-900 text-3xl dark:text-slate-100 sm:text-4xl">What We Do!</h1>
      <p class="mt-3 text-lg max-w-lg mx-auto">From pristine quarries to precision manufacturing and global exports, we epitomize excellence in the granite industry!</p>
      <div class="grid gap-2 mt-12 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 ">
        <div class="text-center"><img class="rounded-full w-60 mx-auto mb-4 bg-blue-100" alt="No alt" src="{{ asset('frontend/images/gallery/quarry.png')}}" />
          <h1 class="text-2xl font-bold dark:text-slate-200 text-slate-800">Quarry</h1>

        </div>
        <div class="text-center"><img class="rounded-full w-60 mx-auto mb-4 bg-blue-100" alt="No alt" src="{{ asset('frontend/images/gallery/manufacturing.png')}}" />
          <h1 class="text-2xl font-bold dark:text-slate-200 text-slate-800">Manufacture</h1>

        </div>
        <div class="text-center"><img class="rounded-full w-60 mx-auto mb-4 bg-blue-100" alt="No alt" src="{{ asset('frontend/images/gallery/export.png')}}" />
          <h1 class="text-2xl font-bold dark:text-slate-200 text-slate-800">Exports</h1>

        </div>
      </div>
    </div>
  </div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full  md:px-24 lg:px-8 lg:py-20" style="background: #207FBF">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight sm:text-4xl md:mx-auto">Our Products are designed to last a lifetime</h2>
      <p class="text-base md:text-lg"> In days to come, with our different approach and strategy, by coping-up with our customer’s expectations in terms of quality, price & timely delivery and with our personalized interaction we aim to be the top natural stone export company from India. Kalpa Granites is known for its commitment and quality products. We can cater all your natural stone needs of slabs/tiles from Granite, Marble, Slate, Quartzite, Sandstone, Limestone & Stone mosaics. </p>
    </div>
    <div class="max-w-lg space-y-3 sm:mx-auto lg:max-w-xl">
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6 transition-colors duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"Crafting timeless elegance in every slab of marble and granite."</span>
      </div>
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6  duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"Transforming spaces with the enduring beauty of natural stone."</span>
      </div>
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6  duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"From quarries to your home, we bring the essence of luxury in granite."</span>
      </div>
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6  duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"Marble and granite, where tradition meets modern sophistication."</span>
      </div>
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6  duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"Unveiling the artistry within each cut – your space, our masterpiece."</span>
      </div>
      <div class="flex items-center p-2  duration-200 border shadow group  rounded-global">
        <div class="mr-2"><span class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8"><svg class="w-6 h-6  duration-200 group-hover:text-white text-primary-500 sm:w-8 sm:h-8" class="w-6 h-6  duration-200 text-deep-purple-accent-400 group-hover:text-white sm:w-8 sm:h-8" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg></span></div><span class=" duration-200 group-hover:text-white">"Elevate your surroundings with the strength of granite and the grace of marble."</span>
      </div>
    </div>
  </div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="mx-auto sm:text-center lg:max-w-2xl">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-slate-900 dark:text-slate-100 sm:text-4xl md:mx-auto">Kalpa Granites is a well renowned brand in its industry</h2>
        <p class="text-base md:text-lg">We are also well equipped for cut-to-size projects, Vanities, Counter Tops etc. all over the world through our distributor network. Our granite plant, International Stones is well equipped with imported plant and machinery, adopting the latest technology for cutting and polishing. Our state-of-the art plant is also well equipped to undertake cut-to-size projects of any calibre.</p>
      </div>
      <div class="mb-4 lg:mb-6"><img class="object-cover w-full h-56 rounded sm:h-64 md:h-80 lg:h-96 lg:object-contain" alt="No alt" src="https://images.unsplash.com/photo-1501139083538-0139583c060f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80" /></div>
      <p class="max-w-xl mb-4 text-base sm:mx-auto">We are also well equipped for cut-to-size projects, Vanities, Counter Tops etc. all over the world through our distributor network. Our granite plant, International Stones is well equipped with imported plant and machinery, adopting the latest technology for cutting and polishing. Our state-of-the art plant is also well equipped to undertake cut-to-size projects of any calibre </p><a class="inline-flex items-center font-semibold  duration-200 text-secondary hover:text-secondary-800" href="#"><span class=""> Learn more </span><span class="inline-block w-3 ml-2"><svg class="inline-block w-3 ml-2" class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
          </svg></span></a>
    </div>
  </div>

  <div class="section-full p-t80 p-b50 sx-bg-secondry bg-no-repeat bg-bottom-center mobile-page-padding" style="background-image: url(frontend/assets/img/Rectangle%209.png); background-size: cover;"  >
    <div class="container">
    
    <div class="section-head">
    <div class="sx-separator-outer separator-center">
    <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
    <h3 class="sep-line-one">We Achieved</h3>
    </div>
    </div>
    </div>
    <style>
      .text-white {
        background-color: #207FBF;
      }
    </style>
    <div class="section-content ">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 m-b30" >
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">01</span><span class="month">Oct</span></div>
    <h4 class="text-uppercase our-story-year">2013</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">20</span><span class="month">Mar</span></div>
    <h4 class="text-uppercase our-story-year">2014</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">28</span><span class="month">Aug</span></div>
    <h4 class="text-uppercase our-story-year">2014</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">20</span><span class="month">Oct</span></div>
    <h4 class="text-uppercase our-story-year">2015</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">27</span><span class="month">Nov</span></div>
    <h4 class="text-uppercase our-story-year">2015</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">07</span><span class="month">Mar</span></div>
    <h4 class="text-uppercase our-story-year">2016</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">19</span><span class="month">July</span></div>
    <h4 class="text-uppercase our-story-year">2017</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <div class="sx-box our-story text-white">
    <div class="mt-media our-story-info d-flex justify-content-start">
    <div class="our-story-time"><span class="date">27</span><span class="month">May</span></div>
    <h4 class="text-uppercase our-story-year">2018</h4>
    </div>
    <div class="our-story-detail">
    <h4>Achievement 2000</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

  <style>
    .py-10 {
        background: #207FBF;
 
    }
    .hover-animation-1 {
      background: #207FBF;
    }
  </style>

  
<div class="section-full mobile-page-padding bg-repeat p-t80 p-b80" style="background-image:url(images/background/bg6.jpg)">
  <div class="section-content">
  <div class="container">
  
  <div class="section-head">
  <div class="sx-separator-outer separator-center">
  <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
  <h3 class="sep-line-one">Testimonial</h3>
  </div>
  </div>
  </div>
  
  
  <div class="owl-carousel testimonial-home-two owl-btn-vertical-center">
  <div class="item">
  <div class="testimonial-1 hover-animation-1 bg-gray">
  <div class="testimonial-detail clearfix">
  <div class="testimonial-pic  scale-in-center"><img src="https://sungranitesindia.com/frontend/images/testimonials/pic1.jpg" width="100" height="100" alt></div>
  <span class="testimonial-position">Architect</span>
  <h4 class="testimonial-name">Ragavendra</h4>
  <span class="fa fa-quote-right"></span>
  </div>
  <div class="testimonial-text">
  <p>Amazing fast and reliable customer support! The team of willing to go mile for customer service! Thanks!</p>
  </div>
  </div>
  </div>
  <div class="item">
  <div class="testimonial-1  hover-animation-1 bg-gray">
  <div class="testimonial-detail clearfix">
  <div class="testimonial-pic scale-in-center"><img src="https://sungranitesindia.com/frontend/images/testimonials/pic2.jpg" width="100" height="100" alt></div>
  <span class="testimonial-position">Architect</span>
  <h4 class="testimonial-name">Chozharajan</h4>
  <span class="fa fa-quote-right"></span>
  </div>
  <div class="testimonial-text">
  <p>Great product, just what we were looking for. Easy to install, easy to transport. Well organized. Really enjoyed the support.</p>
  </div>
  </div>
  </div>
  <div class="item">
  <div class="testimonial-1 hover-animation-1 bg-gray">
  <div class="testimonial-detail clearfix">
  <div class="testimonial-pic  scale-in-center"><img src="https://sungranitesindia.com/frontend/images/testimonials/pic3.jpg" width="100" height="100" alt></div>
  <span class="testimonial-position">Interior designer</span>
  <h4 class="testimonial-name">Barney Smith</h4>
  <span class="fa fa-quote-right"></span>
  </div>
  <div class="testimonial-text">
  <p>Amazing fast and reliable customer support! The team of willing to go mile for customer service! Thanks!</p>
  </div>
  </div>
  </div>
  <div class="item">
  <div class="testimonial-1 hover-animation-1 bg-gray">
  <div class="testimonial-detail clearfix">
  <div class="testimonial-pic scale-in-center"><img src="https://sungranitesindia.com/frontend/images/testimonials/pic4.jpg" width="100" height="100" alt></div>
  <span class="testimonial-position">Architect</span>
  <h4 class="testimonial-name">Rosalina D. William</h4>
  <span class="fa fa-quote-right"></span>
  </div>
  <div class="testimonial-text">
  <p>Great product, just what we were looking for. Easy to install, easy to transport. Well organized. Really enjoyed the support.</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  </div>


</body>

</html>

@endsection
