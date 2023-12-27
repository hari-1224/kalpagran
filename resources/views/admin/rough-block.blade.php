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
                        <h2 class="content-header-title float-left mb-0">Rough Blocks Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Blocks Management</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addRblockModal">
                    <span class="align-middle">Add Blocks</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_rblocks">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addRblockModal" tabindex="-1" aria-labelledby="addRblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Block</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_rblock_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="select-label" class="form-label">Supplier</label>
                                <select class="select select-label form-control w-100" id="supplier" name="supplier">
                                    <option value="Supplier1" selected>Supplier1</option>
                                    <option value="Supplier2">Supplier2</option>
                                    <option value="Supplier3">Supplier3</option>
                                    
                                </select>
                            </div>
        
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Length</label>
                        <input type="text" class="form-control"  name="length" placeholder="Enter Length" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Breadth</label>
                        <input type="text" class="form-control"  name="breadth" placeholder="Enter Breadth" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Height</label>
                        <input type="text" class="form-control"  name="height" placeholder="Enter Height" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Color</label>
                        <input type="text" class="form-control"  name="color" placeholder="Enter Color" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" placeholder="Enter Price" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control"  name="marker" placeholder="Enter Marker" required />
                    </div>
                   
   
                    <div class="form-group">
                        <label for="event-location" class="form-label">CBM</label>
                        <input type="text" class="form-control" name="cbm"  placeholder="Enter CBM" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_rblock_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editRblockModal" tabindex="-1" aria-labelledby="editRblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Block</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_rblock_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="rblock_id" id="rblock_id">
                            <input type="hidden" name="block_id" id="block_id">
                            <input type="hidden" name="rblock_avatar" id="rblock_avatar">

                    <div class="form-group">
                        <label for="select-label" class="form-label">Supplier</label>
                        <select class="select select-label form-control w-100" id="supplier" name="supplier">
                            <option value="Supplier1" selected>Supplier1</option>
                            <option value="Supplier2">Supplier2</option>
                            <option value="Supplier3">Supplier3</option>
                            
                        </select>
                    </div>

                  
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Length</label>
                        <input type="text" class="form-control"  name="length" id="length" placeholder="Enter Length" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Breadth</label>
                        <input type="text" class="form-control"  name="breadth" id="breadth" placeholder="Enter Breadth" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Height</label>
                        <input type="text" class="form-control"  name="height" id="height" placeholder="Enter Height" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Color</label>
                        <input type="text" class="form-control"  name="color" id="color" placeholder="Enter Color" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" id="price" placeholder="Enter Price" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control"  name="marker" id="marker" placeholder="Enter Price" required />
                    </div>
                   
   
                    <div class="form-group">
                        <label for="event-location" class="form-label">CBM</label>
                        <input type="text" class="form-control" name="cbm" id="cbm" placeholder="Enter CBM" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" id="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_rblock_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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
{{-- rough block--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new employee ajax request
      $("#add_rblock_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_rblock_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('rblockstore') }}',
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
                'Rough Block Added Successfully!',
                'success'
              )
              fetchAllRblocks();
            }
            $("#add_rblock_btn").text('Add Rblock');
            $("#add_rblock_form")[0].reset();
            $("#addRblockModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.ReditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('rblockedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            console.log(response);
            $("#length").val(response.length);
            $("#breadth").val(response.breadth);
            $("#height").val(response.height);
            $("#price").val(response.price);
            $("#supplier").val(response.supplier);
            $("#color").val(response.color);
            $("#marker").val(response.marker);
            $("#cbm").val(response.cbm);
            $("#remark").val(response.remark);
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#rblock_id").val(response.id);
            $("#block_id").val(response.block_id);
            $("#rblock_avatar").val(response.avatar);
          }
        });
      });

 
      // update employee ajax request
      $("#edit_rblock_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_rblock_btn").text('Updating...');
        $.ajax({
          url: '{{ route('rblockupdate') }}',
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
                'Rough Block Updated Successfully!',
                'success'
              )
              fetchAllRblocks();
            }
            $("#edit_rblock_btn").text('Update Rough Block');
            $("#edit_rblock_form")[0].reset();
            $("#editRblockModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.RdeleteIcon', function(e) {
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
              url: '{{ route('rblockdelete') }}',
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
                fetchAllRblocks();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      
      fetchAllRblocks();

      function fetchAllRblocks() {
        $.ajax({
          url: '{{ route('rblockfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_rblocks").html(response);
            $("#rblock_table").DataTable({
              order: [0, 'desc'],
                  responsive: true
            });
          }
        });
      }
    });
  </script>




@endsection

