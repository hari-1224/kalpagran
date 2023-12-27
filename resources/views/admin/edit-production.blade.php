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
                                    <form class="form" method="POST" action="{{ url('admin/update-production/'.$production->id) }}" enctype="multipart/form-data">
                                        @csrf
                                    <input type="hidden" name="id" value="{{$production->id}}" >

                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    
                                    <div class="row mt-1">
                                        <div class="col-12">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Production</span>
                                            </h4>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="cutting_machine">Cutting Machine </label>
                                                <select class="form-control" placeholder="Select Cutting" name="cutting_machine" id="cutting_machine" value="{{ $production->cutting_machine }}">
                                                    <option>Cutting 1</option>
                                                    <option>Cutting 2</option>
                                                    <option>Cutting 3</option>
                                                    <option>Cutting 4</option>
                                                    <option>Cutting 5</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_dimension">Block Dimension</label>
                                                <input type="text" class="form-control" placeholder="Block Dimension" value="{{ $production->block_dimension }}" name="block_dimension" id="block_dimension" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_no">Block No</label>
                                                <input type="text" class="form-control" placeholder="Block No" value="{{ $production->block_no }}" name="block_no" id="block_no" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_color">Block Color</label>
                                                <input type="text" class="form-control"  value="{{ $production->block_color }}" placeholder="Block Color" name="block_color" id="block_color" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="loading_time">Loading Time</label>
                                                <input type="time" class="form-control"  value="{{ $production->loading_time }}" placeholder="Loading Time" name="loading_time" id="loading_time" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="unloading_time">UnLoading Time</label>
                                                <input type="time" class="form-control"  value="{{ $production->unloading_time }}" placeholder="UnLoading Time" name="unloading_time" id="unloading_time" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="no_of_slabs">No of Slabs</label>
                                                <input id="no_of_slabs" type="text" class="form-control" name="no_of_slabs" placeholder="No of Slabs" value="{{ $production->no_of_slabs }}"/>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="remarks">Remarks</label>
                                                <input type="file" class="form-control" placeholder="Remarks" value="{{ $production->remarks }}" name="remarks" id="remarks" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="operator_name">Operator Name</label>
                                                <input type="text" class="form-control" placeholder="Operator Name" value="{{ $production->operator_name }}" name="operator_name" id="operator_name" />
                                            </div>
                                        </div>
                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="cutting_time">Cutting Time</label>
                                                <input id="cutting_time" type="time" class="form-control" name="cutting_time" placeholder="Cutting Time" value="{{ $production->cutting_time }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ideal_time">Ideal Time</label>
                                                <input id="ideal_time" type="time" class="form-control" name="ideal_time" placeholder="Ideal Time" value="{{ $production->ideal_time }}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="breakdown_time">Breakdown Time</label>
                                                <input id="breakdown_time" type="time" class="form-control" name="breakdown_time" placeholder="Breakdown Time" value="{{ $production->breakdown_time }}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="powercut_time">Powercut Time</label>
                                                <input id="powercut_time" type="time" class="form-control" name="powercut_time" placeholder="Powercut Time" value="{{ $production->powercut_time }}" />
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
