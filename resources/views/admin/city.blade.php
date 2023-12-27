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
                        <h2 class="content-header-title float-left mb-0">Cities Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cities Management</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                {{-- <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add_employee')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button"  >Add Blocks</a>
                </div> --}}
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addCityModal">
                    <span class="align-middle">Add New City</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_cities">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
               
            </section>
            <!--/ Basic table -->

 

        </div>
    </div>

    


 <!-- Calendar Add/Update/Delete event modal-->
 
 <div class="modal modal-slide-in event-sidebar fade" id="addCityModal" tabindex="-1" aria-labelledby="addCityModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add New City</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_city_form" enctype="multipart/form-data">
                            @csrf
                          
                    
                    <div class="form-group">
                        <label for="title" class="form-label">name</label>
                        <input type="text" class="form-control"  name="city_name" placeholder="Enter Name" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Pincode</label>
                        <input type="text" class="form-control"  name="pincode" placeholder="Enter Pincode" required />
                    </div>
                   
                    <div class="form-group d-flex">
                        <button type="submit" id="add_city_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
                        <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
                        {{-- <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
                        <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Calendar Add/Update/Delete event modal-->

{{-- edit rblock --}}
<div class="modal modal-slide-in event-sidebar fade" id="editCityModal" tabindex="-1" aria-labelledby="editCityModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit City</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_city_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="city_id" id="city_id">
                            {{-- <input type="hidden" id="name">
                            <input type="hidden" id="pincode"> --}}
           
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="city_name" id="city_name" placeholder="Enter City Name" required />
                    </div>
                    <div class="form-group">
                        <label  class="form-label">Pincode</label>
                        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" required />
                    </div>
               

                    <div class="form-group d-flex">
                        <button type="submit" id="edit_city_btn" class="btn btn-primary mr-1">Update</button>
                        <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
                        {{-- <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
                        <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
<!-- END: Content-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

{{-- City--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new employee ajax request
      $("#add_city_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_city_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('citystore') }}',
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
                'New City Added Successfully!',
                'success'
              )
              fetchAllCity();
            }
            $("#add_city_btn").text('Add City');
            $("#add_city_form")[0].reset();
            $("#addCityModal").modal('hide');
          }
        });
      });
  
      
   // edit employee ajax request
   $(document).on('click', '.CeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('cityedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            console.log(response);
          
            $("#city_name").val(response.city_name);
            $("#pincode").val(response.pincode);
            $("#city_id").val(response.id);
           }
        });
      });
     
  
  
      
      // update city ajax request
      $("#edit_city_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_city_btn").text('Updating...');
        $.ajax({
          url: '{{ route('cityupdate') }}',
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
                'City Updated Successfully!',
                'success'
              )
              fetchAllCity();
            }
            $("#edit_city_btn").text('Update City');
            $("#edit_city_form")[0].reset();
            $("#editCityModal").modal('hide');
          }
        });
      });
  
      // delete employee ajax request
      $(document).on('click', '.CdeleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        console.log(id);
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
              url: '{{ route('citydelete') }}',
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
                fetchAllCity();
              }
            });
          }
        })
      });
  
      // fetch all employees ajax request
      fetchAllCity();
  
      function fetchAllCity() {
        $.ajax({
          url: '{{ route('cityfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_cities").html(response);
            $("#city_table").DataTable({
              order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
    });
  </script>
  


@endsection

