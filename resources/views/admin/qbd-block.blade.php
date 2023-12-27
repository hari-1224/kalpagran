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
                        <h2 class="content-header-title float-left mb-0">Blocks Dressing Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Block Dressing </a>
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
{{--                
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addQBCblockModal">
                    <span class="align-middle">Add Marking</span>
                </button> --}}
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_qbdblocks">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
               
            </section>
            <!--/ Basic table -->

 

        </div>
    </div>

    




{{-- edit qbm blcok --}}
<div class="modal modal-slide-in event-sidebar fade" id="editQBDblockModal" tabindex="-1" aria-labelledby="editQBDblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Block Dressing</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_qbdblock_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="qbdblock_id" id="qbdblock_id">
                            <input type="hidden" name="qblock_id" id="qblock_id">
                            <input type="hidden" name="block_avatar" id="block_avatar">
                            <input type="hidden" name="bmblock_avatar" id="bmblock_avatar">
                            <input type="hidden" name="bdblock_avatar" id="bdblock_avatar">


                    
                            <div class="form-group">
                              <label for="title" class="form-label">Quarry Name</label>
                              <input type="text" class="form-control" name="quarry_name" id="quarry_name" placeholder="Quarry Name" readonly />
                          </div>
                   
                    <div class="mt-2" id="bm_avatar">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="bd_avatar"  class="form-control" >
                    </div>
                    <div class="mt-2" id="bd_avatar">

                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Dressing Length</label>
                        <input type="text" class="form-control"  name="bd_length" id="bd_length" placeholder="Enter Dressing Length" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Dressing Breadth</label>
                        <input type="text" class="form-control"  name="bd_breadth" id="bd_breadth" placeholder="Enter Dressing Breadth" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Dressing Height</label>
                        <input type="text" class="form-control"  name="bd_height" id="bd_height" placeholder="Enter Dressing Height" required />
                    </div>
                  
                    <div class="form-group">
                        <label for="event-location" class="form-label">Dressing CBM</label>
                        <input type="text" class="form-control" name="bd_cbm" id="bd_cbm" placeholder="Enter Dressing CBM" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dressing Description</label>
                        <textarea name="bd_remark" id="bd_remark" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Marking Length</label>
                        <input type="text" class="form-control"  name="bm_length" id="bm_length" placeholder="Enter Marking Length" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marking Breadth</label>
                        <input type="text" class="form-control"  name="bm_breadth" id="bm_breadth" placeholder="Enter Marking Breadth" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marking Height</label>
                        <input type="text" class="form-control"  name="bm_height" id="bm_height" placeholder="Enter Marking Height" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control"  name="marker" id="marker" placeholder="Enter Marker" readonly />
                    </div>
                    <div class="form-group">
                        <label for="event-location" class="form-label">Marking CBM</label>
                        <input type="text" class="form-control" name="bm_cbm" id="bm_cbm" placeholder="Enter CBM" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Marking Description</label>
                        <textarea name="bm_remark" id="bm_remark" class="form-control" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Length</label>
                        <input type="text" class="form-control"  name="length" id="length" placeholder="Enter Length" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Breadth</label>
                        <input type="text" class="form-control"  name="breadth" id="breadth" placeholder="Enter Breadth" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Height</label>
                        <input type="text" class="form-control"  name="height" id="height" placeholder="Enter Height" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Color</label>
                        <input type="text" class="form-control"  name="color" id="color" placeholder="Enter Color" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" id="price" placeholder="Enter Price" readonly />
                    </div>
                    {{-- <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control"  name="marker" id="marker" placeholder="Enter Price" required />
                    </div> --}}
                   
   
                    <div class="form-group">
                        <label for="event-location" class="form-label">CBM</label>
                        <input type="text" class="form-control" name="cbm" id="cbm" placeholder="Enter CBM" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" id="remark" class="form-control" readonly></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_qbdblock_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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


{{--quarry  block dressing--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // // add new quarry ajax request
      // $("#add_bdblock_form").submit(function(e) {
      //   e.preventDefault();
      //   const fd = new FormData(this);
      //   $("#add_bdblock_btn").text('Adding...');
      //   $.ajax({
            
      //     url: '{{ route('bdblockstore') }}',
      //     method: 'post',
      //     data: fd,
      //     cache: false,
      //     contentType: false,
      //     processData: false,
      //     dataType: 'json',
      //     success: function(response) {
      //       if (response.status == 200) {
      //         Swal.fire(
      //           'Added!',
      //           'Block Dressing Added Successfully!',
      //           'success'
      //         )
      //         fetchAllBDblocks();
      //       }
      //       $("#add_bdblock_btn").text('Add Rblock');
      //       $("#add_bdblock_form")[0].reset();
      //       $("#addBDblockModal").modal('hide');
      //     }
      //   });
      // });
  
      // edit employee ajax request
      $(document).on('click', '.QBDeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('qbdblockedit') }}',
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
  
            $("#quarry_name").val(response.quarry.name);
            $("#quarry_id").val(response.quarry_id);

            $("#bm_length").val(response.bm_length);
            $("#bm_breadth").val(response.bm_breadth);
            $("#bm_height").val(response.bm_height);
            $("#bm_cbm").val(response.bm_cbm);
            $("#bm_remark").val(response.bm_remark);
            $("#bm_avatar").val(response.bm_avatar);
  
            $("#bd_length").val(response.bd_length);
            $("#bd_breadth").val(response.bd_breadth);
            $("#bd_height").val(response.bd_height);
            $("#bd_cbm").val(response.bd_cbm);
            $("#bd_remark").val(response.bd_remark);
            $("#bd_avatar").val(response.bd_avatar);
  
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            
              $("#bm_avatar").html(
              `<img src="/storage/images/${response.bm_avatar}" width="50" class="img-fluid img-thumbnail">`);
              $("#bd_avatar").html(
              `<img src="/storage/images/${response.bd_avatar}" width="50" class="img-fluid img-thumbnail">`);
  
            $("#qbdblock_id").val(response.id);
            $("#qblock_id").val(response.qblock_id);
            $("#block_avatar").val(response.avatar);
            $("#bmblock_avatar").val(response.bm_avatar);
            $("#bdblock_avatar").val(response.bd_avatar);
            
          }
        });
      });
  
  
      // update employee ajax request
      $("#edit_qbdblock_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_qbdblock_btn").text('Updating...');
        $.ajax({
          url: '{{ route('qbdblockupdate') }}',
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
                'Block Dressing Updated Successfully!',
                'success'
              )
              fetchAllQBDblocks();
            }
            $("#edit_qbdblock_btn").text('Update Dressing Block');
            $("#edit_qbdblock_form")[0].reset();
            $("#editQBDblockModal").modal('hide');
          }
        });
      });
  
      // delete employee ajax request
      $(document).on('click', '.QBDdeleteIcon', function(e) {
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
              url: '{{ route('qbdblockdelete') }}',
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
                fetchAllQBDblocks();
              }
            });
          }
        })
      });
  
      // fetch all employees ajax request
      fetchAllQBDblocks();
  
      function fetchAllQBDblocks() {
        $.ajax({
          url: '{{ route('qbdblockfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_qbdblocks").html(response);
            $("#qbdblock_table").DataTable({
           
          order: [[0, "desc"]],
          
          
            });
          }
        });
      }
    });
  </script>
  {{--quarry dressing marking--}}


@endsection

