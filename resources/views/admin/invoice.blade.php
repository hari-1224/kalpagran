@extends('admin.admin_layouts')

@section('admin_content')
  

 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="invoice-add-wrapper">
                <div class="row invoice-add">
                    <!-- Invoice Add Left starts -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card invoice-preview-card">
                            <!-- Header starts -->
                            <div class="card-body invoice-padding pb-0">
                                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                    <div>
                                        <div class="logo-wrapper">
                                            {{-- <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                                <defs>
                                                    <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                                        <stop stop-color="#000000" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="invoice-linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-400.000000, -178.000000)">
                                                        <g transform="translate(400.000000, 178.000000)">
                                                            <path class="text-primary" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                                            <path d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#invoice-linearGradient-1)" opacity="0.2"></path>
                                                            <polygon fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                            <polygon fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                            <polygon fill="url(#invoice-linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg> --}}
                                            <h5 class="text-primary invoice-logo">{{ $invoiceq->quarry->name }}</h5>
                                        </div>
                                        <p class="card-text mb-25">{{ $invoiceq->quarry->address }}</p>
                                        
                                        <p class="card-text mb-0">+91 {{ $invoiceq->quarry->phone }}</p>
                                        <p class="card-text mb-0">{{ $invoiceq->quarry->email }}</p>
                                    </div>
                                    <div class="invoice-number-date mt-md-0 mt-2">
                                        <div class="d-flex align-items-center justify-content-md-end mb-1">
                                            <h4 class="invoice-title">Invoice</h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i data-feather="hash"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control invoice-edit-input" placeholder="53634" />
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="title">Date:</span>
                                            <input type="text" class="form-control invoice-edit-input date-picker" />
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="title">Due Date:</span>
                                            <input type="text" class="form-control invoice-edit-input due-date-picker" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header ends -->

                            <hr class="invoice-spacing" />

                            <!-- Address and Contact starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row row-bill-to invoice-spacing">
                                    <div class="col-xl-8 mb-lg-1 col-bill-to pl-0">
                                        <h6 class="invoice-to-title">Invoice To:</h6>
                                        <div class="invoice-customer">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">Customer ID:</td>
                                                        <td><strong>{{ $invoicec->customer->customer_id }}</strong></td>
                                                    </tr>
                                                  
                                                    <tr>
                                                        <td class="pr-1">Name:</td>
                                                        <td>{{ $invoicec->customer->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-1">Address:</td>
                                                        <td>{{ $invoicec->customer->address }}</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pr-0 mt-xl-0 mt-2">
                                        <h6 class="mb-2">Payment Details:</h6>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pr-1">Credit:</td>
                                                    <td><strong>₹6,12,0</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">Payment:</td>
                                                    <td><strong>{{ $invoice->payment_id }}</strong></td>
                                                </tr>
                                              
                                                {{-- <tr>
                                                    <td class="pr-1">Country:</td>
                                                    <td>INDIA</td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="pr-1">GST TIN:</td>
                                                    <td>{{ $invoice->customer->gst }}</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Address and Contact ends -->

                            <!-- Product Details starts -->
                            <div class="card-body invoice-padding invoice-product-details">
                                <form class="source-item">
                                    <div data-repeater-list="group-a">
                                        <div class="repeater-wrapper" data-repeater-item>
                                            <div class="row">
                                                <div class="col-12 d-flex product-details-border position-relative pr-0">
                                                    <div class="row w-100 pr-lg-0 pr-1 py-2">
                                                        <div class="col-lg-3 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Block ID</p>
                                                          
                                                            <input type="text" class="form-control" value="{{ $invoice->qblock_id }}"   readonly />
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Color</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->color }}"  readonly />
                                                           
                                                        </div>
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Cutting L X B X H</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->length }} X {{ $invoice->breadth }} X {{ $invoice->height }}"  readonly />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">CBM</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->cbm }}" placeholder="CBM" readonly />
                                                        </div>
                                                       
                                                    </div>

                                                </div>
                                             </div>
                                             <div></div><br><br>
                                             <div class="row">
                                                <div class="col-12 d-flex product-details-border position-relative pr-0">
                                                    <div class="row w-100 pr-lg-0 pr-1 py-2">
                                                        <div class="col-lg-3 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Weight</p>
                                                          
                                                            <input type="text" class="form-control" value="" placeholder="20000" readonly />
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marker</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->marker }}" readonly />
                                                           
                                                        </div>
                                                        
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marking L X B X H</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->bm_length }} X {{ $invoice->bm_breadth }} X {{ $invoice->bm_height }}" readonly />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marking CBM</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->bm_cbm }}" readonly />
                                                        </div>
                                                       
                                                    </div>

                                                </div>
                                            </div>


                                            <div></div><br><br>
                                             <div class="row">
                                                <div class="col-12 d-flex product-details-border position-relative pr-0">
                                                    <div class="row w-100 pr-lg-0 pr-1 py-2">
                                                        
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Dressing Date</p>
                                                            <input type="text" class="form-control" value="12-22-2022" readonly />
                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Weight</p>
                                                          
                                                            <input type="text" class="form-control" value="2000" readonly />
                                                        </div>
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Dressing L X B X H</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->bd_length }} X {{ $invoice->bd_breadth }} X {{ $invoice->bd_height }}" readonly />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">CBM</p>
                                                            <input type="text" class="form-control" value="{{ $invoice->bd_cbm }}" placeholder="CBM" readonly />
                                                        </div>
                                                       
                                                    </div>

                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                  
                                </form>
                            </div>
                            <!-- Product Details ends -->

                            <!-- Invoice Total starts -->
                            <div class="card-body invoice-padding">
                                <div class="row invoice-sales-total-wrapper">
                                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <label for="salesperson" class="form-label">Salesperson:</label>
                                            <input type="text" class="form-control ml-50" id="salesperson" placeholder="Ramanujam" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                        <div class="invoice-total-wrapper">
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Subtotal:</p>
                                                <p class="invoice-total-amount">₹{{ $invoice->price }}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Discount:</p>
                                                <p class="invoice-total-amount">₹0</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Tax:</p>
                                                <p class="invoice-total-amount">18%</p>
                                            </div>
                                            <hr class="my-50" />
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Total:</p>
                                                <p class="invoice-total-amount">₹26000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Invoice Total ends -->

                            <hr class="invoice-spacing mt-0" />

                            <div class="card-body invoice-padding py-0">
                                <!-- Invoice Note starts -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-2">
                                            <label for="note" class="form-label font-weight-bold">Note:</label>
                                            <textarea class="form-control" rows="2" id="note">
It was a pleasure working with you and your team. We hope you will keep us in mind for future projects. Thank You!</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Add Left ends -->

                    <!-- Invoice Add Right starts -->
                    <div class="col-xl-3 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary btn-block mb-75" >Send Invoice</button>
                                <a href="./app-invoice-preview.html" class="btn btn-outline-primary btn-block mb-75">Preview</a>
                                <button type="button" class="btn btn-outline-primary btn-block">Save</button>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Invoice Add Right ends -->
                </div>

              

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
