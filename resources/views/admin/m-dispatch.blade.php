@extends('admin.admin_layouts')

@section('admin_content')
<!--<style>-->
<!--    .table thead th, .table tfoot th {-->
<!--            font-size: 0.7rem;-->
<!--    }-->
<!--    .table tbody td, .table tbody td {-->
<!--     font-size: 0.8rem;-->
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
                        <h2 class="content-header-title float-left mb-0">Dispatch</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dispatch</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add-dispatch')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button">Add Dispatch </a>
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
                                        <th>customer_address</th>
                                        <th>invoice_no</th>
                                        <th>invoice_value</th>
                                        <th>gst_amount</th>
                                        <th>slab_color</th>
                                        <th>measurement</th>
                                        <th>Photo Upload</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dispatch as $row)
                                    
                                    <tr>
                                        <td>{{ $row->id}}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->customer_address }}</td>
                                        <td>{{ $row->invoice_no }}</td>
                                        <td>{{ $row->invoice_value }}</td>
                                        <td>{{ $row->gst_amount }}</td>
                                        <td>{{ $row->slab_color }}</td>
                                        <td>{{ $row->measurement }}</td>
                                       <td><img src="{{asset("storage/".$row->photo_upload)}}" height="30px" width="30px" /></td>
                                        <td>
                                            <a href="{{url('admin/edit-dispatch/'.$row->id)}}"><span>edit</span></a>
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
