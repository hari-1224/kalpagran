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
                                    <form class="form" method="POST" action="{{ url('admin/update-dispatch/'.$dispatch->id) }}" enctype="multipart/form-data">
                                        @csrf

                                    <input type="hidden" name="id" value="{{$dispatch->id}}" >

                                    <div class="row mt-1">
                                        <div class="col-9">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle"> Add Dispatch Report</span>
                                            </h4>
                                        </div>
                                        
                                        <div class="col-3">
                                            <div class="mb-1">
                                                Date : <input type="date" class="form-control"  value="{{ $dispatch->date }}" placeholder="date" name="date" id="date" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="customer_address">Customer Address </label>
                                                <textarea class="form-control" id="customer_address" name="customer_address" value="">{{ $dispatch->customer_address }}</textarea>
                                               
                                            </div>
                                        </div>
                                        
                                      
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="invoice_no">Invoice No</label>
                                                <input id="invoice_no" type="text" class="form-control" name="invoice_no" placeholder="Invoice No" value="{{ $dispatch->invoice_no }}"/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="invoice_value">Invoice Value</label>
                                                <input id="invoice_value" type="text" class="form-control" name="invoice_value" placeholder="Invoice Value" value="{{ $dispatch->invoice_value }}"/>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="gst_amount">GST Amount</label>
                                                <input type="text" class="form-control" placeholder="GST Amount" value="{{ $dispatch->gst_amount }}" name="gst_amount" id="gst_amount" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="slab_color">Slab Color</label>
                                                <input id="slab_color" type="text" class="form-control" name="slab_color" placeholder="Slab Color" value="{{ $dispatch->slab_color }}" />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="measurement">Measurement</label>
                                                <input id="measurement" type="text" class="form-control" name="measurement" placeholder="Measurement" value="{{ $dispatch->measurement }}" />
                                            </div>
                                        </div>                                       
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="photo_upload">Photo Upload</label>
                                                <input type="file" class="form-control" placeholder="Photo Upload" value="{{ $dispatch->photo_upload }}" name="photo_upload" id="photo_upload" />
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
