@extends('admin.admin_layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages/app-calendar.css')}}">

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
                        <h2 class="content-header-title float-left mb-0">Customer Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Customer Management</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                {{-- <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add_customer')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button"  >Add Blocks</a>
                </div> --}}
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addCustomerModal">
                    <span class="align-middle">Add Customer</span>
                </button>
            </div>
        </div>
        <div class="content-body">
            <h2 class="float-right"><a href="{{url('customer-export-excel-csv-file/xlsx')}}" class="btn btn-success mr-1">Export Excel</a><a href="{{url('customer-export-excel-csv-file/csv')}}" class="btn btn-success">Export CSV</a></h2>
            <form id="excel-csv-import-form" method="POST"  action="{{ url('customer-import-excel-csv-file') }}" accept-charset="utf-8" enctype="multipart/form-data">
 
                @csrf
                         
                  <div class="row">
       
                      <div class="col-md-12">
                          <div class="form-group">
                              <input type="file" name="file" placeholder="Choose file">
                          </div>
                          @error('file')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                      </div>              
        
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                      </div>
                  </div>     
              </form>
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_customers">
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
               
            </section>
            <!--/ Basic table -->

 

        </div>
    </div>
   
</div>
<!-- END: Content-->


 {{-- add new customer modal end --}}
 

<div class="modal modal-slide-in event-sidebar fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Customer</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                
                        <form action="#" method="POST" id="add_customer_form" enctype="multipart/form-data">
                            @csrf
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" placeholder="Name" required />
                    </div>
                   
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">GST</label>
                        <input type="text" class="form-control"  name="gst" placeholder="GST" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Mobile</label>
                        <input type="text" class="form-control"  name="phone" placeholder="Mobile" required />
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="event-location" class="form-label">Email</label>
                        <input type="text" class="form-control"  name="email" placeholder="Enter Email" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group d-flex">
                        <button type="submit" id="add_customer_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
                        <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
                        {{-- <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
                        <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- add new customer modal end --}}


{{-- edit customer modal start --}}


<div class="modal modal-slide-in event-sidebar fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModal" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Customer</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                
                        <form action="#" method="POST" id="edit_customer_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="cus_id" id="cus_id">
                            <input type="hidden" name="cus_avatar" id="cus_avatar">
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                    </div>
                   
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">GST</label>
                        <input type="text" class="form-control" id="gst" name="gst" placeholder="GST" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile" required />
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="event-location" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_customer_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
                        <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
                        {{-- <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
                        <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- edit customer modal start --}}
{{-- <script src="{{ asset('backend/js/scripts/pages/app-calendar-events.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/pages/app-calendar.js')}}"></script> --}}


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script>
        $(function() {
            
            $.ajaxSetup({
                    headers: {
                            'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
            });
            
          // add new employee ajax request
          $("#add_customer_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_customer_btn").text('Adding...');
            $.ajax({
                
              url: '{{ route('customerstore') }}',
              method: 'post',
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',
              success: function(response) {
                if (response.status == 200) {
                  Swal.fire(
                    'Added!',
                    'Customer Added Successfully!',
                    'success'
                  )
                  fetchAllCustomers();
                }
                $("#add_customer_btn").text('Add Customer');
                $("#add_customer_form")[0].reset();
                $("#addcustomerModal").modal('hide');
              }
            });
          });
    
          // edit employee ajax request
          $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            
            $.ajax({
              url: '{{ route('customeredit') }}',
              method: 'get',
              data: {
                id: id,
                _token: '{{ csrf_token() }}'
              },
              
            success: function(response) {
                console.log(response);
                $("#name").val(response.name);
                $("#gst").val(response.gst);
                $("#city").val(response.city);
                $("#address").val(response.address);
                $("#email").val(response.email);
                $("#phone").val(response.phone);
                $("#avatar").html(
                  `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
                $("#cus_id").val(response.id);
                $("#cus_avatar").val(response.avatar);
              }
            });
          });
    
     
          // update employee ajax request
          $("#edit_customer_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_customer_btn").text('Updating...');
            $.ajax({
              url: '{{ route('customerupdate') }}',
              method: 'post',
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',

              success: function(response) {
                if (response.status == 200) {
                  Swal.fire(
                    'Updated!',
                    'Customer Updated Successfully!',
                    'success'
                  )
                  fetchAllCustomers();
                }
                $("#edit_customer_btn").text('Update Customer');
                $("#edit_customer_form")[0].reset();
                $("#editCustomerModal").modal('hide');
              }
            });
          });
    
          // delete employee ajax request
          $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                  url: '{{ route('customerdelete') }}',
                  method: 'delete',
                  data: {
                    id: id,
                    _token: csrf
                  },
                  success: function(response) {
                    console.log(response);
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    fetchAllCustomers();
                  }
                });
              }
            })
          });
    
          // fetch all employees ajax request
          fetchAllCustomers();
    
          function fetchAllCustomers() {
            $.ajax({
              url: '{{ route('customerfetchall') }}',
              method: 'get',
              success: function(response) {
                $("#show_all_customers").html(response);

                $("#customer_table").DataTable({
                  order: [0, 'desc'],
                  responsive: true
                });
              }
            });
          }
        });
      </script>

@endsection

