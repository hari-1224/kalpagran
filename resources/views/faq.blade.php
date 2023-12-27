@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .timeline {
      --color: #19759C;
      --timeline-font-color: white;

      padding: 0 60px;
      margin: 20px 0 0 0;
      position: relative;
      counter-reset: list 0;
    }

    .timeline-item {
      list-style: none;
      border-left: 4px solid var(--color);

      &:last-child {
        border-left-color: transparent;
      }
    }

    .timeline-title {
      margin: 0;
      padding: 0;
      font-weight: 600;

      &:before {
        --size: 40px;
        color: var(--timeline-font-color);
        position: relative;
        left: -22px;
        display: inline-block;
        width: var(--size);
        height: var(--size);
        line-height: var(--size);
        text-align: center;
        border-radius: 50%;
        background-color: var(--color);
        counter-increment: list;
        content: counter(list);
      }
    }

    .timeline-text {
      margin: 0;
      padding: 40px;
    }

  @media (max-width: 767px) {
    .header-banner {
      margin-top: 18%;
    }
  }

  .heading {
            text-align: center;
            font-weight: 600;
            color: #333;
            margin-bottom: 2rem;
            margin-top: 2rem;
  }
  </style>
</head>

<body>
  <div class="banner-container header-banner" style="background-image: url('frontend/assets/img/blog.jpg'); height:100%;width:100%;padding-top:35%;background-size:cover;"></div>


  <ul class="timeline" >

    <h2 class="heading">"Beyond Borders: The Global Influence of the Granite Industry"</h2>

    <li class="timeline-item">
      <h3 class="timeline-title">How do we work?</h3>
      <p class="timeline-text">Kalpa granite industries limited is in the business of Manufacture and Supply of Granite Tiles, Slabs and Cut-to-Size & Related Value Added Products in the safest and most environmentally friendly possible way.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Quality of our products?</h3>
      <p class="timeline-text">A strict 100% inspection system is adopted at all stages of the manufacturing process. The company maintains best quality standards to meet the ever-changing expectations of buyers worldwide, both in terms of product and delivery. This obsession for quality was rewarded when the company received ISO 9001:2015 certification for Quality Management Systems.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Export Countries?</h3>
      <p class="timeline-text">Kalpa Granito India Ltd exports spread across an ever growing network of more than 20 countries. Treading along the global pathway,  Kalpa Granites has spread its wings ahead to deliver its best product globally.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Quality of work environment?</h3>
      <p class="timeline-text">Complying with applicable National / International legal requirements, principles of the international instruments and other requirements to which the company subscribes that relate to its product quality, environmental aspects and occupational health hazards.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Health & Safety?</h3>
      <p class="timeline-text">Enhancement of Occupational Health & Safety Performance by eliminating the hazards, reducing the OH&S Risks and providing safe and healthy working conditions.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Our Visionary Leadership?</h3>
      <p class="timeline-text">The Kalpa Granites is the brainchild of entrepreneurs, whose dream was to create the world’s most sustainable building materials company.Their inestimable experience together with a young and dynamic management team has created a formidable entity that is growing at an amazing pace.</p>
    </li>
    <li class="timeline-item">
      <h3 class="timeline-title">Corporate Social Responsibility?</h3>
      <p class="timeline-text">Besides quality, we lay an equal emphasis on good housekeeping and safe working conditions. Every employee of Kalpa Granites India Ltd,  is encouraged and educated about environment protection and conservation of natural resources.</p>
    </li>
  </ul>

</body>

</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
  <title>Custom Bootstrap 4 card</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
  html {
    font-size: 14px;
  }
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }
</style>

<body>
  <div class="container" style="padding-top: 10rem;">
    <div class="row pt-5 m-auto">
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">How do we work?</h4>

            <p class="card-text">Kalpa granite industries limited is in the business of Manufacture and Supply of Granite Tiles, Slabs and Cut-to-Size & Related Value Added Products in the safest and most environmentally friendly possible way.</p>
          </div>

        </div>

      </div>
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Quality of our products?</h4>

            <p class="card-text">A strict 100% inspection system is adopted at all stages of the manufacturing process. The company maintains best quality standards to meet the ever-changing expectations of buyers worldwide, both in terms of product and delivery. This obsession for quality was rewarded when the company received ISO 9001:2015 certification for Quality Management Systems.</p>
          </div>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Export Countries?</h4>

            <p class="card-text">Kalpa Granito India Ltd exports spread across an ever growing network of more than 20 countries. Treading along the global pathway,  Kalpa Granites has spread its wings ahead to deliver its best product globally</p>
          </div>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Quality of work environment? </h4>

            <p class="card-text">Complying with applicable National / International legal requirements, principles of the international instruments and other requirements to which the company subscribes that relate to its product quality, environmental aspects and occupational health hazards.</p>
          </div>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Health & Safety?</h4>

            <p class="card-text">acod-content p-tb15">Enhancement of Occupational Health & Safety Performance by eliminating the hazards, reducing the OH&S Risks and providing safe and healthy working conditions.</p>
          </div>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Our Visionary Leadership?</h4>

            <p class="card-text">The Kalpa Granites is the brainchild of entrepreneurs, whose dream was to create the world’s most sustainable building materials company.Their inestimable experience together with a young and dynamic management team has created a formidable entity that is growing at an amazing pace.</p>
          </div>

        </div>

      </div>

      <div class="corporate col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Corporate Social Responsibility?</h4>

            <p class="card-text">Besides quality, we lay an equal emphasis on good housekeeping and safe working conditions. Every employee of Kalpa Granites India Ltd,  is encouraged and educated about environment protection and conservation of natural resources.</p>
          </div>

        </div>

      </div>
    </div>
  </div>

</body>

</html>

<style>
  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

.corporate {
    margin-block: 30px;
}
</style> --}}

 @endsection
