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
                         
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Account Tab starts -->
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <form class="form" method="POST" action="{{url('admin/m-blockentry')}}" enctype="multipart/form-data">
                                        @csrf

                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    
                                    <div class="row mt-1">
                                        <div class="col-12">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Block Entry</span>
                                            </h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="entry_time">Entry Time</label>
                                                <input type="time" class="form-control" placeholder="Entry time" value="{{old('entry_time')}}" name="entry_time" id="entry_time" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="vehicle_no">Vehicle No</label>
                                                <input type="text" class="form-control" placeholder="Vehicle No" value="{{old('vehicle_no')}}" name="vehicle_no" id="vehicle_no" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_no">Block No</label>
                                                <input type="text" class="form-control" placeholder="Block No" value="{{old('block_no')}}" name="block_no" id="block_no" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_size">Block Size</label>
                                                <input type="text" class="form-control"  value="{{old('block_size')}}" placeholder="LBH == CBM" name="block_size" id="block_size" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_color">Block Color</label>
                                                <input type="text" class="form-control"  value="{{old('block_color')}}" placeholder="Block Color" name="block_color" id="block_color" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_weight">Block Weight</label>
                                                <input id="block_weight" type="text" class="form-control" value="{{old('block_weight')}}" name="block_weight" placeholder="Block Weight" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="quarry_name">Quarry Name</label>
                                                <input type="text" class="form-control" placeholder="Quarry Name" value="{{old('quarry_name')}}" name="quarry_name" id="quarry_name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="transport_name">Transport Name</label>
                                                <input type="text" class="form-control" placeholder="Transport Name" value="{{old('transport_name')}}" name="transport_name" id="transport_name" />
                                            </div>
                                        </div>
                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="photo_upload">Photo Upload</label>
                                                <input id="photo_upload" type="file" class="form-control" name="photo_upload" placeholder="Photo Upload" value="{{old('photo_upload')}}"  />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exit_time">Exit time</label>
                                                <input type="time" class="form-control" placeholder="Exit time" value="{{old('exit_time')}}" name="exit_time" id="exit_time" />
                                            </div>
                                        </div>
                                        
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
