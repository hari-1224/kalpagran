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
                                    <form class="form" method="POST" action="{{url('admin/m-finished')}}" enctype="multipart/form-data">
                                        @csrf

                                    <div class="row mt-1">
                                        <div class="col-9">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Finished Goods Stock</span>
                                            </h4>
                                        </div>
                                        
                                        <div class="col-3">
                                            <div class="mb-1">
                                                Date : <input type="date" class="form-control"  value="{{old('date')}}" placeholder="date" name="date" id="date" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="slab_color">Slab Color</label>
                                                <input id="slab_color" type="text" class="form-control" name="slab_color" placeholder="Slab Color" value="{{old('slab_color')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="slab_no">Slab No</label>
                                                <input id="slab_no" type="text" class="form-control" name="slab_no" placeholder="Slab No" value="{{old('slab_no')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="block_no">Block No</label>
                                                <input id="block_no" type="text" class="form-control" name="block_no" placeholder="Block No" value="{{old('block_no')}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="measurement">Measurement</label>
                                                <input id="measurement" type="text" class="form-control" name="measurement" placeholder="Measurement" value="{{old('measurement')}}" />
                                            </div>
                                        </div>                                       
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="slab_dimension">Slab Dimension</label>
                                                <input type="text" class="form-control" placeholder="L,W" value="{{old('slab_dimension')}}" name="slab_dimension" id="slab_dimension" />
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
