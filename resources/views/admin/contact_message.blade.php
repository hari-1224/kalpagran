@extends('admin.admin_layouts')

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
                            <h2 class="content-header-title float-left mb-0">Contact</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Messages</a>
                                    </li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                          <!-- Button trigger modal -->
                      <!-- <button type="button" class="btn-icon btn btn-primary btn-round btn-sm " data-toggle="modal" data-target="#inlineForm">
                        Add Appointment
                    </button> -->
                        
                    </div>
                   
                </div>
            </div>
            <div class="content-body">
           
                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
								<table id="kt_datatable_example_5" class="datatables-basic table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Email</th>
											<th>Message</th>
                                            <th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($message as $key=>$row)
										<tr>
											<td>{{ $row->id }}</td>
											<td>{{ $row->name }}</td>
											<td>{{ $row->phone }}</td>
											<td>{{ $row->email }}</td>
                                            <td>{{ $row->message }}</td>
											
                                            <td>
                                                <a class="dropdown-item" href="{{ URL::to('admin/delete/contact/'.$row->id) }}">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>Delete</span>
                                                </a>

                                               
                                            </td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Email</th>
											<th>date</th>
											<th>Actions</th>
										</tr>
										
									</tfoot>
								</table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    
                    <!-- Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <label>Email: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address" class="form-control" />
                                        </div>

                                        <label>Password: </label>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </section>
                <!--/ Basic table -->

     

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
