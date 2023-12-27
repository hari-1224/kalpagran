@extends('admin.admin_layouts')
<link rel="stylesheet" type="text/css" href="{'backend/css/plugins/forms/pickers/form-flat-pickr.css'}">
<link rel="stylesheet" type="text/css" href="{'backend/css/pages/app-calendar.css'}">

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
                        <h2 class="content-header-title float-left mb-0">Product Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Products Management</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addProductModal">
                    <span class="align-middle">Add product</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_products">
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
  
 <div class="modal modal-slide-in event-sidebar fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Product</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="get" id="add_product_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Name" />
                            </div>
                            
                                <div class="form-group">
                                    <label for="title" class="form-label">City</label>
                                    
                                    <select class="select select-label form-control w-100" data-placeholder="Select City" id="city_id" name="city_id" >
                                        <option value=''>--Select City--</option>
                                        @foreach($city as $row)
                                           <option value="{{ $row->id }}"> {{ $row->city_name }}  </option> 
                                           @endforeach  
                
                                                  </select>
                                </div>
                            
                            <div class="form-group">
                                <label for="title" class="form-label">GST</label>
                                <input type="text" class="form-control"  name="gst" placeholder="GST"/>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Started</label>
                                <input type="text" class="form-control"  name="start" placeholder="Started" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Material</label>
                                <input type="text" class="form-control"  name="material" placeholder="Material" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Address</label>
                                <input type="text" class="form-control"  name="address" placeholder="Address" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Phone</label>
                                <input type="text" class="form-control"  name="phone" placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Email</label>
                                <input type="text" class="form-control"  name="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Year</label>
                                <input type="text" class="form-control"  name="year" placeholder="Year"  />
                            </div>
                   
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar2" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar3" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar4" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar5" class="form-control" >
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_product_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit product</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_Product_form" enctype="multipart/form-data">
                            @csrf
                             <input type="hidden" name="city_id" id="city_id">
                            <input type="hidden" name="product" id="product">
                            <input type="hidden" name="product_id" id="product_id">
                            
                            
                            <input type="hidden" name="product_avatar" id="product_avatar">
                            <input type="hidden" name="product_avatar2" id="product_avatar2">
                            <input type="hidden" name="product_avatar3" id="product_avatar3">
                            <input type="hidden" name="product_avatar4" id="product_avatar4">
                            <input type="hidden" name="product_avatar5" id="product_avatar5">

                   
                            <div class="form-group">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"  />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">City</label>
                                <input type="text" class="form-control" name="city_name" id="city_name" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">GST</label>
                                <input type="text" class="form-control" name="gst" id="gst" placeholder="GST"  />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Started</label>
                                <input type="text" class="form-control" name="start" id="start" placeholder="Started" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Material</label>
                                <input type="text" class="form-control" name="material" id="material" placeholder="Material" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Year</label>
                                <input type="text" class="form-control" name="year" id="year" placeholder="Year"/>
                            </div>


                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar2</label>
                        <input type="file" name="avatar2"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar2">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar3</label>
                        <input type="file" name="avatar3"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar3">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar4</label>
                        <input type="file" name="avatar4"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar4">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar5</label>
                        <input type="file" name="avatar5"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar5">

                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" id="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_Product_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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


{{-- product block--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new product ajax request
     /* $("#add_product_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        
        $("#add_product_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('productstore') }}',
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
                'product Added Successfully!',
                'success'
              )
              fetchAllQuarrys();
            }
            $("#add_Product_btn").text('Add product');
            $("#add_product_form")[0].reset();
            $("#addProductModal").modal('hide');
          }
        });
      });*/

      $("#add_product_form").submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);

    // Check if at least one image file is selected
    let imageFileSelected = false;
    for (const value of fd.values()) {
        if (value instanceof File) {
            imageFileSelected = true;
            break;
        }
    }

    if (!imageFileSelected) {
        alert('Please upload at least one image.');
        return; // Prevent form submission
    }

    $("#add_product_btn").text('Adding...');
    $.ajax({
        url: '{{ route('productstore') }}',
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
                    'product Added Successfully!',
                    'success'
                )
                fetchAllQuarrys();
            }
            $("#add_product_btn").text('Add product');
            $("#add_product_form")[0].reset();
            $("#addProductModal").modal('hide');
        }
    });
});

  
      // edit product ajax request
      $(document).on('click', '.QeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('productedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            $("#start").val(response.start);
            $("#name").val(response.name);
            $("#city_name").val(response.city.city_name);
            $("#city_id").val(response.city_id);
            $("#product_id").val(response.product_id);
            $("#material").val(response.material);
            $("#address").val(response.address);
            $("#phone").val(response.phone);
            $("#email").val(response.email);
            $("#year").val(response.year);
            $("#gst").val(response.gst);
            $("#remark").val(response.remark);
            $("#product").val(response.product);
            
            

            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
              $("#avatar2").html(
              `<img src="/storage/images/${response.avatar2}" width="50" class="img-fluid img-thumbnail">`);
              $("#avatar3").html(
              `<img src="/storage/images/${response.avatar3}" width="50" class="img-fluid img-thumbnail">`);
              $("#avatar4").html(
              `<img src="/storage/images/${response.avatar4}" width="50" class="img-fluid img-thumbnail">`);
              $("#avatar5").html(
              `<img src="/storage/images/${response.avatar5}" width="50" class="img-fluid img-thumbnail">`);
  
              $("#product_id").val(response.id);
              $("#product_id").val(response.product_id);
              $("#product_avatar").val(response.avatar);
              $("#product_avatar2").val(response.avatar2);
              $("#product_avatar3").val(response.avatar3);
              $("#product_avatar4").val(response.avatar4);
              $("#product_avatar5").val(response.avatar5);
          }
        });
      });
  
  
      // update product ajax request
      $("#edit_Product_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_Product_btn").text('Updating...');
        console.log(fd);
        $.ajax({
          url: '{{ route('productupdate') }}',
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
                'product Updated Successfully!',
                'success'
              )
              fetchAllQuarrys();
            }
            $("#edit_Product_btn").text('Update Rough Block');
            $("#edit_Product_form")[0].reset();
            $("#editProductModal").modal('hide');
          }
        });
      });
  
      // delete product ajax request
      $(document).on('click', '.QdeleteIcon', function(e) {
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
              url: '{{ route('productdelete') }}',
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
                fetchAllQuarrys();
              }
            });
          }
        })
      });
  
      // fetch all product ajax request
      fetchAllQuarrys();
  
      function fetchAllQuarrys() {
        $.ajax({
          url: '{{ route('productfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_products").html(response);
            
            $("#Product_table").DataTable({
             
              "language": {
       "lengthMenu": "Show _MENU_",
      },
      order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
    });
  </script>
  



@endsection

