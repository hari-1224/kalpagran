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
                        <h2 class="content-header-title float-left mb-0">Quarry Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Supplier Management</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addQuarryModal">
                    <span class="align-middle">Add Quarry</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_quarrys">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addQuarryModal" tabindex="-1" aria-labelledby="addQuarryModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Quarries</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="get" id="add_quarry_form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Name" required />
                            </div>
                            
                                <div class="form-group">
                                    <label for="title" class="form-label">City</label>
                                    
                                    <select class="select select-label form-control w-100" data-placeholder="Select City" name="city_id" >
                                        <option value=''>--Select City--</option>
                                        @foreach($city as $row)
                                           <option value="{{ $row->id }}"> {{ $row->city_name }}  </option> 
                                           @endforeach  
                
                                                  </select>
                                </div>
                            
                            <div class="form-group">
                                <label for="title" class="form-label">GST</label>
                                <input type="text" class="form-control"  name="gst" placeholder="GST" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Started</label>
                                <input type="text" class="form-control"  name="start" placeholder="Started" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Material</label>
                                <input type="text" class="form-control"  name="material" placeholder="Material" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Address</label>
                                <input type="text" class="form-control"  name="address" placeholder="Address" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Phone</label>
                                <input type="text" class="form-control"  name="phone" placeholder="Phone" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Email</label>
                                <input type="text" class="form-control"  name="email" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Year</label>
                                <input type="text" class="form-control"  name="year" placeholder="Year" required />
                            </div>
                   
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar4" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar5" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_quarry_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editQuarryModal" tabindex="-1" aria-labelledby="editQuarryModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Quarry</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_quarry_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="quarry_id" id="quarry_id">
                            <input type="hidden" name="city" id="city">
                            <input type="hidden" name="city_id" id="city_id">
                            
                            
                            <input type="hidden" name="quarry_avatar" id="quarry_avatar">
                            <input type="hidden" name="quarry_avatar2" id="quarry_avatar2">
                            <input type="hidden" name="quarry_avatar3" id="quarry_avatar3">
                            <input type="hidden" name="quarry_avatar4" id="quarry_avatar4">
                            <input type="hidden" name="quarry_avatar5" id="quarry_avatar5">

                   
                            <div class="form-group">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">City Name</label>
                                <input type="text" class="form-control" name="city_name" id="city_name" placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">GST</label>
                                <input type="text" class="form-control" name="gst" id="gst" placeholder="GST" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Started</label>
                                <input type="text" class="form-control" name="start" id="start" placeholder="Started" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Material</label>
                                <input type="text" class="form-control" name="material" id="material" placeholder="Material" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Year</label>
                                <input type="text" class="form-control" name="year" id="year" placeholder="Year" required />
                            </div>


                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar" class="form-control" >
                        <div class="imageView"></div>

                    </div>
                    <div class="mt-2" id="quarry_avatar">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar2</label>
                        <input type="file" name="avatar2"  class="form-control" >
                        <div class="imageView2"></div>
                    </div>
                    <div class="mt-2" id="quarry_avatar2">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar3</label>
                        <input type="file" name="avatar3"  class="form-control" >
                        <div class="imageView3"></div>

                    </div>
                    <div class="mt-2" id="quarry_avatar3">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar4</label>
                        <input type="file" name="avatar4"  class="form-control" >
                        <div class="imageView4"></div>

                    </div>
                    <div class="mt-2" id="quarry_avatar4">

                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar5</label>
                        <input type="file" name="avatar5"  class="form-control" >
                        <div class="imageView5"></div>

                    </div>
                    <div class="mt-2" id="quarry_avatar5">

                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" id="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_quarry_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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


{{-- Quarry block--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new Quarry ajax request
      $("#add_quarry_form").submit(function(e) {
    e.preventDefault();
        const fd = new FormData(this);
        $("#add_quarry_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('quarrystore') }}',
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
                'Quarry Added Successfully!',
                'success'
              )
              fetchAllQuarrys();
            }
            $("#add_quarry_btn").text('Add Quarry');
            $("#add_quarry_form")[0].reset();
            $("#addQuarryModal").modal('hide');
          }
        });
      });
  
      // edit Quarry ajax request
      $(document).on('click', '.QeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('quarryedit') }}',
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
            $("#material").val(response.material);
            $("#address").val(response.address);
            $("#phone").val(response.phone);
            $("#email").val(response.email);
            $("#year").val(response.year);
            $("#gst").val(response.gst);
            $("#remark").val(response.remark);
            $("#city").val(response.city);
// console.log(response);
            $(".imageView").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
              $(".imageView2").html(
              `<img src="/storage/images/${response.avatar2}" width="50" class="img-fluid img-thumbnail">`);
              $(".imageView3").html(
              `<img src="/storage/images/${response.avatar3}" width="50" class="img-fluid img-thumbnail">`);
              $(".imageView4").html(
              `<img src="/storage/images/${response.avatar4}" width="50" class="img-fluid img-thumbnail">`);
              $(".imageView5").html(
              `<img src="/storage/images/${response.avatar5}" width="50" class="img-fluid img-thumbnail">`);
  
              $("#quarry_id").val(response.id);
            //   $("#quarry_id").val(response.quarry_id);
            //   $("#quarry_avatar").val(response.avatar);
            //   $("#quarry_avatar2").val(response.avatar2);
            //   $("#quarry_avatar3").val(response.avatar3);
            //   $("#quarry_avatar4").val(response.avatar4);
            //   $("#quarry_avatar5").val(response.avatar5);
          }
        });
      });
  
  
      // update Quarry ajax request
      $("#edit_quarry_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_quarry_btn").text('Updating...');
        console.log(fd);
        $.ajax({
          url: '{{ route('quarryupdate') }}',
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
                'Quarry Updated Successfully!',
                'success'
              )
              fetchAllQuarrys();
            }
            $("#edit_quarry_btn").text('Update Product');
            $("#edit_quarry_form")[0].reset();
            $("#editQuarryModal").modal('hide');
          }
        });
      });
  
      // delete Quarry ajax request
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
              url: '{{ route('quarrydelete') }}',
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
  
      // fetch all Quarry ajax request
      fetchAllQuarrys();
  
      function fetchAllQuarrys() {
        $.ajax({
          url: '{{ route('quarryfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_quarrys").html(response);
            
            $("#quarry_table").DataTable({
             
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

