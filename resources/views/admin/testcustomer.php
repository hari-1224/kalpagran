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
                        <h2 class="content-header-title float-left mb-0">Customer Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Customer Management</a>
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
               
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#add-new-sidebar">
                    <span class="align-middle">Add Customer</span>
                </button>
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
                                        <th>Customer ID</th>
                                        <th>Name</th>
                                        <th>GST</th>
                                        <th>City</th>
                                        
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $key=>$row)
                                    <tr>
                                        <td></td>
                                        <td>{{ $row->customer_id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->gst }}</td>
                                        <td>{{ $row->city }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td><span class="badge badge-pill badge-light-success mr-1">Active</span></td>
                                        
                                        <td><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($row->created_at))->diffForHumans() ?>
                                        </td>


                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ URL::to('admin/customer/view/'.$row->id) }}">
                                                        <i data-feather="eye" class="mr-50"></i>
                                                        <span>View</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{ URL::to('admin/customer/edit/'.$row->id) }}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{ URL::to('admin/delete/customer/'.$row->id) }}">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                                              
                                    </tr>
                                    @endforeach
                                    
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
               
            </section>
            <!--/ Basic table -->

 

        </div>
    </div>
   
</div>
<!-- END: Content-->


 <!-- Calendar Add/Update/Delete event modal-->
 <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Customer</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                
                    <form class="form" method="post" action="{{ route('customer_store.store') }}" enctype="multipart/form-data">
                        @csrf
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">GST</label>
                        <input type="text" class="form-control" id="title" name="gst" placeholder="GST" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">City</label>
                        <input type="text" class="form-control" id="title" name="city" placeholder="City" required />
                    </div>
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="title" name="phone" placeholder="Mobile" required />
                    </div>
                   
   
                    <div class="form-group">
                        <label for="event-location" class="form-label">Email</label>
                        <input type="text" class="form-control" id="event-location" name="email" placeholder="Enter Email" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" id="event-description-editor" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" type="submit" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<script src="{{ asset('backend/js/scripts/pages/app-calendar-events.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/pages/app-calendar.js')}}"></script>
@endsection

