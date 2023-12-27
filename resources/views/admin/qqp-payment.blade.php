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
                        <h2 class="content-header-title float-left mb-0">Perform Invoice Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Invoice  </a>
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
                            <div class="card-body" id="show_all_qqpblocks">
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
<div class="modal modal-slide-in event-sidebar fade" id="editQQPblockModal" tabindex="-1" aria-labelledby="editQQPblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Perform Invoice</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_qqpblock_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="qqpblock_id" id="qqpblock_id">
                            
                            <div class="form-group">
                              <label for="title" class="form-label">Block ID</label>
                              <input type="text" class="form-control"  name="qblock_id" id="qblock_id" placeholder="Block ID" readonly/>
                          </div>         

                          <div class="form-group">
                            <label for="title" class="form-label">Quarry Name</label>
                            <input type="text" class="form-control"  name="quarry_name" id="quarry_name" placeholder="Block ID" readonly/>
                        </div>      
               

                          <div class="form-group">
                            <label for="title" class="form-label">Customer ID</label>
                            
                            <select class="select select-label form-control w-100" data-placeholder="Select Customer" name="customer_id" id="customer_id" >
                                <option value=''>--Select Customer--</option>
                                @foreach($customer as $row)
                                   <option value="{{ $row->id }}"  style="text-transform:uppercase" > {{ $row->customer_id }}  </option> 
                                   @endforeach  
        
                                          </select>
                        </div>

                        <div class="form-group">
                          <label for="title" class="form-label">Payment</label>
                          
                          <select class="select select-label form-control w-100" data-placeholder="Select Customer" name="payment_id" id="payment_id" >
                              <option value='1'>Paid</option>
                              <option value='0'>Credit</option>
                              
                                        </select>
                      </div>
                      

                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" id="price" placeholder="Enter Price" readonly />
                    </div>
                    {{-- <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control"  name="marker" id="marker" placeholder="Enter Price" required />
                    </div> --}}
                   
   
                   
                   
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_qqpblock_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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


{{--quarry  payments--}}
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
      $(document).on('click', '.QQPeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('qqpblockedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            console.log(response);
          
           
            $("#quarry_name").val(response.quarry.name);
            $("#quarry_id").val(response.quarry_id);
            $("#price").val(response.price);
  
           
  
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            
              $("#bm_avatar").html(
              `<img src="/storage/images/${response.bm_avatar}" width="50" class="img-fluid img-thumbnail">`);
              $("#bd_avatar").html(
              `<img src="/storage/images/${response.bd_avatar}" width="50" class="img-fluid img-thumbnail">`);
  
            $("#qqpblock_id").val(response.id);
            $("#qblock_id").val(response.qblock_id);
            
            $("#bdblock_avatar").val(response.bd_avatar);
            
          }
        });
      });
  
  
      // update employee ajax request
      $("#edit_qqpblock_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_qqpblock_btn").text('Updating...');
        $.ajax({
          url: '{{ route('qqpblockupdate') }}',
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
                'Perform Invoice Successfully!',
                'success'
              )
              fetchAllQQPblocks();
            }
            $("#edit_qqpblock_btn").text('Update Invoice');
            $("#edit_qqpblock_form")[0].reset();
            $("#editQQPblockModal").modal('hide');
          }
        });
      });
  
      // delete employee ajax request
      $(document).on('click', '.QQPdeleteIcon', function(e) {
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
              url: '{{ route('qqpblockdelete') }}',
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
                fetchAllQQPblocks();
              }
            });
          }
        })
      });
  
      // fetch all employees ajax request
      fetchAllQQPblocks();
  
      function fetchAllQQPblocks() {
        $.ajax({
          url: '{{ route('qqpblockfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_qqpblocks").html(response);
            $("#qbdblock_table").DataTable({
           
          order: [[0, "desc"]],
          responsive: true
          
            });
          }
        });
      }
    });
  </script>
  {{--quarry dressing marking--}}


@endsection

