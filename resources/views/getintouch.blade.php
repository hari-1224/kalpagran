
@extends('layouts.app')

@section('content')
<div class="banner-container header-banner" style="background-image: url('frontend/assets/img/get-in-touch.jpg');width:100%;padding-top:35%;background-size:cover;"></div>
<section class="contact-page-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-map-marked"></i>
              </div>
              <div class="contact-info-text">
                <h2>address</h2>
                <span>#1223-1224,Sappadi Village Road,</span> 
                <span>Hosur-Krishnagiri,India</span> 
              </div>
            </div>            
          </div>          
        </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail</h2>
                <span><a href="mailto:Kalpagranite@gmail.com" target="_blank" style="color: #fff">Kalpagranite@gmail.com</a></span> 
                <span style="visibility: hidden">yourmail@gmail.com</span>
              </div>
            </div>            
          </div>                
        </div>                
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>office time</h2>
                <span>Mon - Thu  9:00 am - 4.00 pm</span>
                <span>Thu - Mon  10.00 pm - 5.00 pm</span>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="row justify-content-center" style="margin-bottom: 180px">
        <div class="col-md-8">
          <div class="contact-page-form" method="post">
            <h2>Get in Touch</h2> 
            <form id="submit-form" class="contact-form  bg-gray p-a30" action="{{ route('form.store') }}" method="POST" >
                @csrf
              <div class="row inputs">
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field ">
                    <input type="text"  class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
              </div>  
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                </div>
              </div>                              
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
                </div>
              </div>  
              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                    <input type="text" class="form-control" id="country" placeholder="Enter your country" name="country">
                </div>
              </div>                
              <div class="form-group col-md-12 message-input">
                <div class="single-input-field">
                    <textarea class="form-control" name="note" id="note" placeholder="Enter any notes"></textarea>
                </div>
              </div>                                                
              <div class="form-group single-input-fieldsbtn">
                <button type="submit"  class="site-button  btn-half">Submit</button>
              </div>                          
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
  </section>





<style>
.row .inputs{
  margin-left: 1px;
} 

@media (max-width: 767px) {
  .row .inputs {
    margin-left: -5%;
  }
}

section {
    padding: 60px 0;
    min-height: 100vh;
}
.contact-info {
display: inline-block;
width: 100%;
text-align: center;
margin-bottom: 10px;
}
.contact-info-icon {
margin-bottom: 15px;
}
.contact-info-item {
/* background: #071c34; */
background-image: url(frontend/assets/img/contact-bg.png);
padding: 30px 0px;
}
.contact-page-sec .contact-page-form h2 {
color: #071c34;
text-transform: capitalize;
font-size: 22px;
font-weight: 700;
}
.contact-page-form .col-md-6.col-sm-6.col-xs-12 {
padding-left: 0;
}  

.contact-form {
  /* background: #071c34; */
  background-image: url(frontend/assets/img/contact-bg.png);
  background-size: cover;
  background-repeat: no-repeat;
  padding:5%;
}
.contact-page-form.contact-form input {
margin-bottom: 5px;
}  
.contact-page-form.contact-form textarea {
height: 110px;
}
.contact-page-form.contact-form input[type="submit"] {
background: #071c34;
width: 150px;
border-color: #071c34;
}
.contact-info-icon i {
font-size: 48px;
color: #fda40b;
}
.contact-info-text p{margin-bottom:0px;}
.contact-info-text h2 {
color: #fff;
font-size: 22px;
text-transform: capitalize;
font-weight: 600;
margin-bottom: 10px;
}
.contact-info-text span {
color: #fff;
font-size: 16px;
font-weight: ;
display: inline-block;
width: 100%;
}

.contact-page-form input {
background: #f9f9f9 none repeat scroll 0 0;
border: 1px solid #f9f9f9;
margin-bottom: 20px;
padding: 12px 16px;
width: 100%;
/* border-radius: 4px; */
}
.contact-page-sec {
    margin-top: 50px;
    margin-bottom: -140px;
    padding-top: 8rem;
    margin-top: -6%;
}
.contact-page-form .message-input {
display: inline-block;
width: 100%;
padding-left: 0;
}
.single-input-field textarea {
background: #f9f9f9 none repeat scroll 0 0;
border: 1px solid #f9f9f9;
width: 100%;
height: 120px;
padding: 12px 16px;
border-radius: 4px;
}
.single-input-fieldsbtn button[type="submit"] {
background: #FDA40B none repeat scroll 0 0;
color: #fff;
display: inline-block;
font-weight: 600;
padding: 10px 0;
text-transform: capitalize;
width: 150px;
margin-top: 5%;
font-size: 16px;
border: none;
margin-left: 37%;
border-radius: 4px;
}
.single-input-fieldsbtn button:hover {
  background: #cc8305;
}
.single-input-fieldsbtn input[type="submit"]:hover{background:#071c34;transition: all 0.4s ease-in-out 0s;border-color:#071c34}
.single-input-field  h4 {
color: #464646;
text-transform: capitalize;
font-size: 14px;
}
.contact-page-form {
display: inline-block;
width: 100%;
margin-top: 30px;
}

.contact-page-map {
margin-top: 36px;
}

@media (max-width: 767px) {
  .single-input-fieldsbtn button[type="submit"] {
    margin-left:17%;
    margin-top: -5%;
  }
  .form-group {
    margin-left: 5%;
  }
  .inputs {
    margin-top: -30%;
  }
}

 .single-input-field input {
        /* border: none; */
        /* border-bottom: 2px solid #ccc; */
        padding: 8px; 
        background: rgba(205, 228, 213, 0.7);
        border: 1px solid #eeeeee;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .single-input-field textarea {
        /* border: none; */
        /* border-bottom: 2px solid #ccc; */
        padding: 8px; 
        background: rgba(205, 228, 213, 0.7);
        border: 1px solid #eeeeee;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    } 

.popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

       .popup-box {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    text-align: center;
    font-size:30px;
    max-width: 400px; /* Adjust the maximum width as needed */
    margin: 0 auto; /* Center the pop-up horizontally */
    position: absolute;
    top: 50%; /* Position the pop-up vertically at 50% of the screen height */
    left: 50%; /* Position the pop-up horizontally at 50% of the screen width */
    transform: translate(-50%, -50%); /* Center the pop-up precisely */
}


        /* Style for the success message */
        .popup-success {
            color: #28a745; /* Green color for success */
            font-weight: bold;
        }

        /* Style for the error message */
        .popup-error {
            color: #dc3545; /* Red color for error */
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

          /* #note {
          margin-left: 2%;
          margin-right: 10%;
        } 
        .form-control {
          margin-left: 4%;
        } */

        @media (max-width: 767px) {
          .inputs {
            padding-top: 30%;
            padding-right: 5%;
          }
          .header-banner {
            margin-top: 18%;
          } 
          .contact-page-sec {
            margin-top: -25%;
          }
        }
</style>

<script>
    $(document).ready(function () {
        $("#submit-form").submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                type: "POST",
                url: "{{ route('form.store') }}",
                data: $(this).serialize(), // Serialize form data
                success: function (response) {
                    // Display success message and show pop-up
                    $("#response-message").html('Thank You <br> Form submitted successfully.').addClass('popup-success');
                    $("#popup-container").fadeIn();

                    // Hide the pop-up after 3 seconds (adjust as needed)
                    setTimeout(function () {
                        $("#popup-container").fadeOut();
                    }, 3000);

                    // Clear the form
                    $("#submit-form")[0].reset();
                },
                error: function (xhr, status, error) {
                    // Display error message and show pop-up
                    $("#response-message").html('An error occurred while submitting the form.').addClass('popup-error');
                    $("#popup-container").fadeIn();

                    // Hide the pop-up after 3 seconds (adjust as needed)
                    setTimeout(function () {
                        $("#popup-container").fadeOut();
                    }, 3000);
                },
            });
        });

        // Close the pop-up when the close button is clicked
        $("#popup-close").click(function () {
            $("#popup-container").fadeOut();
        });
    });
</script>
@endsection