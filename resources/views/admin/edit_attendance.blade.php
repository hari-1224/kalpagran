@extends('admin.admin_layouts')
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages/app-calendar.css')}}"> @section('admin_content')
<!-- BEGIN: Content-->
<div class="app-content content ">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<form action="{{ route('update-atten')}}" method="POST" id="edit_quarry_forsm" enctype="multipart/form-data"> @csrf
		<input type="hidden" name="quarr_id" id="quarr_id">
		<input type="hidden" name="city" id="city">
		<input type="hidden" name="city_id" id="city_id">
		<input type="hidden" name="quarry_avatar" id="quarry_avatar">
		<input type="hidden" name="quarry_avatar2" id="quarry_avatar2">
		<input type="hidden" name="quarry_avatar3" id="quarry_avatar3">
		<input type="hidden" name="quarry_avatar4" id="quarry_avatar4">
		<input type="hidden" name="quarry_avatar5" id="quarry_avatar5">
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-9 col-12 mb-2">
					<div class="row breadcrumbs-top">
						<div class="col-12">
							<h2 class="content-header-title float-left mb-0">Attendance Management</h2>
							<div class="breadcrumb-wrapper">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a> </li>
									<li class="breadcrumb-item"><a href="#">Attendance Management</a> </li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
					<div class="d-flex align-items-center"> <span class="title">Date: </span>
						<input type="text" name="date" id="date_pic" value="" class="form-control invoice-edit-input date-picker" style=" margin: 0px 6px;" /> </div>
					<!--</a>-->
				</div>
			</div>
			<div class="content-body">
				<!-- Basic table -->
				<section id="basic-datatable">
					<div class="row">
						<div class="col-12">
							<!--<div class="card">-->
							<!--      <div class="card-header">-->
							<!--    </div>-->
							<!--    <div class="card-body">-->
							<!--    </div>-->
							<!--</div>-->
							<div class="card">
								<div class="card-header" style="padding-bottom: 0px;/* padding-top: 0; */">
									<div class="col-md-4 custom-control custom-checkbox custom-control-inline" style="margin-left: auto;padding-left:0px;margin-right: 4px;">
										<div class="row" style="display: flex; justify-content: space-around;  flex-direction: row;">
											<div class="col-md-4">
												<input type="checkbox" disabled class="custom-control-input" id="dis1" name="dis1" value="1" checked/>
												<label class="custom-control-label" for="dis1" style="margin-left: 10px;"> Present</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" disabled class="custom-control-input" id="dis" name="dis" value="1" />
												<label class="custom-control-label" for="dis" style="margin-left: 10px;"> Absent</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<table id="quarry_table" class="datatables-basic table">
										<thead>
											<tr>
												<th>Employee ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Role</th>
												<th style="width: 0px;">
													<div class="d-flex align-items-center">
														<div class="col-md-4 custom-control custom-checkbox custom-control-inline" style="margin-left: auto;padding-left:0px;margin-right: 4px;z-index: 1;">
															<input type="checkbox" class="custom-control-input" id="ckbCheckAll" name="ckbCheckAll" value="1" />
															<label class="custom-control-label" for="ckbCheckAll"></label>
														</div>
													</div>
												</th>
												<!--<th>Present/Abset</th>-->
											</tr>
										</thead>
										<tbody>
											<?php
    
                                                                    foreach($emp as $employee){

                                                                    if($employee->attadence_status=='1'){
                                                                        $status='checked';
                                                                        }
                                                                        else
                                                                        {
                                                                            $status='';
                                                                        }
                                                                    ?>
												<tr>
													<td>{{$employee->emp_id}}</td>
													<td>{{$employee->name}}</td>
													<td>{{$employee->email}}</td> 
													@if($employee->role==2)
													<td>Staff</td> 
													@elseif($employee->role==3)
													<td>Employee</td> 
													@endif
													<td>
														<div class="d-flex align-items-center">
															<div class="col-md-4 custom-control custom-checkbox custom-control-inline" style="margin-left: auto;padding-left:0px;">
																<input type="checkbox" class="custom-control-input chk" id="emp_id{{$employee->id}}" name="emp_id[]" value="{{$employee->emp_id}}" {{$status}}/>
																<label class="custom-control-label" for="emp_id{{$employee->id}}"></label>
															</div>
														</div>
													</td>
													<!--<td></td>-->
												</tr>
												<?php
                                                                }
                                                                
                                                                ?>
													<tbody>
									</table>
									<h5 class="card-title"></h5>
									<div class="form-group d-flex" style="     display: flex !important;     justify-content: center; ">
										<button type="submit" id="id" class="btn btn-primary add-event-btn mr-1">Update</button>
										<a href="{{route('attendance')}}">
											<button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
										</a>
									</div>
									<!--</form>-->
								</div>
							</div>
						</div>
					</div>
					<!-- Modal to add new record -->
				</section>
				<!--/ Basic table -->
			</div>
		</div>
	</form>
</div>
<!-- END: Content-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> {{-- Quarry block--}}
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
				if(response.status == 200) {
					Swal.fire('Added!', 'Quarry Added Successfully!', 'success')
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
				$("#avatar").html(`<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
				$("#avatar2").html(`<img src="/storage/images/${response.avatar2}" width="50" class="img-fluid img-thumbnail">`);
				$("#avatar3").html(`<img src="/storage/images/${response.avatar3}" width="50" class="img-fluid img-thumbnail">`);
				$("#avatar4").html(`<img src="/storage/images/${response.avatar4}" width="50" class="img-fluid img-thumbnail">`);
				$("#avatar5").html(`<img src="/storage/images/${response.avatar5}" width="50" class="img-fluid img-thumbnail">`);
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
				if(response.status == 200) {
					Swal.fire('Updated!', 'Quarry Updated Successfully!', 'success')
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
			if(result.isConfirmed) {
				$.ajax({
					url: '{{ route('quarrydelete') }}',
					method: 'delete',
					data: {
						id: id,
						_token: csrf
					},
					success: function(response) {
						console.log(response);
						Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
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
$("#ckbCheckAll").click(function() {
	$(".chk").prop('checked', $(this).prop('checked'));
});
$("#date_pic").change(function() {
	console.log($('#date_pic').val());
	$.ajax({
		url: '{{ route('checkedit') }}',
		method: 'get',
		data: {
			date: $('#date_pic').val()
		},
		dataType: 'json',
		success: function(response) {
			// console.log(response);
			if(response == true) {
				var base = "{{ url('/') }}";
				let targeturl = `${base}/admin/edit_attendance/${$('#date_pic').val()}`;
				window.location.href = targeturl;
			} else {
				var base = "{{ url('/') }}";
				let targeturl = `${base}/admin/add_attendance/${$('#date_pic').val()}`;
				window.location.href = targeturl;
			}
			// console.log("else");
		}
	});
});
// {{ Request::segment(3) }}
// $("#ckbCheckAll").click(function () {
setTimeout(() => {
	$("#date_pic").val('{{ Request::segment(3) }}');
}, 1000);
// });
</script> @endsection