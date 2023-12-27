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
                                    <form class="form" method="POST" action="{{ url('admin/update-epoxy/'.$epoxy->id) }}" enctype="multipart/form-data">
                                        @csrf
                                    <input type="hidden" name="id" value="{{$epoxy->id}}" >
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    
                                    <div class="row mt-1">
                                        <div class="col-9">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Epoxy Report</span>
                                            </h4>
                                        </div>
                                        
                                        <div class="col-3">
                                            <div class="mb-1">
                                                Date : <input type="date" class="form-control"  value="{{ $epoxy->date }}" placeholder="date" name="date" id="date" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_no">Block No</label>
                                                <input type="text" class="form-control"  value="{{ $epoxy->block_no }}" placeholder="Block No" name="block_no" id="block_no" />
                                            </div>
                                        </div>
                                        
                                      
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="no_of_slabs">No of Slabs</label>
                                                <input id="no_of_slabs" type="text" class="form-control" name="no_of_slabs" placeholder="No of Slabs" value="{{ $epoxy->no_of_slabs}}"/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="epoxy_make">Epoxy Make</label>
                                                <input type="text" class="form-control" placeholder="Epoxy Make"  name="epoxy_make" id="epoxy_make" value="{{ $epoxy->epoxy_make }}"/>
                                            </div>
                                        </div>

                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="running_time">Running Time</label>
                                                <input id="running_time" type="time" class="form-control" name="running_time" placeholder="Running Time" value="{{ $epoxy->running_time }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="consumption">Consumption</label>
                                                <input type="text" class="form-control" placeholder="Consumption" value="{{ $epoxy->consumption }}" name="consumption" id="consumption" />
                                            </div>
                                        </div>
                                        
                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="operator_name">Operator Name</label>
                                                <input id="operator_name" type="text" class="form-control" name="operator_name" placeholder="Operator Name" value="{{ $epoxy->operator_name }}" />
                                            </div>
                                        </div>
                                        
                                         <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="photo_upload">Photo Upload</label>
                                                <input type="file" class="form-control" placeholder="Photo Upload" value="{{ $epoxy->photo_upload }}" name="photo_upload" id="photo_upload" />
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
