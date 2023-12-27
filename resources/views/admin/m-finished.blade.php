@extends('admin.admin_layouts')

@section('admin_content')
<!--<style>-->
<!--    .table thead th, .table tfoot th {-->
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
                        <h2 class="content-header-title float-left mb-0">Finished Good Stock</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Finished Stock</a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <a href="{{url('admin/add-finished')}}" class="btn-icon btn btn-primary btn-round btn-sm" type="button">Add Finished Stock </a>
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
                                        <th>Slab Color</th>
                                        <th>Slab No</th>
                                        <th>Block No</th>
                                        <th>Measurement</th>
                                        <th>Slab Dimension</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($finished as $row)
                                    
                                    <tr>
                                        <td>{{ $row->id}}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->slab_color }}</td>
                                        <td>{{ $row->slab_no }}</td>
                                        <td>{{ $row->block_no }}</td>
                                        <td>{{ $row->measurement }}</td>
                                        <td>{{ $row->slab_dimension }}</td>

                                        <td>
                                            <a href="{{url('admin/edit-finished/'.$row->id)}}"><span>Edit</span></a>
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
