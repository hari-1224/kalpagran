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
                        <h2 class="content-header-title float-left mb-0">Gallery Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Gallery Works</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addGalleryModal">
                    <span class="align-middle">Add Gallery</span>
                </button>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section >
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_galleries">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addGalleryModal" tabindex="-1" aria-labelledby="addGalleryModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Gallery</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_gallery_form" enctype="multipart/form-data">
                            @csrf
                           
        
                    <div class="form-group">
                        <label class="form-label">Banner Image</label>
                        <input type="file" name="avatar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control"  name="title" placeholder="Enter Title" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Category</label>
                        <input type="text" class="form-control"  name="category" placeholder="Enter Category" required />
                    </div>
                    
                    <div class="form-group d-flex">
                        <button type="submit" id="add_gallery_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editGalleryModal" tabindex="-1" aria-labelledby="editGalleryModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Gallery</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_gallery_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="gallery_id" id="gallery_id">
                            <input type="hidden" name="gallery_avatar" id="gallery_avatar">

             

                  
                    <div class="form-group">
                        <label class="form-label">Banner</label>
                        <input type="file" name="avatar"  class="form-control" >
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control"  name="title" id="title" placeholder="Enter Title" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Category</label>
                        <input type="text" class="form-control"  name="category" id="category" placeholder="Enter Category" required />
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_gallery_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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
    
<script src="{{ asset('backend/jquery.min.js')}}"></script>
{{-- rough block--}}
<script>
    $(function() {
        
        $.ajaxSetup({
                headers: {
                        'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        
      // add new employee ajax request
      $("#add_gallery_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_gallery_btn").text('Adding...');
        $.ajax({
            
          url: '{{ route('gallerystore') }}',
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
                'Gallery Added Successfully!',
                'success'
              )
              fetchAllGalleries();
            }
            $("#add_gallery_btn").text('Add Gallery');
            $("#add_gallery_form")[0].reset();
            $("#addGalleryModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.GeditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        
        $.ajax({
          url: '{{ route('galleryedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          
        success: function(response) {
            console.log(response);
            $("#title").val(response.title);
            $("#category").val(response.category);
            $("#avatar").html(
              `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#gallery_id").val(response.id);
            $("#gallery_avatar").val(response.avatar);
          }
        });
      });

 
      // update employee ajax request
      $("#edit_gallery_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_gallery_btn").text('Updating...');
        $.ajax({
          url: '{{ route('galleryupdate') }}',
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
                'Gallery Updated Successfully!',
                'success'
              )
              fetchAllGalleries();
            }
            $("#edit_gallery_btn").text('Update Gallery');
            $("#edit_gallery_form")[0].reset();
            $("#editGalleryModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.GdeleteIcon', function(e) {
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
              url: '{{ route('gallerydelete') }}',
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
                fetchAllGalleries();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllGalleries();

      function fetchAllGalleries() {
        $.ajax({
          url: '{{ route('galleryfetchall') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_galleries").html(response);
            $("#gallery_table").DataTable({
              order: [0, 'desc'],
                  responsive: true
            });
          }
        });
      }
    });
  </script>




@endsection

