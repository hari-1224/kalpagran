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
                            <h2 class="content-header-title float-left mb-0">Knowledge Base</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Knowledge Base
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center" style="background-image: url('{{ asset('backend/app-assets/images/banner/banner.png')}}')">
                                <div class="card-body">
                                    <h2 class="text-primary">Dedicated Source Used on Website</h2>
                                    <p class="card-text mb-2">
                                        <span>Popular searches: </span><span class="font-weight-bolder">Sales automation</span>
                                    </p>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="search"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="searchbar" placeholder="Ask a question..." />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <!-- sales card -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/sales.svg')}}" class="card-img-top" alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>Sales Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            There is perhaps no better demonstration of the folly of image of our tiny world.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/marketing.svg')}}" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Marketing Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/api.svg')}}" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>API Questions</h4>
                                        <p class="text-body mt-1 mb-0">every hero and coward, every creator and destroyer of civilization.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/personalization.svg')}}" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Personalization</h4>
                                        <p class="text-body mt-1 mb-0">It has been said that astronomy is a humbling and character experience.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/email.svg')}}" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Stock Audit</h4>
                                        <p class="text-body mt-1 mb-0">There is perhaps no better demonstration of the folly of human conceits.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="#">
                                    <img src="{{ asset('backend/app-assets/images/illustration/demand.svg')}}" class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Demand Generation</h4>
                                        <p class="text-body mt-1 mb-0">Competent means we will never take anything for granted.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- no result -->
                        <div class="col-12 text-center no-result no-items">
                            <h4 class="mt-4">Search result not found!!</h4>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
