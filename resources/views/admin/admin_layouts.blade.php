<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Established in the year 2009, Kalpa Granites India Pvt.Ltd. has emerged as one of the top tile companies in India. Kalpa Granite leadership is marked by many successful challenges in its incessant pursuit of excellence.">
    <meta name="keywords" content="Kalpa Granites India Pvt.Ltd">
    <meta name="author" content="zigainfotech">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Kalpa Granites Pvt Ltd</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">


	<link href="{{ asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->


    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/extensions/ext-component-toastr.css')}}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/forms/form-validation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/forms/form-wizard.css')}}">
    <!-- BEGIN: invoice CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/pages/app-invoice.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/css/forms/select/select2.min.css')}}"> --}}
    <style>
    input[type=checkbox]:checked {
    content: '✔';
    background-color:white;
}

    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @include('sweetalert::alert')

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('admin/home')}}" data-toggle="tooltip" data-placement="top" title="Patients"><i class="ficon" data-feather="users"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('admin/contact')}}" data-toggle="tooltip" data-placement="top" title="Contact Messages"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('admin/fullcalendareventmaster')}}" data-toggle="tooltip" data-placement="top" title="Appointments"><i class="ficon" data-feather="database"></i></a></li>

                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">




                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">Kalpa Granites</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{ asset('backend/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" type="button" data-toggle="modal" data-target="#inlineForm"><i class="mr-50" data-feather="user"></i> Profile</a>



                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/admin/setting')}}"><i class="mr-50" data-feather="settings"></i> Settings</a>
						<a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="la la-power-off user-icon"></span>
                        <i class="mr-50" data-feather="power"></i>
                        Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('backend/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('backend/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('backend/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ asset('backend/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Dr. Senthil</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            {{-- <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span> --}}
                        <h2 class="brand-text">Kalpa Granites Pvt Ltd</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=""><a class="d-flex align-items-center" href="{{url('admin/home')}}"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Dashboard</span></a>
                </li>


                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Customers</span> <i data-feather='user-check'></i>
                </li>
                {{-- {{dd(Auth::guard('admin')->user())}} --}}

                @if(Auth::user()->quarry == 1)
                <li class="nav-item"><a class="d-flex align-items-center" href="{{url('admin/fullcalendareventmaster')}}"><i data-feather='slack'></i>
                  <span class="menu-title text-truncate" data-i18n="Chat">Appointments</span></a>
              </li>
              @else
              @endif

                @if(Auth::user()->quarry == 1)
                <li class="nav-item"><a class="d-flex align-items-center" href="{{url('admin/aquarry')}}"><i data-feather='codesandbox'></i>
                  <span class="menu-title text-truncate" data-i18n="Chat">Quarrys</span></a>
              </li>
              @else
                @endif

                @if(Auth::user()->quarry == 1)
                <li class="nav-item"><a class="d-flex align-items-center" href="{{url('admin/product')}}"><i data-feather='slack'></i>
                  <span class="menu-title text-truncate" data-i18n="Chat">Products</span></a>
              </li>
              @else
              @endif

              @if(Auth::user()->quarry == 1)
                <li class="nav-item"><a class="d-flex align-items-center" href="{{url('admin/project')}}"><i data-feather='slack'></i>
                  <span class="menu-title text-truncate" data-i18n="Chat">Projects</span></a>
              </li>
              @else
              @endif

              @if(Auth::user()->quarry == 1)
                <li class="nav-item"><a class="d-flex align-items-center" href="{{url('admin/gallery')}}"><i data-feather='slack'></i>
                  <span class="menu-title text-truncate" data-i18n="Chat">Gallery</span></a>
              </li>
              @else
              @endif

                @if(Auth::user()->attendance == 1)

               <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="User">Manage Attendance</span></a>
                  <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('add_attendance',['date'=>date('Y-m-d')])}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add Attendance</span></a>
                    </li>
                      <li><a class="d-flex align-items-center" href="{{route('attendance')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Report</span></a>
                      </li>


                  </ul>
              </li>
              @else




              @endif


              <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="User">Operations</span></a>
                  <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-blockentry')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Block Entry</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-production')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Production</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-polishing')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Polishing Machine</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-dailyreport')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Daily Report</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-epoxy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Epoxy</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-dispatch')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Dispatch</span></a></li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/m-finished')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Finished Goods Stock</span></a></li>


                  </ul>
              </li>


              @if(Auth::user()->customer == 1)
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/customer')}}"><i data-feather='user-check'></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Customer's</span></a>
                </li>
                @else
                @endif
                @if(Auth::user()->employee == 1)
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/employee')}}"><i data-feather='users'></i>
                    <span class="menu-title text-truncate" data-i18n="Chat">Employees</span></a>
                </li>
                @else
                @endif
                @if(Auth::user()->production == 1)
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Production</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="User">Production</span></a>
                  <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{url('admin/rblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Rough Blocks</span></a>
                    </li>
                      <li><a class="d-flex align-items-center" href="{{url('admin/bdblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Dressing</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href="{{url('admin/bcblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Cutting</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href="{{url('admin/bpblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Grinding epoxy polish</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Finished Slabs</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Dispatch</span></a>
                      </li>

                  </ul>
              </li>
              @else
              @endif

              @if(Auth::user()->production == 1)
              <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Quarry Production</span> <i data-feather="more-horizontal"></i>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='codesandbox'></i><span class="menu-title text-truncate" data-i18n="User">Production</span></a>
                <ul class="menu-content">
                  <li><a class="d-flex align-items-center" href="{{url('admin/qbcblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Block Cutting</span></a>
                  </li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/qbmblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Block Marking</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/qbdblock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Block Dressing</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/qqpayment')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Perform Invoice</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{url('admin/qloading')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Loading</span></a>
                    </li>

                </ul>
            </li>
            @else
            @endif

              @if(Auth::user()->stock == 1)
              <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Stocks</span><i data-feather="more-horizontal"></i>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='pie-chart'></i><span class="menu-title text-truncate" data-i18n="User">Stocks</span></a>
                <ul class="menu-content">
                  <li><a class="d-flex align-items-center" href="{{url('admin/stock')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Stock</span></a>
                  </li>

                    <li><a class="d-flex align-items-center" href="{{url('admin/purchaseintent')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Purchase Intent</span></a>
                    </li>

                </ul>
            </li>
            @else
            @endif

                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="calendar"></i>
                    <span class="menu-title text-truncate" data-i18n="droplet">Sales</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/contact')}}"><i data-feather='message-square'></i>
                  <span class="menu-title text-truncate" data-i18n="droplet">Messages</span></a>
              </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/stock')}}"><i data-feather="check-square"></i>
                    <span class="menu-title text-truncate" data-i18n="droplet">Stock Audit</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='briefcase'></i>
                    <span class="menu-title text-truncate" data-i18n="droplet">Purchase Order</span></a>
                </li>

                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="grid"></i>
                    <span class="menu-title text-truncate" data-i18n="box">Exports</span></a>
                </li> --}}
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/invoice-add')}}"><i data-feather="file-text"></i>
                    <span class="menu-title text-truncate" data-i18n="file-text">Invoice</span></a>
                </li>
                @if(Auth::user()->setting == 1)

                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/setting')}}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Colors">Settings</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('admin/city')}}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Colors">Cities</span></a>
                </li>
                @else
                @endif
                <li class=" nav-item"><a class="d-flex align-items-center dropdown-item"   type="button" data-toggle="modal" data-target="#inlineForm"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Colors">Profile</span></a>
                </li>





            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->



     <!-- Modal -->
     <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Password Update</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ Route('admin.password.update') }}" aria-label="{{ __('Reset Password') }}">
                    @csrf
                    <div class="modal-body">
                        <label>Old Password: </label>
                        <div class="form-group">

                            <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>

                            @if ($errors->has('oldpass'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldpass') }}</strong>
                                </span>
                            @endif
                        </div>

                        <label>New Password: </label>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <label>Confirm Password: </label>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	@guest
	@else
@endguest
@yield('admin_content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ml-25" href="https://Kalpagranites.com" target="_blank">Kalpa Granites Pvt Ltd</a>
          <span class="d-none d-sm-inline-block">, All rights Reserved</span></span>
          <span class="float-md-right d-none d-md-block">Hand-crafted <i data-feather="heart"></i>  ZigaInfotech</span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('backend/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->


        <!-- BEGIN: Page invoice JS-->
        <script src="{{ asset('backend/js/scripts/pages/app-invoice.js')}}"></script>
        <script src="{{ asset('backend/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{ asset('backend/vendors/js/forms/select/select2.full.min.js')}}"></script>
        <script src="{{ asset('backend/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->

    <script src="{{ asset('backend/js/scripts/tables/table-datatables-basic.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('backend/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <!-- END: Page JS-->
	<script src="{'backend/js/custom/modals/create-app.js'}"></script>
    <script src="{{ asset('backend/js/scripts/forms/form-wizard.js')}}"></script>

    <script src="{{ asset('backend/js/scripts/forms/form-repeater.js')}}"></script>
    <!-- BEGIN: Page JS-->

    <!-- END: Page JS-->
    {{-- <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>










{{-- block dressing--}}
<script>
  $(function() {

      $.ajaxSetup({
              headers: {
                      'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
      });

    // add new employee ajax request
    $("#add_bdblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#add_bdblock_btn").text('Adding...');
      $.ajax({

        url: '{{ route('bdblockstore') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Added!',
              'Block Dressing Added Successfully!',
              'success'
            )
            fetchAllBDblocks();
          }
          $("#add_bdblock_btn").text('Add Rblock');
          $("#add_bdblock_form")[0].reset();
          $("#addBDblockModal").modal('hide');
        }
      });
    });

    // edit employee ajax request
    $(document).on('click', '.BDeditIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');

      $.ajax({
        url: '{{ route('bdblockedit') }}',
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },

      success: function(response) {
          console.log(response);

          $("#length").val(response.length);
          $("#breadth").val(response.breadth);
          $("#height").val(response.height);
          $("#price").val(response.price);
          $("#supplier").val(response.supplier);
          $("#color").val(response.color);
          $("#marker").val(response.marker);
          $("#cbm").val(response.cbm);
          $("#remark").val(response.remark);

          $("#bd_length").val(response.bd_length);
          $("#bd_breadth").val(response.bd_breadth);
          $("#bd_height").val(response.bd_height);
          $("#bd_cbm").val(response.bd_cbm);
          $("#bd_remark").val(response.bd_remark);
          $("#bd_avatar").val(response.bd_avatar);

          $("#avatar").html(
            `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);

            $("#bd_avatar").html(
            `<img src="/storage/images/${response.bd_avatar}" width="50" class="img-fluid img-thumbnail">`);

          $("#bdblock_id").val(response.id);
          $("#block_id").val(response.block_id);
          $("#rblock_avatar").val(response.avatar);
          $("#bdblock_avatar").val(response.bd_avatar);
          $("#bcblock_avatar").val(response.bc_avatar);
        }
      });
    });


    // update employee ajax request
    $("#edit_bdblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_bdblock_btn").text('Updating...');
      $.ajax({
        url: '{{ route('bdblockupdate') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',

        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Updated!',
              'Block Dressing Updated Successfully!',
              'success'
            )
            fetchAllBDblocks();
          }
          $("#edit_bdblock_btn").text('Update Dressing Block');
          $("#edit_bdblock_form")[0].reset();
          $("#editBDblockModal").modal('hide');
        }
      });
    });

    // delete employee ajax request
    $(document).on('click', '.BDdeleteIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');
      console.log(id);
      let csrf = '{{ csrf_token() }}';
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('bdblockdelete') }}',
            method: 'delete',
            data: {
              id: id,
              _token: csrf
            },
            success: function(response) {
              console.log(response);
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              fetchAllBDblocks();
            }
          });
        }
      })
    });

    // fetch all employees ajax request
    fetchAllBDblocks();

    function fetchAllBDblocks() {
      $.ajax({
        url: '{{ route('bdblockfetchall') }}',
        method: 'get',
        success: function(response) {
          $("#show_all_bdblocks").html(response);
          $("#bdblock_table").DataTable({
            processing: !0,
        serverSide: !0,
        searching: !1,
        order: [[0, "desc"]],
        search: { return: !0 },
        pageLength: 7,

          });
        }
      });
    }
  });
</script>
{{--  block Dressing--}}


{{-- block cutting--}}
<script>
  $(function() {

      $.ajaxSetup({
              headers: {
                      'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
      });

    // add new employee ajax request
    $("#add_bcblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#add_bcblock_btn").text('Adding...');
      $.ajax({

        url: '{{ route('bcblockstore') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Added!',
              'Block Cutting Added Successfully!',
              'success'
            )
            fetchAllBCblocks();
          }
          $("#add_bcblock_btn").text('Add Cutting');
          $("#add_bcblock_form")[0].reset();
          $("#addBCblockModal").modal('hide');
        }
      });
    });

    // edit employee ajax request
    $(document).on('click', '.BCeditIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');

      $.ajax({
        url: '{{ route('bcblockedit') }}',
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },

      success: function(response) {
          console.log(response);

          $("#length").val(response.length);
          $("#breadth").val(response.breadth);
          $("#height").val(response.height);
          $("#price").val(response.price);
          $("#supplier").val(response.supplier);
          $("#color").val(response.color);
          $("#marker").val(response.marker);
          $("#cbm").val(response.cbm);
          $("#remark").val(response.remark);

          $("#bd_length").val(response.bd_length);
          $("#bd_breadth").val(response.bd_breadth);
          $("#bd_height").val(response.bd_height);
          $("#bd_cbm").val(response.bd_cbm);
          $("#bd_remark").val(response.bd_remark);
          $("#bd_avatar").val(response.bd_avatar);


          $("#bc_length").val(response.bc_length);
          $("#bc_breadth").val(response.bc_breadth);
          $("#bc_slabscount").val(response.bc_slabscount);
          $("#bc_machine").val(response.bc_machine);
          $("#bc_sqft").val(response.bc_sqft);
          $("#bc_remark").val(response.bc_remark);
          $("#bc_avatar").val(response.bc_avatar);

          $("#avatar").html(
            `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#bd_avatar").html(
            `<img src="/storage/images/${response.bd_avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#bc_avatar").html(
              `<img src="/storage/images/${response.bc_avatar}" width="50" class="img-fluid img-thumbnail">`);

          $("#bcblock_id").val(response.id);
          $("#block_id").val(response.block_id);
          $("#rblock_avatar").val(response.avatar);
          $("#bdblock_avatar").val(response.bd_avatar);
          $("#bcblock_avatar").val(response.bc_avatar);
        }
      });
    });


    // update employee ajax request
    $("#edit_bcblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_bcblock_btn").text('Updating...');
      $.ajax({
        url: '{{ route('bcblockupdate') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',

        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Updated!',
              'Block Cutting Updated Successfully!',
              'success'
            )
            fetchAllBCblocks();
          }
          $("#edit_bcblock_btn").text('Cutting Block Updated ');
          $("#edit_bcblock_form")[0].reset();
          $("#editBCblockModal").modal('hide');
        }
      });
    });

    // delete employee ajax request
    $(document).on('click', '.BCdeleteIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');
      console.log(id);
      let csrf = '{{ csrf_token() }}';
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('bcblockdelete') }}',
            method: 'delete',
            data: {
              id: id,
              _token: csrf
            },
            success: function(response) {
              console.log(response);
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              fetchAllBCblocks();
            }
          });
        }
      })
    });

    // fetch all employees ajax request
    fetchAllBCblocks();

    function fetchAllBCblocks() {
      $.ajax({
        url: '{{ route('bcblockfetchall') }}',
        method: 'get',
        success: function(response) {
          $("#show_all_bcblocks").html(response);
          $("#bcblock_table").DataTable({
            order: [0, 'desc'],
                  responsive: true
          });
        }
      });
    }
  });
</script>
{{--  block Dressing--}}




{{-- block polish--}}
<script>
  $(function() {

      $.ajaxSetup({
              headers: {
                      'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
      });

    // add new employee ajax request
    $("#add_bpblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#add_bpblock_btn").text('Adding...');
      $.ajax({

        url: '{{ route('bpblockstore') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Added!',
              'Block Cutting Added Successfully!',
              'success'
            )
            fetchAllBPblocks();
          }
          $("#add_bpblock_btn").text('Add Polish');
          $("#add_bpblock_form")[0].reset();
          $("#addBPblockModal").modal('hide');
        }
      });
    });

    // edit employee ajax request
    $(document).on('click', '.BPeditIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');

      $.ajax({
        url: '{{ route('bpblockedit') }}',
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },

      success: function(response) {
          console.log(response);

          $("#length").val(response.length);
          $("#breadth").val(response.breadth);
          $("#height").val(response.height);
          $("#price").val(response.price);
          $("#supplier").val(response.supplier);
          $("#color").val(response.color);
          $("#marker").val(response.marker);
          $("#cbm").val(response.cbm);
          $("#remark").val(response.remark);

          $("#bd_length").val(response.bd_length);
          $("#bd_breadth").val(response.bd_breadth);
          $("#bd_height").val(response.bd_height);
          $("#bd_cbm").val(response.bd_cbm);
          $("#bd_remark").val(response.bd_remark);
          $("#bd_avatar").val(response.bd_avatar);


          $("#bc_length").val(response.bc_length);
          $("#bc_breadth").val(response.bc_breadth);
          $("#bc_slabscount").val(response.bc_slabscount);
          $("#bc_machine").val(response.bc_machine);
          $("#bc_sqft").val(response.bc_sqft);
          $("#bc_remark").val(response.bc_remark);
          $("#bc_avatar").val(response.bc_avatar);

          $("#bp_grinding").val(response.grinding);
          $("#bp_epoxy").val(response.epoxy);
          $("#bp_polish").val(response.polish);
          $("#bp_gremark").val(response.bp_gremark);
          $("#bp_eremark").val(response.bp_eremark);
          $("#bp_premark").val(response.bp_premark);
          $("#bp_avatar").val(response.bp_avatar);

          $("#avatar").html(
            `<img src="/storage/images/${response.avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#bd_avatar").html(
            `<img src="/storage/images/${response.bd_avatar}" width="50" class="img-fluid img-thumbnail">`);
            $("#bc_avatar").html(
              `<img src="/storage/images/${response.bc_avatar}" width="50" class="img-fluid img-thumbnail">`);
              $("#bp_avatar").html(
              `<img src="/storage/images/${response.bp_avatar}" width="50" class="img-fluid img-thumbnail">`);

          $("#bpblock_id").val(response.id);
          $("#block_id").val(response.block_id);
          $("#rblock_avatar").val(response.avatar);
          $("#bdblock_avatar").val(response.bd_avatar);
          $("#bcblock_avatar").val(response.bc_avatar);
          $("#bpblock_avatar").val(response.bp_avatar);
        }
      });
    });


    // update employee ajax request
    $("#edit_bpblock_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_bpblock_btn").text('Updating...');
      $.ajax({
        url: '{{ route('bpblockupdate') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',

        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Updated!',
              'Block Polish Updated Successfully!',
              'success'
            )
            fetchAllBPblocks();
          }
          $("#edit_bpblock_btn").text('Update Polish Block');
          $("#edit_bpblock_form")[0].reset();
          $("#editBPblockModal").modal('hide');
        }
      });
    });

    // delete employee ajax request
    $(document).on('click', '.BPdeleteIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');
      console.log(id);
      let csrf = '{{ csrf_token() }}';
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route('bpblockdelete') }}',
            method: 'delete',
            data: {
              id: id,
              _token: csrf
            },
            success: function(response) {
              console.log(response);
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              fetchAllBPblocks();
            }
          });
        }
      })
    });

    // fetch all employees ajax request
    fetchAllBPblocks();

    function fetchAllBPblocks() {
      $.ajax({
        url: '{{ route('bpblockfetchall') }}',
        method: 'get',
        success: function(response) {
          $("#show_all_bpblocks").html(response);
          $("#bpblock_table").DataTable({
            order: [0, 'desc'],
                  responsive: true
          });
        }
      });
    }
  });
</script>
{{--  block Dressing--}}



{{--
<script>$("#table").DataTable({
    "language": {
     "lengthMenu": "Show _MENU_",
    },
    "dom":
     "<'row'" +
     "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
     "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
     ">" +

     "<'table-responsive'tr>" +

     "<'row'" +
     "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
     "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
     ">"
   });</script>
    --}}
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>



{{-- <script>"use strict";
    var KTDatatablesBasicPaginations = {
        init: function() {
            $("#kt_datatable").DataTable({
                responsive: !0,
                pagingType: "full_numbers",

            })
        }
    };
    jQuery(document).ready((function() {
        KTDatatablesBasicPaginations.init()
    }));</script> --}}



    <script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;

          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
             toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
    @endif
 </script>



</body>
<!-- END: Body-->

</html>
