@extends('admin.admin_layouts')

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/forms/select/select2.min.css')}}">
<!-- END: Vendor CSS-->

@section('admin_content')
    


  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Website Settings</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                             
                                <li class="breadcrumb-item active">Website Settings
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content-body">
          
            <!-- Vertical Wizard -->
            <section class="vertical-wizard">
                <div class="bs-stepper vertical vertical-wizard-example">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#account-details-vertical">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Website Details</span>
                                    <span class="bs-stepper-subtitle">Setup Account Details</span>
                                </span>
                            </button>
                        </div>
                        
                        <div class="step" data-target="#address-step-vertical">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Address</span>
                                    <span class="bs-stepper-subtitle">Add Address</span>
                                </span>
                            </button>
                        </div>
                        <div class="step" data-target="#social-links-vertical">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Social Links</span>
                                    <span class="bs-stepper-subtitle">Add Social Links</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                    <div id="account-details-vertical" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Account Details</h5>
                                <small class="text-muted">Enter Your Account Details.</small>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- alert any errors-->
                             <!--begin::Form-->
                             <form method="post" action="{{ route('update.sitesetting')}}">
                                @csrf   
                               
                                <input type="hidden" name="id" value="{{ $setting->id }}"> 
  
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-username">Website Name</label>
                                    <input type="text" id="sitename"  name="sitename" class="form-control" placeholder="johndoe" value="{{ $setting->site_name }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="senthil@laprosurgeon.com" aria-label="senthil" value="{{ $setting->email }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-password-toggle col-md-6">
                                    <label class="form-label" for="phone1">Mobile One</label>
                                    <input type="number" id="phone1" name="phone1" class="form-control" placeholder="9876541230" value="{{ $setting->phone_one }}" />
                                </div>
                                <div class="form-group form-password-toggle col-md-6">
                                    <label class="form-label" for="phone2">Mobile Two</label>
                                    <input type="number" id="phone2" name="phone2" class="form-control" placeholder="9876541230" value="{{ $setting->phone_two }}" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                </button>
                            </div>
                        </div>
                     
                        <div id="address-step-vertical" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Address</h5>
                                <small>Enter Your Address.</small>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-address">Address</label>
                                    <input type="text" id="vertical-address" name="address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" value="{{ $setting->address }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-landmark">Landmark</label>
                                    <input type="text" id="vertical-landmark" name="landmark" class="form-control" placeholder="Borough bridge" value="{{ $setting->landmark }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="pincode2">Pincode</label>
                                    <input type="text" id="pincode2" name="pincode" class="form-control" placeholder="658921" value="{{ $setting->pincode }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="city2">City</label>
                                    <input type="text" id="city2" name="city" class="form-control" placeholder="Birmingham" value="{{ $setting->city }}" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                </button>
                            </div>
                        </div>
                        <div id="social-links-vertical" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Social Links</h5>
                                <small>Enter Your Social Links.</small>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-twitter">Twitter</label>
                                    <input type="text" id="vertical-twitter" name="twitter" class="form-control" placeholder="https://twitter.com/laparosurgeon" value="{{ $setting->twitter }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-facebook">Facebook</label>
                                    <input type="text" id="vertical-facebook" name="facebook" class="form-control" placeholder="https://facebook.com/laparosurgeon" value="{{ $setting->facebook }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-google">Youtube</label>
                                    <input type="text" id="vertical-google" name="youtube" class="form-control" placeholder="https://youtube.com/laparosurgeon" value="{{ $setting->youtube }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="vertical-linkedin">Instagram</label>
                                    <input type="text" id="vertical-linkedin" name="instagram" class="form-control" placeholder="https://instagram.com/laparosurgeon" value="{{ $setting->landmark }}" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success" type="submit" value="submit">Submit</button>
                            </div>
                        </form>
                </div>
                    </div>
                </div>
            
            </section>
            <!-- /Vertical Wizard -->



        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
