@extends('admin.admin_layouts')

@section('admin_content')
    <!-- BEGIN: Content-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="app-user-edit">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i data-feather="user"></i><span class="d-none d-sm-block">Account</span>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                        <i data-feather="info"></i><span class="d-none d-sm-block">Information</span>
                                    </a>
                                </li> --}}
                                <!-- <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                        <i data-feather="share-2"></i><span class="d-none d-sm-block">Social</span>
                                    </a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <!-- Account Tab starts -->
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->


                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                    <form class="form" method="post" action="{{ url('admin/employee/update/'.$employee->id) }}" enctype="multipart/form-data">
                                        @csrf

                                    <div class="media mb-2">
                                        <img src="{{ asset('backend/images/portrait/small/avatar-s-11.jpg') }}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                        <div class="media-body mt-50">
                                            <h4>Employee Name</h4>
                                            <div class="col-12 d-flex mt-1 px-0">
                                                <label class="btn btn-primary mr-75 mb-0" for="change-picture">
                                                    <span class="d-none d-sm-block">Change</span>
                                                    <input class="form-control" type="file" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" />
                                                    <span class="d-block d-sm-none">
                                                        <i class="mr-0" data-feather="edit"></i>
                                                    </span>
                                                </label>
                                                <button class="btn btn-outline-secondary d-none d-sm-block">Remove</button>
                                                <button class="btn btn-outline-secondary d-block d-sm-none">
                                                    <i class="mr-0" data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    
                                    <div class="row mt-1">
                                        <div class="col-12">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Personal Information</span>
                                            </h4>
                                        </div>
                                        <input type="hidden" class="form-control" value="{{ $employee->emp_id }}" name="emp_id" id="emp_id" />

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" placeholder="Name" value="{{ $employee->name }}" name="name" id="name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="name">City</label>
                                                
                                                <select class="select select-label form-control w-100"  name="city" >
                                                    
												  @foreach($city as $row)
                                                <option value="{{ $row->id }}" <?php if ($row->id == $employee->city) {
																												  echo "selected"; } ?> >{{ $row->name }}</option>
																									@endforeach	
													
                            
                                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Phone</label>
                                                <input type="text" class="form-control" placeholder="Mobile" value="{{ $employee->phone }}" placeholder="&#43;9456824552" name="phone" id="phone" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="birth">DOJ</label>
                                                <input id="birth" type="text" class="form-control birthdate-picker" value="{{ $employee->doj }}" name="doj" placeholder="YYYY-MM-DD" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" placeholder="Email" value="{{ $employee->email }}" name="email" id="email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" placeholder="password" value="{{ $employee->showpassword }}" name="password" id="password" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="website">Department</label>
                                                <input id="website" type="text" class="form-control" name="department" value="{{ $employee->department }}" placeholder="Department..." value="Stocks Audit" name="deparment" id="department" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" placeholder="Address" value="{{ $employee->address }}" name="address" id="address" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select class="form-control" id="role" name="role" value="{{ $employee->role }}">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Staff</option>
                                                    <option value="3">Employee</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label class="d-block mb-1">Gender</label>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="male" value="male" name="gender" class="custom-control-input" <?php if ($employee->gender == 'male') { echo "checked"; }  ?> />
                                                    <label class="custom-control-label" for="male">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="female" value="female" name="gender" class="custom-control-input" <?php if ($employee->gender == 'female') { echo "checked"; }  ?> />
                                                    <label class="custom-control-label" for="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <label class="d-block mb-1">Contact Options</label>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="email-cb" checked />
                                                    <label class="custom-control-label" for="email-cb">Email</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="message" checked />
                                                    <label class="custom-control-label" for="message">Message</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="phone" checked/>
                                                    <label class="custom-control-label" for="phone">Phone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="mb-1 mt-2">
                                                <i data-feather="map-pin" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Please check the permission the user would access</span>
                                            </h4>
                                        </div>
                                       

<br>


<!--begin::Input group-->
<div class="col-md-12">
<!--begin::Wrapper-->
<div class="d-flex flex-stack">

    <!--begin::Checkboxes-->
    <div class="d-flex align-items-center">

      
        <!--begin::Checkbox-->
        <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" id="dashboard" name="dashboard" value="{{$employee->dashboard}}" <?php if ($employee->dashboard == 1) { echo "checked"; }  ?> />
            <label class="custom-control-label" for="dashboard">Dashboard</label>
        </div>
 
          <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" id="employee" name="employee" value="{{$employee->employee}}" <?php if ($employee->employee == 1) { echo "checked"; }  ?> />
            <label class="custom-control-label" for="employee">Employee</label>
        </div>
        
         <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" id="production" name="production" value="{{$employee->production}}" <?php if ($employee->production == 1) { echo "checked"; }  ?> />
            <label class="custom-control-label" for="production">Production</label>
        </div>
       
          <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" id="stock" name="stock" value="{{$employee->stock}}" <?php if ($employee->stock == 1) { echo "checked"; }  ?> />
            <label class="custom-control-label" for="stock">Stocks</label>
        </div>
        <!--end::Checkbox-->
           
      
            
    </div>
    <!--end::Checkboxes-->
        

    
</div>
<!--end::Wrapper-->

<br>
<!--begin::Wrapper-->
<div class="d-flex flex-stack">

    <!--begin::Checkboxes-->
    <div class="d-flex align-items-center">

      
       

              <!--begin::Checkbox-->
              <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="quarry" name="quarry" value="{{$employee->quarry}}" <?php if ($employee->quarry == 1) { echo "checked"; }  ?> />
                <label class="custom-control-label" for="quarry">Quarry</label>
            </div>
            <!--end::Checkbox-->

                <!--begin::Checkbox-->
                <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="purchase" name="purchase" value="{{$employee->purchase}}" <?php if ($employee->purchase == 1) { echo "checked"; }  ?> />
                    <label class="custom-control-label" for="purchase">Purchase</label>
                </div>
                <!--end::Checkbox-->
                
                <!--begin::Checkbox-->
                <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="setting" name="setting" value="{{$employee->setting}}" <?php if ($employee->setting == 1) { echo "checked"; }  ?> />
                    <label class="custom-control-label" for="setting">Setting</label>
                </div>
                <!--end::Checkbox-->
                 <div class="col-md-4 custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="attendance" name="attendance" value="{{$employee->attendance}}"  <?php if ($employee->attendance == 1) { echo "checked"; } ?>/>
                    <label class="custom-control-label" for="attendance">Attendance</label>
                </div>
      
            
    </div>
    <!--end::Checkboxes-->
        

    
</div>
<!--end::Wrapper-->

</div>
<!--end::Input group-->
                                         
                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" value="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                                <!-- Account Tab ends -->

                               

                            
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript">
        function readURL(input){
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#one')
              .attr('src', e.target.result)
              .width(80)
              .height(80);
            };
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
@endsection
