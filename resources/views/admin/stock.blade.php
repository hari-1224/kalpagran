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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addStockModal">
                    <span class="align-middle">Add New Stock Item</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_stocks">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addStockModal" tabindex="-1" aria-labelledby="addStockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add New Stock Item</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_stock_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="select-label" class="form-label">Category</label>
                                <select class="select select-label form-control w-100" name="category">
                                    <option value="consumable" selected>Consumable</option>
                                    <option value="nonconsumable">Non-Consumable</option>
                                    <option value="epoxy">Epoxy</option>
                                    <option value="maintenance">Maintenance</option>
                                    <option value="gear">Gear</option>
                                    <option value="genral">Genral</option>
                                    
                                </select>
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
                        <label for="title" class="form-label">Description</label>
                        <input type="text" class="form-control"  name="description" placeholder="Enter Description" required />
                    </div>
                  
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_stock_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editStockModal" tabindex="-1" aria-labelledby="editStockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Stock</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_stock_form" enctype="multipart/form-data">
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


{{-- purchase reuest --}}
<div class="modal modal-slide-in event-sidebar fade" id="editStockdtModal" tabindex="-1" aria-labelledby="editStockdtModal" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog sidebar-lg">

      <div class="modal-content p-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
              <h5 class="modal-title">Purchase Request</h5>
          </div>
          <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
              

                      <form action="#" method="POST" id="edit_stockdt_form" enctype="multipart/form-data">
                          @csrf

                          <input type="hidden" name="stocc_id" id="stocc_id">
                          
                 
                  <div class="mt-2" id="avatar">

                  </div>
                  <div class="form-group">
                    <label class="form-label">Avatar</label>
                    <input type="file" name="stavatar" id="stavatar" class="form-control" required>
                </div>
                  <div class="form-group">
                    <label for="namee" class="form-label">Stock ID</label>
                    <input type="text" class="form-control" name="stockk_id" id="stockk_id" placeholder="Enter Name" readonly />
                </div>
                  <div class="form-group">
                      <label for="namee" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" readonly />
                  </div>
                  <div class="form-group">
                      <label for="title" class="form-label">Category</label>
                      <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category" readonly />
                  </div>
             
                  <div class="form-group">
                      <label for="title" class="form-label">quantity</label>
                      <input type="text" class="form-control" name="stqty" id="stqty" placeholder="Enter Length" required />
                  </div>
                  <div class="form-group">
                      <label for="title" class="form-label">Price</label>
                      <input type="text" class="form-control" name="stprice" id="stprice" placeholder="Enter Price" required />
                  </div>
                  <div class="form-group">
                      <label class="form-label">remak</label>
                      <textarea  name="stremark" id="stremark" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label class="form-label">Description</label>
                      <textarea name="description" id="description" class="form-control" readonly></textarea>
                  </div>

                  <div class="form-group d-flex">
                      <button type="submit" id="edit_stockdt_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
                      <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
                      {{-- <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
                      <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button> --}}
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>


{{-- purchase reuest --}}
<div class="modal modal-slide-in event-sidebar fade" id="editStockinModal" tabindex="-1" aria-labelledby="editStockinModal" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog sidebar-lg">

      <div class="modal-content p-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
              <h5 class="modal-title">Intake Request</h5>
          </div>
          <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
              

                      <form action="#" method="POST" id="edit_stockin_form" enctype="multipart/form-data">
                          @csrf

                          <input type="hidden" name="stocin_id" id="stocin_id">
                          
                 
                  <div class="mt-2" id="avatar">

                  </div>
                  
                  <div class="form-group">
                    <label for="namee" class="form-label">Stock ID</label>
                    <input type="text" class="form-control" name="stockk_id" id="stockin_id" placeholder="Enter Name" readonly />
                </div>
                  <div class="form-group">
                      <label for="namee" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="inname" placeholder="Enter Name" readonly />
                  </div>
                  <div class="form-group">
                      <label for="title" class="form-label">Category</label>
                      <input type="text" class="form-control" name="category" id="incategory" placeholder="Enter Category" readonly />
                  </div>
             
                  <div class="form-group">
                    <label for="title" class="form-label">Price</label>
                    <input type="text" class="form-control" name="inprice" id="inprice" placeholder="Enter Length" required />
                </div>
                  <div class="form-group">
                      <label for="title" class="form-label">quantity</label>
                      <input type="text" class="form-control" name="stqty" id="stqty" placeholder="Enter Length" required />
                  </div>
                
                  <div class="form-group">
                      <label class="form-label">remak</label>
                      <textarea  name="stinremark" id="stinremark" class="form-control"></textarea>
                  </div>
                

                  <div class="form-group d-flex">
                      <button type="submit" id="edit_stockin_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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
      $("#add_stock_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_stock_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('stockstore') }}',
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
                'New Stock Added Successfully!',
                'success'
              )
              fetchAllStocks();
            }
            $("#add_stock_btn").text('Add Stock');
            $("#add_stock_form")[0].reset();
            $("#addStockModal").modal('hide');
          }
        });
      });
  
      // edit employee ajax request
      $(document).on('click', '.SeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('stockedit') }}',
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
      $("#edit_stock_form").submit(function(e) {
          e.preventDefault();
          const fd = new FormData(this);
          $("#edit_stock_btn").text('Updating...');
          $.ajax({
            url: '{{ route('stockupdate') }}',
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
                fetchAllStocks();
              }
              $("#edit_stock_btn").text('Update stock');
              $("#edit_stock_form")[0].reset();
              $("#editStockModal").modal('hide');
            }
          });
        });





         // edit purchase request ajax request
      $(document).on('click', '.SDTeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('stockdtedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            
            $("#name").val(response.name);
            $("#category").val(response.category);
           
            
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#stocc_id").val(response.id);
            $("#stockk_id").val(response.stock_id);
            $("#stock_avatar").val(response.avatar);
          }
        });
      });
  
  
      // update stock ajax request
      $("#edit_stockdt_form").submit(function(e) {
          e.preventDefault();
          const fd = new FormData(this);
          $("#edit_stockdt_btn").text('Updating...');
          $.ajax({
            url: '{{ route('stockdtupdate') }}',
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
                fetchAllStocks();
              }
              $("#edit_stockdt_btn").text('Update stock');
              $("#edit_stockdt_form")[0].reset();
              $("#editStockdtModal").modal('hide');
            }
          });
        });






         // intake purchase request ajax request
      $(document).on('click', '.SINeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('stockinedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            
            $("#inname").val(response.name);
            $("#incategory").val(response.category);
            $("#inprice").val(response.price);
           
            
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#stocin_id").val(response.id);
            $("#stockin_id").val(response.stock_id);
            $("#stock_avatar").val(response.avatar);
          }
        });
      });
  
  
      // update stock ajax request
      $("#edit_stockin_form").submit(function(e) {
          e.preventDefault();
          const fd = new FormData(this);
          $("#edit_stockin_btn").text('Updating...');
          $.ajax({
            url: '{{ route('stockinupdate') }}',
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
                  'stock Intake Successfully!',
                  'success'
                )
                fetchAllStocks();
              }
              $("#edit_stockin_btn").text('Intake stock');
              $("#edit_stockin_form")[0].reset();
              $("#editStockinModal").modal('hide');
            }
          });
        });



  
      // delete employee ajax request
      $(document).on('click', '.SdeleteIcon', function(e) {
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
              url: '{{ route('stockdelete') }}',
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
                fetchAllStocks();
              }
            });
          }
        })
      });
  
      // fetch all employees ajax request
      fetchAllStocks();
  
      function fetchAllStocks() {
        $.ajax({
          url: '{{ route('stockfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_stocks").html(response);
            $("#stock_table").DataTable({
              order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
    });
  </script>
  


@endsection

