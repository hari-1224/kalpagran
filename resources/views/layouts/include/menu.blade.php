{{-- <div class="topheader">
  <div class="container align-items-center">
    <ul class="list-unstyled">
      <li><a href="mailto:Kalpagranite@gmail.com" target="_blank"><img style="width:20px;" src="frontend/assets/img/email.png"/>Kalpagranite@gmail.com</a></li>
      <li><a href="tel:+919344139392"> <img style="width: 20px;" src="frontend/assets/img/phone.png" />+91 93441 39392,+91 96261 35355</a></li>
      <li ><a href="https://wa.me/8148138485" target="_blank"><img style="width:20px;" src="frontend/assets/img/message.png"/>+91 81481 38485</a></li>
      <li> <a href="{{ url('getintouch') }}" target="_blank"><img style="width:20px;"src="frontend/assets/img/form.png"/>Get In Touch</a> </li>
      <li> <a href="https://www.facebook.com/profile.php?id=100087115496080" target="_blank"><img style="width:25px;" src="/frontend/assets/img/fb.png"/></a></li>
      <li> <a href="https://www.instagram.com/kalpagranites/" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/insta.png"/></a></li>
      <li> <a href="https://twitter.com/kalpagranites" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/twitter.png"/></a></li>
      <li> <a href="https://www.linkedin.com/in/kalpa-granites-10082a291/" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/linkedin (2).png"/></a></li>
    </ul>
  </div>
</div>
<div class="container d-flex ">
  <h1 class="logo me">
      <a href="https://kalpagranites.com">
          <img src="frontend/assets/img/kalpalogo.png" alt="Logo">
      </a>
  </h1>

  <?php
  $currentPage = basename($_SERVER['REQUEST_URI']);
  ?>

  <div class="container">
      <div id="navbar" class="navigation d-flex justify-content-center align-items-center" >
          <ul class="list-unstyled text-center d-inline-block">
              <li class="d-inline-block<?php if ($currentPage === '') echo ' active'; ?>"><a href="/">Home</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'about') echo ' active'; ?>"><a href="/about">About Us</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'our-process') echo ' active'; ?>"><a href="/our-process">Our Process</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'products') echo ' active'; ?>"><a href="/products">Our Products</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'projects') echo ' active'; ?>"><a href="/projects">Our Projects</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'quarry') echo ' active'; ?>"><a href="/quarry">Our Quarries</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'gallery') echo ' active'; ?>"><a href="/gallery">Gallery</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'services') echo ' active'; ?>"><a href="/services">Services</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'faq') echo ' active'; ?>"><a href="/faq">Blog News</a></li>
              <li class="d-inline-block<?php if ($currentPage === 'contact') echo ' active'; ?>"><a href="/contact">Contact Us</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </div>
  </div>

  <style>
    ul li a img {
      filter: hue-rotate(180deg);
     
    }

    @media (max-width: 767px) {
      .topheader {
        overflow: auto;
        white-space: nowrap;
      }
    }
  </style>
</div> --}}
<div class="header tophead fixed-top">
<div class="" id="toheadermb">
  <?php
  $currentPage = basename($_SERVER['REQUEST_URI']);
?>
  <div class="topheader ">
    <div class="container align-items-center">
      <ul class="list-unstyled">
        <li><a href="mailto:Kalpagranite@gmail.com" target="_blank"><img src="frontend/assets/img/email.png" alt="Email" /> Kalpagranite@gmail.com</a></li>
        <li><a href="tel:+919344139392"> <img src="frontend/assets/img/phone.png" alt="Phone" /> +91 93441 39392 </a></li><span><li><a href="tel:+919626135355"> +91 96261 35355 </a></li></span>
        <li><a href="https://wa.me/8148138485" target="_blank"><img src="frontend/assets/img/message.png" alt="WhatsApp" /> +91 81481 38485</a></li>
        <li> <a href="{{ url('getintouch') }}" target="_blank"><img src="frontend/assets/img/form.png" alt="Get in Touch" /> Get In Touch</a> </li>
        <li> <a href="https://www.facebook.com/profile.php?id=100087115496080" target="_blank"><img style="width:25px;" src="/frontend/assets/img/fb.png"/></a></li>
        <li> <a href="https://www.instagram.com/kalpagranites/" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/insta.png"/></a></li>
        <li> <a href="https://twitter.com/kalpagranites" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/twitter.png"/></a></li>
        <li> <a href="https://www.linkedin.com/in/kalpa-granites-10082a291/" target="_blank"> <img style="width:25px;" src="/frontend/assets/img/linkedin (2).png"/></a></li>
      </ul>
    </div>
  </div>
</div>

<nav >
  
  <a href="/"><h2 class="logo" ><img src="frontend/assets/img/kalpalogo.png" alt="Logo" ></h2></a>
  <div class="bars">
    <i class="fa fa-bars"></i>
  </div>
  
  <ul class="nav-links">
    <li class="nav-link <?php if ($currentPage === '') echo ' active'; ?>"><a href="/">Home</a></li>
    <li class="nav-link <?php if ($currentPage === 'about') echo ' active'; ?>"><a href="/about">About Us</a></li>
    <li class="nav-link <?php if ($currentPage === 'our-process') echo ' active'; ?>"><a href="/our-process">Our Process</a></li>
    <li class="nav-link <?php if ($currentPage === 'products') echo ' active'; ?>"><a href="/products">Our Products</a></li>
    <li class="nav-link <?php if ($currentPage === 'projects') echo ' active'; ?>"><a href="/projects">Our Projects</a></li>
    <li class="nav-link <?php if ($currentPage === 'quarry') echo ' active'; ?>">
      <a href="/quarry">Our Quarries</a>
  
      <div class="dropdown-container">
        <button class="btn dropdown-toggle" type="button" id="queryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <span class="caret"></span>
        </button>
        <div class="dropdown-menu" aria-labelledby="queryDropdown">
            @if ($currentPage === 'quarry')
                @foreach ($quarr as $quarry)
                    <a href="#" class="dropdown-item query-link" data-images="{{ $quarry->avatar . '|' . $quarry->avatar2 . '|' . $quarry->avatar3 . '|' . $quarry->avatar4 . '|' . $quarry->avatar5 }}" style="border: none;">
                        {{ $quarry->name }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
  </li>
  

    <li class="nav-link <?php if ($currentPage === 'gallery') echo ' active'; ?>"><a href="/gallery">Gallery</a></li>
    <li class="nav-link <?php if ($currentPage === 'services') echo ' active'; ?>"><a href="/services">Services</a></li>
    <li class="nav-link <?php if ($currentPage === 'faq') echo ' active'; ?>"><a href="/faq">Blog & News</a></li>
    <li class="nav-link <?php if ($currentPage === 'contact') echo ' active'; ?>"><a href="/contact">Contact Us</a></li>
</ul>

</nav>
</div>
<style>
   /* .header {
  position: fixed;
  width: 100%;
  z-index: 1000;
  
}   */

.container a {
  font-weight: 600;
}
    
    .dropdown-menu .dropdown-item {
        background-color: transparent !important;
        /* color: white;  */
    }

   
    .dropdown-menu .dropdown-item:hover {
        color: tomato !important;
    }

   
    .dropdown-menu .dropdown-item.active {
        color: tomato !important;
    }


        @media (max-width: 767px) {
            .nav-container {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch; 
            }

            .nav-link {
                display: inline-block;
            }
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
