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
                        <h2 class="content-header-title float-left mb-0">Stocks Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Stocks Management</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addStockdtlModal">
                    <span class="align-middle">Add New Request</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_stockdtls">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addStockdtlModal" tabindex="-1" aria-labelledby="addStockdtlModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add New Stock Request</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_stockdtl_form" enctype="multipart/form-data">
                            @csrf
                         

                            <div class="fv-row mb-10">
												
                              <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Stock ID</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify Area"></i>
                              </label>
                            
                      <input type="text"  list="stock" name="pincode" class="form-select form-select-solid" placeholder="pincode" />
                            
{{--                             
                            <style>.scrollable {
          display: none;
        height: 120px;
        overflow: auto;
        left: 0;
        border: 1px solid black;
      }</style> --}}
                            <datalist id="stock" class="scrollable">
      @foreach($stockk as $row)
           <option value="{{ $row->id }}">{{ $row->stock_id }}</option>
      
      
      @endforeach	
          </datalist>			
                            </div>
                          
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">name</label>
                        <input type="text" class="form-control"  name="name" placeholder="Enter Name" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control"  name="price" placeholder="Enter Price" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Quantity</label>
                        <input type="text" class="form-control"  name="quantity" placeholder="Enter Description" required />
                    </div>
                   
                  
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_stockdtl_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editStockdtlModal" tabindex="-1" aria-labelledby="editStockdtlModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Stock</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_stockdtl_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="stoc_id" id="stoc_id">
                            
                            <input type="hidden" name="stock_avatar" id="stock_avatar">

                    
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                      <label for="namee" class="form-label">Stock ID</label>
                      <input type="text" class="form-control" name="stock_id" id="stock_id" placeholder="Enter Name" readonly />
                  </div>
                    <div class="form-group">
                        <label for="namee" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" readonly />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Category</label>
                        <input type="text" class="form-control" name="category" id="category" placeholder="Enter Length" required />
                    </div>
               
                    <div class="form-group">
                        <label for="title" class="form-label">quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter Length" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" required />
                    </div>
                   
                   
                    <div class="form-group">
                        <label class="form-label">remak</label>
                        <textarea  name="remark" id="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group d-flex">
                        <button type="submit" id="edit_stock_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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


{{-- Stocks--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new employee ajax request
      $("#add_stockdtl_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_stockdtl_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('stockdtlstore') }}',
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
                'New Stock Detail Added Successfully!',
                'success'
              )
              fetchAllStockdtls();
            }
            $("#add_stockdtl_btn").text('Add Request');
            $("#add_stockdtl_form")[0].reset();
            $("#addStockdtlModal").modal('hide');
          }
        });
      });
  
      // edit employee ajax request
      $(document).on('click', '.SDeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('stockdtledit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            
            $("#name").val(response.name);
            $("#price").val(response.price);
            $("#quantity").val(response.quantity);
            $("#category").val(response.category);
            $("#description").val(response.description);
            $("#remark").val(response.remark);
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#stoc_id").val(response.id);
            $("#stock_id").val(response.stock_id);
            $("#stock_avatar").val(response.avatar);
          }
        });
      });
  
  
      // update stock ajax request
      $("#edit_stockdtl_form").submit(function(e) {
          e.preventDefault();
          const fd = new FormData(this);
          $("#edit_stockdtl_btn").text('Updating...');
          $.ajax({
            url: '{{ route('stockdtlupdate') }}',
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
                  'stock Updated Successfully!',
                  'success'
                )
                fetchAllStockdtls();
              }
              $("#edit_stockdtl_btn").text('Update stock');
              $("#edit_stockdtl_form")[0].reset();
              $("#editStockdtlModal").modal('hide');
            }
          });
        });
  
      // delete employee ajax request
      $(document).on('click', '.SDdeleteIcon', function(e) {
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
              url: '{{ route('stockdtldelete') }}',
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
                fetchAllStockdtls();
              }
            });
          }
        })
      });
  
      // fetch all employees ajax request
      fetchAllStockdtls();
  
      function fetchAllStockdtls() {
        $.ajax({
          url: '{{ route('stockdtlfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_stockdtls").html(response);
            $("#stockdtl_table").DataTable({
              order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
    });
  </script>
  


@endsection

