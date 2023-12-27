@extends('admin.admin_layouts')

@section('admin_content')
<!--<style>-->
<!--    .table thead th, .table tfoot th {-->
<!--            font-size: 0.7rem;-->
<!--    }-->
<!--    .table tbody td, .table tbody td {-->
<!--            font-size: 0.7rem;-->
<!--    }-->
<!--</style>-->
  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Block Entry Report</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a> </li>
                                <li class="breadcrumb-item"><a href="#">EntryBlock</a> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add-entry')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button">Add Entry</a>
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
                                        <th>Entry time</th>
                                        <th>vehicle No</th>
                                        <th>Block No</th>
                                        <th>Block Size</th>
                                        <th>Block Color</th>
                                        <th>Block Weight</th>
                                        <th>Quarry Name</th>
                                        <th>Transport Name</th>
                                        <th>Photo</th>
                                        <th>Exit Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blockentry as $row)
                                    
                                    <tr>
                                        <td>{{ $row->id}}</td>
                                        <td>{{ $row->entry_time }}</td>
                                        <td>{{ $row->vehicle_no }}</td>
                                        <td>{{ $row->block_no }}</td>
                                        <td>{{ $row->block_size }}</td>
                                        <td>{{ $row->block_color }}</td>
                                        <td>{{ $row->block_weight }}</td>
                                        <td>{{ $row->quarry_name }}</td>
                                        <td>{{ $row->transport_name }}</td> 
                                        <td><img src="{{asset("storage/".$row->photo_upload)}}" height="30px" width="30px" /></td>
                                        <!--<td>{{ $row->photo_upload }}</td>-->
                                      
                                        <td>{{ $row->exit_time }}</td>
                                        <td>
                                            <a href="{{url('admin/edit-blockentry/'.$row->id)}}"><span>Edit</span></a>
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready( function () {
    $('#table').DataTable();
} );</script>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
