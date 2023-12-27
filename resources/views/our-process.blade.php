@extends('layouts.app')
@section('content')
<!DOCTYPE html>
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

  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }
  @media (max-width: 767px) {
    .header-banner {
      margin-top: 18%;
    }
  }
  .heading {
    font-weight: 600;
    margin-top: 2rem;
    text-align: center;
  }
  .para {
    font-size: 14px;
    font-weight: 600;
    margin-top: 1rem;
  }
</style>
<div class="banner-container header-banner" style="background-image: url('frontend/assets/img/process.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
<body>
  <h2 class="heading">"From Earth to Artistry: The Intricate Stages of Granite Processing"</h2>
  
  <div class="container" style="padding-top: 10rem;margin-top:-10rem;">
    <div class="para">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar massa at libero rhoncus, eget ullamcorper nunc feugiat. Quisque dapibus nec nunc eget tristique. Suspendisse potenti. Duis gravida nec justo id cursus. Proin vel magna eget libero luctus scelerisque. Vestibulum eget tincidunt nisl, vel fermentum risus. Suspendisse potenti. Morbi non elit ac dui ullamcorper ultrices. Vivamus tincidunt ullamcorper ligula, in ultricies libero feugiat vel. Nam a fermentum tellus. Phasellus vitae dui nisl.</p>

    <p>Nullam venenatis leo non mi ultricies, a bibendum turpis interdum. Sed nec fermentum orci, eget euismod sapien. Nam ut justo ac neque vulputate mattis. Fusce non libero urna. Curabitur vestibulum risus vel varius tincidunt. Ut sit amet libero et leo efficitur tincidunt. Suspendisse potenti. Vivamus at bibendum justo, a suscipit turpis. Fusce in semper justo, id ullamcorper turpis. Aenean semper ligula nec nisi efficitur, id commodo lectus sagittis. Nullam aliquet euismod justo, id laoreet sem vestibulum a. Maecenas quis ex vel tortor convallis sollicitudin. Donec vel enim id sem pellentesque dignissim vel a nisi. Nulla facilisi.</p>

    <p>Curabitur bibendum justo vel dolor volutpat, sit amet gravida neque suscipit. Pellentesque eu lacus vel neque bibendum venenatis. Ut quis risus a justo ullamcorper cursus. Integer cursus ipsum at odio tincidunt, eget aliquet ligula consequat. Curabitur a aliquam mi. Vestibulum nec urna sit amet metus sollicitudin convallis. Proin euismod, sem nec tristique dapibus, erat lacus vehicula orci, vel efficitur lacus libero nec sapien. Fusce malesuada metus in dolor egestas, in congue nisi bibendum.</p>

    <p>Donec non mauris sit amet lectus sagittis varius. In hac habitasse platea dictumst. Sed consectetur felis vel metus blandit, at tincidunt odio vestibulum. Vivamus accumsan ex vel lacus euismod, vel commodo velit euismod. Fusce nec dolor arcu. Nam ac turpis a libero fermentum convallis. Quisque id mauris ligula. Etiam euismod quam vel accumsan tristique. Nam vel quam nec nunc vestibulum laoreet non in augue. Nam ac facilisis dui. Integer vel accumsan sapien, at ullamcorper ex.</p>
    </div>
    <div class="row pt-5 m-auto">

      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Extraction and Block Selection</h4>

            <p class="card-text">Extraction (more commonly referred to as quarrying) consists of removing blocks or pieces of stone from an identified and unearthed geologic deposit. Every block that meets the size requirement is then thoroughly checked for quality specifications. We have the most experience personnel including the directors, visiting the quarry and inspecting blocks that will be further processed.</p>
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
            <h4 class="card-title">Block cutting</h4>

            <p class="card-text">The first step of the process is a primary cutting or shaping of the material. This is typically accomplished for granite using a diamond wire-saw. When operating a circular or diamond wire saw, a continuous tream of water over the saw is required in order to dissipate heat generated by the process; sufficiently-elevated temperature can cause major machine and material damage..</p>
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
            <h4 class="card-title">Grinding</h4>

            <p class="card-text">Once the slabs are cut and marked, they are then sent for grinding. Grinding is a process to smoothen the surface of the granite, so they lose their grainy finish, as a result of the cutting process and achieve a smooth to touch finish.</p>
          </div>

        </div>

      </div>

      <div class="epoxy col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid"src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Epoxy application and Polishing</h4>

            <p class="card-text">Epoxy resin is applied to fill all of the pits and micro-fissures that are occuring naturally and also to ensure the the stone is hardened further. This process makes sure that granite ages well over time and lasts longer while preserving its natural beauty. The proper combination of the color of the granite and the epoxy it is paired with will also contribute in bringing out and highlighting the natural color and pattern of the granite. This is the final step before the granite slabs are ready. This step is done to remove any excess resin on top of the granite surface as well as smoothen the surface finish.</p>
          </div>

        </div>

      </div>
      <div class="epoxy col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid"src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">What We Do?</h4>

            <p class="card-text">Our expertise lies in the extraction of high-quality marble and granite from premium quarries. We meticulously select the finest natural stones, ensuring our clients receive products of exceptional quality and beauty.</p>
          </div>

        </div>

      </div>
      <div class="epoxy col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid"src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Quarrying</h4>

            <p class="card-text">At the heart of our operations lies the art of quarrying, where we unearth the raw beauty of marble and granite. Our dedicated team employs expertise and precision, ensuring the extraction process meets the highest standards. We boast a diverse portfolio of quarries, offering a rich spectrum of natural stones to cater to every design vision. Embracing sustainability, our quarrying practices prioritize environmental responsibility, ensuring the longevity of these precious resources.</p>
          </div>

        </div>

      </div>
      <div class="epoxy col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid"src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Wiresaw</h4>

            <p class="card-text">Embracing cutting-edge technology, our wire saw operations redefine precision in granite processing. The wire saw method allows us to extract large granite blocks with unparalleled accuracy, ensuring optimal utilization of resources. Through this innovative approach, we cater to diverse project needs, delivering customized solutions with efficiency and finesse. Our commitment to excellence in wire saw technology reflects our dedication to advancing the granite business.</p>
          </div>

        </div>

      </div>
      <div class="epoxy col-md-6 col-lg-4 pb-3">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid"src="{{ asset('frontend/images/gallery/icon.png')}}" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Edge Cutting</h4>

            <p class="card-text">Meticulously honing the final touch, our edge cutting techniques elevate granite craftsmanship to perfection. With precision and artistry, we refine each piece, ensuring seamless edges that enhance the natural beauty of the granite. Our specialized edge cutting methods cater to a spectrum of design preferences, delivering tailored solutions for every project. As pioneers in granite processing, we bring forth a flawless finish, setting a benchmark for quality and aesthetic appeal.</p>
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

.epoxy {
  margin-block: 30px;
}
</style>

@endsection
