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
                        <h2 class="content-header-title float-left mb-0">Production Management</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Blocks Dressing</a>
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
{{--                
                <button class="btn-icon btn btn-primary btn-round btn-sm btn-toggle-sidebar" data-toggle="modal" data-target="#addRblockModal">
                    <span class="align-middle">Add Dressing Block</span>
                </button> --}}
            </div>
        </div>
        <div class="content-body">
       
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" id="show_all_bdblocks">
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
 
 <div class="modal modal-slide-in event-sidebar fade" id="addDblockModal" tabindex="-1" aria-labelledby="addDblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Add Dressing Block</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="add_dblock_form" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="form-group">
                                <label class="form-label">Block ID</label>
                                <input type="text" class="form-control" name="dblock_id" placeholder="Enter Block ID" required />
                            </div>

                            <div class="form-group">
                        <label for="select-label" class="form-label">Supplier</label>
                        <select class="select2 select-label form-control w-100" id="select-label" name="supplier">
                            <option data-label="primary" value="Supplier1" selected>Supplier1</option>
                            <option data-label="danger" value="Supplier2">Supplier2</option>
                            <option data-label="warning" value="Supplier3">Supplier3</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="bd_avatar" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">Length</label>
                        <input type="text" class="form-control" name="bd_length" placeholder="Enter Length" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Breadth</label>
                        <input type="text" class="form-control" name="bd_breadth" placeholder="Enter Breadth" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Height</label>
                        <input type="text" class="form-control" name="bd_height" placeholder="Enter Height" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Color</label>
                        <input type="text" class="form-control" name="color" placeholder="Enter Color" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price" required />
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control" name="marker" placeholder="Enter Price" required />
                    </div>
                    <div class="form-group">
                        <label for="event-location" class="form-label">CBM</label>
                        <input type="text" class="form-control" name="bd_cbm"  placeholder="Enter Enter Location" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" class="form-control"></textarea>
                    </div>
                    <div class="form-group d-flex">
                        <button type="submit" id="add_dblock_btn" class="btn btn-primary add-event-btn mr-1">Add</button>
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
<div class="modal modal-slide-in event-sidebar fade" id="editBDblockModal" tabindex="-1" aria-labelledby="editBDblockModal" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">

        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">Edit Dressing Block</h5>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                

                        <form action="#" method="POST" id="edit_bdblock_form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="bdblock_id" id="bdblock_id">
                            {{-- <input type="hidden" name="block_id" id="block_id"> --}}
                            <input type="hidden" name="rblock_avatar" id="rblock_avatar">
                            <input type="hidden" name="bdblock_avatar" id="bdblock_avatar">
                            
                 
                            <div class="form-group">
                                <label class="form-label">Block ID</label>
                                <input type="" class="form-control" name="block_id" id="block_id" placeholder="Enter Block ID"  readonly/>
                            </div>
                           

                            <div class="form-group">
                                <label for="select-label" class="form-label">Supplier</label>
                                <select class="select select-label form-control w-100" id="supplier" name="supplier" readonly>
                                    <option value="Supplier1" selected>Supplier1</option>
                                    <option value="Supplier2">Supplier2</option>
                                    <option value="Supplier3">Supplier3</option>
                                    
                                </select>
                            </div>
                   


                            <div class="form-group">
                                <label for="title" class="form-label">Dressing Length</label>
                                <input type="text" class="form-control" name="bd_length" id="bd_length" placeholder="Enter Dressing Length"  required/>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Dressing Breadth</label>
                                <input type="text" class="form-control" name="bd_breadth" id="bd_breadth" placeholder="Enter Dressing Breadth"  required/>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Dressing Height</label>
                                <input type="text" class="form-control" name="bd_height" id="bd_height" placeholder="Enter Dressing Height" required />
                            </div>
                            <div class="form-group">
                                <label for="event-location" class="form-label">Dressing CBM</label>
                                <input type="text" class="form-control" name="bd_cbm" id="bd_cbm" placeholder="Enter Dressing CBM" required/>
                            </div> 
                             <div class="form-group">
                                <label class="form-label">Dressing Avatar</label>
                                <input type="file" name="bd_avatar"  class="form-control" >
                            </div>
                            <div class="mt-2" id="bd_avatar">
                            </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea name="bd_remark" id="bd_remark" class="form-control"></textarea>
                                </div>



{{-- 
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <input type="file" name="avatar"  class="form-control" >
                    </div> --}}<label for="title" class="form-label">Rough Block</label>
                    <div class="mt-2" id="avatar">

                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Length</label>
                        <input type="text" class="form-control" name="length" id="length" placeholder="Enter Length" required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Breadth</label>
                        <input type="text" class="form-control" name="breadth" id="breadth" placeholder="Enter Breadth" required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Height</label>
                        <input type="text" class="form-control" name="height" id="height" placeholder="Enter Height" required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Color</label>
                        <input type="text" class="form-control" name="color" id="color" placeholder="Enter Color" required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">Marker</label>
                        <input type="text" class="form-control" name="marker" id="marker" placeholder="Enter Price" required readonly/>
                    </div>
                    
   
                    <div class="form-group">
                        <label for="event-location" class="form-label">Rough block CBM</label>
                        <input type="text" class="form-control" name="cbm" id="cbm" placeholder="Enter CBM " readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="remark" id="remark" class="form-control" readonly></textarea>
                    </div>

 
                    <div class="form-group d-flex">
                        <button type="submit" id="edit_bdblock_btn" class="btn btn-primary add-event-btn mr-1">Update</button>
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






@endsection

