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
                        <h2 class="content-header-title float-left mb-0">Attendance Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Attendance Management</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block" style="display: flex !important;justify-content: space-evenly;align-content: space-between;flex-direction: row;flex-wrap: wrap;align-items: center;">
                <!--{{-- <div class="form-group breadcrumb-right">-->
                <!--    <a href="{{url('admin/add_employee')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button"  >Add Blocks</a>-->
                <!--</div> --}}-->
               
                                       <div class="d-flex align-items-center">
                                            <span class="title">Date:</span>
                                            <input type="text" id="date_pic" name="date" class="form-control invoice-edit-input date-picker" style=" margin: 0px 6px;" />
                                        </div>
                                        <div style="padding-block-start: 8px;padding-block-end: 8px;">
                <a href="#" id="edit_atten"><button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar">
                    <span class="align-middle">ADD / EDIT</span>
                </button></a>
                </div>
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12" style=" display: flex;justify-content: space-between;">
                        <div class="card" style="width: 49%; ">
                            <!--<h2 style="text-align:center;color: #7367f0;padding: 10px;">PRESENT TABLE</h2>-->
                            <div class="card-body" id="show_all_quarrys">
                                
                            </div>
                        </div>
                        <div class="card" style="width: 49%; ">
                            <!--<h2 style="text-align:center;color: #7367f0;padding: 10px;">ABSENT TABLE</h2>-->
                            <div class="card-body" id="show_all_quarrys_absent">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
               
            </section>
            <!--/ Basic table -->

 

        </div>
    </div>

    


<!-- END: Content-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


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
            console.log(response);
            $("#start").val(response.start);
            $("#name").val(response.name);
            $("#city_name").val(response.city.city_name);
            $("#city_id").val(response.city.id);
            $("#material").val(response.material);
            $("#address").val(response.address);
            $("#phone").val(response.phone);
            $("#email").val(response.email);
            $("#year").val(response.year);
            $("#gst").val(response.gst);
            $("#remark").val(response.remark);
            $("#city").val(response.city);
            

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
  
              $("#quarr_id").val(response.id);
              $("#quarry_id").val(response.quarry_id);
              $("#quarry_avatar").val(response.avatar);
              $("#quarry_avatar2").val(response.avatar2);
              $("#quarry_avatar3").val(response.avatar3);
              $("#quarry_avatar4").val(response.avatar4);
              $("#quarry_avatar5").val(response.avatar5);
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
            $("#edit_quarry_btn").text('Update Rough Block');
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
          url: '{{ route('quarryfetchall_emp') }}',
          method: 'get',
          success: function(response) {
              var response = jQuery.parseJSON ( response );

            //   console.log(response.res1);
            $("#show_all_quarrys").html(response.res1);
            $("#show_all_quarrys_absent").html(response.res2);
            
            $("#quarry_table").DataTable({
             
              "language": {
       "lengthMenu": "Show _MENU_",
      },
      order: [0, 'desc'],
                    responsive: true
            });
              $("#quarry_table_absent").DataTable({
             
              "language": {
       "lengthMenu": "Show _MENU_",
      },
      order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
          $('#date_pic').change(function(){
        // alert();
     //Change code!
     
           fetchAllQuarrys_dynamic($('#date_pic').val());

});
            function fetchAllQuarrys_dynamic(id) {
        $.ajax({
          url: '{{ route('quarryfetchall_emp_dynamic') }}',
          method: 'get',
          data:{date:id},
  success: function(response) {
              var response = jQuery.parseJSON ( response );

            //   console.log(response.res1);
            $("#show_all_quarrys").html(response.res1);
            $("#show_all_quarrys_absent").html(response.res2);
            
            $("#quarry_table").DataTable({
             
              "language": {
       "lengthMenu": "Show _MENU_",
      },
      order: [0, 'desc'],
                    responsive: true
            });
              $("#quarry_table_absent").DataTable({
             
              "language": {
       "lengthMenu": "Show _MENU_",
      },
      order: [0, 'desc'],
                    responsive: true
            });
          }
        });
      }
        
      
              
                  $('#edit_atten').click(function(){
                      
                    //  let url = {{ url('/') }}/
                    
                    
                    
                    
                     $.ajax({
            url: '{{ route('checkedit') }}',
          method: 'get',
          data:{date:$('#date_pic').val()},
            dataType: 'json',

            success: function(response) {
                // console.log(response);
                if (response == true) {
                                         var base= "{{ url('/') }}";
                      let targeturl = `${base}/admin/edit_attendance/${$('#date_pic').val()}`;
                    window.location.href=targeturl;
                }else{
                         var base= "{{ url('/') }}";
                      let targeturl = `${base}/admin/add_attendance/${$('#date_pic').val()}`;
                    window.location.href=targeturl;
                    
                }
                // console.log("else");
            }
        });
        
        
                    
                    // console.log($('#date_pic').val());

                    //   var base= "{{ url('/') }}";
                    //   let targeturl = `${base}/admin/edit_attendance/${$('#date_pic').val()}`;
                    // window.location.href=targeturl;

});
                //   fetchAllQuarrys_dynamic($('#date_pic').val());

    });
    

  </script>
  



@endsection

