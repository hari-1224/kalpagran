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
                                    <form class="form" method="POST" action="{{url('admin/m-polishing')}}" enctype="multipart/form-data">
                                        @csrf

                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    
                                    <div class="row mt-1">
                                        <div class="col-8">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Polishing Machine</span>
                                            </h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-1">
                                                
                                            Date : <input type="date" class="form-control"  value="{{old('date')}}" placeholder="date" name="date" id="date" />

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="grind_polish">Grind/Polish </label>
                                                <select class="form-control" placeholder="Grind/Polish" name="grind_polish" id="grind_polish" >
                                                    <option value="grind">Grinding</option>
                                                    <option value="polish">Polishing</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="starting_time">Starting Time</label>
                                                <input type="time" class="form-control"  value="{{old('starting_time')}}" placeholder="Starting Time" name="starting_time" id="starting_time" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ending_time">Ending Time</label>
                                                <input type="time" class="form-control"  value="{{old('ending_time')}}" placeholder="Ending Time" name="ending_time" id="ending_time" />
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
                                                <label for="no_of_slabs">No of Slabs</label>
                                                <input id="no_of_slabs" type="text" class="form-control" value="{{old('no_of_slabs')}}" name="no_of_slabs" placeholder="No of Slabs" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="remarks">Remarks</label>
                                                <input type="text" class="form-control" placeholder="Remarks" value="{{old('remarks')}}" name="remarks" id="remarks" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="operator_name">Operator Name</label>
                                                <input type="text" class="form-control" placeholder="Operator Name" value="{{old('operator_name')}}" name="operator_name" id="operator_name" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="slab_dimension">Slab Dimension</label>
                                                <input type="text" class="form-control" placeholder="L, W" value="{{old('slab_dimension')}}" name="slab_dimension" id="slab_dimension" />
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
                                                <label for="running_time">Running Time</label>
                                                <input id="running_time" type="time" class="form-control" name="running_time" placeholder="Running Time" value="{{old('running_time')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ideal_time">Ideal Time</label>
                                                <input id="ideal_time" type="time" class="form-control" name="ideal_time" placeholder="Ideal Time" value="{{old('ideal_time')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="breakdown_time">Breakdown Time</label>
                                                <input id="breakdown_time" type="time" class="form-control" name="breakdown_time" placeholder="Breakdown Time" value="{{old('breakdown_time')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="powercut_time">Powercut Time</label>
                                                <input id="powercut_time" type="time" class="form-control" name="powercut_time" placeholder="Powercut Time" value="{{old('powercut_time')}}" />
                                            </div>
                                        </div>
                                        
                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="photo_upload">Photo Upload</label>
                                                <input type="file" class="form-control" placeholder="Photo Upload" value="{{old('photo_upload')}}" name="photo_upload" id="photo_upload" />
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
