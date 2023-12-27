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
                                            <h3 class="text-primary invoice-logo">Kalpa Granite India Pvt. Ltd</h3>
                                        </div>
                                        <p class="card-text mb-25">Office #1223-1224, Sappadi Village Road,</p>
                                        <p class="card-text mb-25">  Hosur- 635109, Krishnagiri.</p>
                                        <p class="card-text mb-0">+91 984 584 3503, +91 984 584 3503</p>
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
                                                        <td><strong>CU00001</strong></td>
                                                    </tr>
                                                  
                                                    <tr>
                                                        <td class="pr-1">Name:</td>
                                                        <td>Thomas Shelby</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-1">Address:</td>
                                                        <td>ETD95476213874685</td>
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
                                                    <td class="pr-1">Country:</td>
                                                    <td>INDIA</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-1">GST TIN:</td>
                                                    <td>ETD95476213874685</td>
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
                                                          
                                                            <input type="text" class="form-control" value="QB00001" placeholder="Block ID" />
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Color</p>
                                                            <input type="text" class="form-control" value="red" placeholder="Color" />
                                                           
                                                        </div>
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Cutting L X B X H</p>
                                                            <input type="number" class="form-control" value="20x3x3" placeholder="L X B X H" />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">CBM</p>
                                                            <input type="number" class="form-control" value="600" placeholder="CBM" />
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
                                                          
                                                            <input type="text" class="form-control" value="" placeholder="20000" />
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marker</p>
                                                            <input type="text" class="form-control" value="Marker" placeholder="Marker" />
                                                           
                                                        </div>
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marking L X B X H</p>
                                                            <input type="number" class="form-control" value="20x3x3" placeholder="20x3x3" />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Marking CBM</p>
                                                            <input type="number" class="form-control" value="600" placeholder="CBM" />
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
                                                            <input type="text" class="form-control" value="12-22-2022" placeholder="Marker" />
                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Weight</p>
                                                          
                                                            <input type="text" class="form-control" value="2000" placeholder="20000" />
                                                        </div>
                                                        <div class="col-lg-4 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Dressing L X B X H</p>
                                                            <input type="number" class="form-control" value="20x3x3" placeholder="20x3x3" />
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">CBM</p>
                                                            <input type="number" class="form-control" value="600" placeholder="CBM" />
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
                                                <p class="invoice-total-amount">₹24000</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Discount:</p>
                                                <p class="invoice-total-amount">₹0</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Tax:</p>
                                                <p class="invoice-total-amount">10%</p>
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
                                <button onclick="window.print()" type="button" class="btn btn-outline-primary btn-block">Save</button>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Invoice Add Right ends -->
                </div>

                <!-- Add New Customer Sidebar -->
                <div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Add Customer</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form>
                                    <div class="form-group">
                                        <label for="customer-name" class="form-label">Customer Name</label>
                                        <input type="text" class="form-control" id="customer-name" placeholder="John Doe" />
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="customer-email" placeholder="example@domain.com" />
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-address" class="form-label">Customer Address</label>
                                        <textarea class="form-control" id="customer-address" cols="2" rows="2" placeholder="1307 Lady Bug Drive New York"></textarea>
                                    </div>
                                    <div class="form-group position-relative">
                                        <label for="customer-country" class="form-label">Country</label>
                                        <select class="form-control" id="customer-country" name="customer-country">
                                            <option label="select country"></option>
                                            <option value="Australia">Australia</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-contact" class="form-label">Contact</label>
                                        <input type="number" class="form-control" id="customer-contact" placeholder="763-242-9206" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap mt-2">
                                        <button type="button" class="btn btn-primary mr-1" data-dismiss="modal">Add</button>
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add New Customer Sidebar -->
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
