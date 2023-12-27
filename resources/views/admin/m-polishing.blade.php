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
                        <h2 class="content-header-title float-left mb-0">Polishing Machine Report</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Polishing Machine</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add-polishing')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button">Add Polishing</a>
                </div>
               
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table id="table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Grind/Polish</th>
                                        <th>Starting Time</th>
                                        <th>Ending Time</th>
                                        <th>Block No</th>
                                        <th>No Of Slabs</th>
                                        <th>Remarks</th>
                                        <th>Operator Name</th>
                                        <th>Slab Dimension</th>
                                        <th>Lock Color</th>
                                        <th>Running Time</th>
                                        <th>Ideal Time</th>
                                        <th>Breakdown Time</th>
                                        <th>Powercut Time</th>
                                        <th>Photo Upload</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($polishing as $row)
                                    
                                    <tr>
                                        <td>{{ $row->id}}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->grind_polish }}</td>
                                        <td>{{ $row->starting_time }}</td>
                                        <td>{{ $row->ending_time }}</td>
                                        <td>{{ $row->block_no }}</td>
                                        <td>{{ $row->no_of_slabs }}</td>
                                        <td>{{ $row->remarks }}</td>
                                        <td>{{ $row->operator_name }}</td>
                                        <td>{{ $row->slab_dimension }}</td>
                                        <td>{{ $row->block_color }}</td>
                                        <td>{{ $row->running_time }}</td>
                                        <td>{{ $row->ideal_time }}</td>
                                        <td>{{ $row->breakdown_time }}</td>
                                        <td>{{ $row->powercut_time }}</td>
                                        <td><img src="{{asset("storage/".$row->photo_upload)}}" height="30px" width="30px" /></td>

                                        
                                        <td>
                                            <a href="{{url('admin/edit-polishing/'.$row->id)}}"><span>Edit</span></a>
                                            <a href=""><span></span></a>
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
