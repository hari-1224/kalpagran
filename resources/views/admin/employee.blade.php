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
                        <h2 class="content-header-title float-left mb-0">Employees Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Employee</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/employee-add')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button"  >Add Employee</a>
                </div>
               
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table id="table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
                                <thead>
                                    <tr>
                                        <!--<th>ID</th>-->
                                        <th>Emp ID</th>
                                        <th>Name</th>
                    
                                        <th>Phone</th>
                                        <th>Role</th>
                                         <th>Email</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($employee as $key=>$row)
                                    
                                    
                                    <tr>
                                        <!--<td>{{ $row->id }}</td>-->
                                        <td>{{ $row->emp_id }}</td>
                                        <td>{{ $row->name }}</td>
                                       
                                        <td>{{ $row->phone }}</td>
                                        @if($row->role==2)
                                        <td>Staff</td>
                                        @elseif($row->role==3)
                                        <td>Employee</td>
                                        @endif
                                         <td>{{ $row->email }}</td>
                                        <td>{{ $row->showpassword }}</td>
                            
                                        <td><span class="badge badge-pill badge-light-success mr-1">Active</span></td>
                                        <td><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($row->created_at))->diffForHumans() ?>
                                        </td>




                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ URL::to('admin/employee/view/'.$row->id) }}">
                                                        <i data-feather="eye" class="mr-50"></i>
                                                        <span>View</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{ URL::to('admin/employee/edit/'.$row->id) }}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{ URL::to('admin/delete/employee/'.$row->id) }}">
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
@endsection
