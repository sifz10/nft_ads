<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> {{ env("APP_NAME") }} - @yield('page_title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('uploads') !!}/logo/favicon.webp">
    <link href="{!! asset('assets') !!}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets') !!}/vendor/chartist/css/chartist.min.css">
    <link href="{!! asset('assets') !!}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{!! asset('assets') !!}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{!! asset('assets') !!}/css/style.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="right-profile">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! route('dashboard') !!}" class="brand-logo">
                <img class="logo-abbr" src="{!! asset('uploads') !!}/logo/favicon.webp" alt="">
                <img class="logo-compact" src="{!! asset('uploads') !!}/logo/hr.png" alt="">
                <img class="brand-title" src="{!! asset('uploads') !!}/logo/hr.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown show">
                                <div class="dropdown-menu p-0 m-0 show">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search Here" aria-label="Search">
                                    </form>
                                </div>
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                          d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z"
                                          fill="#A4A4A4" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown d-none d-xl-flex">
                                <a class="btn btn-primary" href="{!! route('create.ads') !!}">+ New Campaign</a>
                            </li>
                            <li class="nav-item dropdown header-profile side">
                                <a class="nav-link" href="#">
                                    <div class="header-info">
                                        <span>Hello, <strong>{{ Auth::user()->name }}</strong></span>
                                    </div>
                                    <img src="{!! asset(Auth::user()->profile_picture) !!}" width="20" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('components.dashboard.navbar.navbar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        {{-- @if (Route::is('dashboard'))
        @endif --}}
          <div class="profile-sidebar dz-scroll" id="DZ_W_Sidebar">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="text-black">Profile</h5>
                <a href="#" class="text-red text-primary edit-profile-link" data-toggle="modal" data-target="#exampleModalCenter">
                    Edit
                </a>
                <a href="javascript:;" class="text-red d-none close-side">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit {{ Auth::user()->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <script>
                          var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                              URL.revokeObjectURL(output.src) // free memory
                            }
                          };
                        </script>
                        <div class="modal-body">
                            @include('Alerts.alerts')
                            <form action="{!! route('save.user.data') !!}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="">Name</label>
                                <input type="text" class="form-control mb-3" name="name" value="{{ Auth::user()->name }}">
                                <label for="">Email</label>
                                <input type="text" disabled class="form-control mb-3" name="email" value="{{ Auth::user()->email }}">
                                <img id="output" src="{!! asset(Auth::user()->profile_picture) !!}" width="140" height="140" style="border: 1px solid black;border-radius: 50%">
                                <br>
                                <br>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="avatar" onchange="loadFile(event)" class="custom-file-input">
                                        <label class="custom-file-label">Profile Image</label>
                                    </div>
                                </div>
                                @php
                                  $user_social = Auth::user()->socialmedia;
                                @endphp

                                <label for="">Wallet</label>
                                <input type="text" class="form-control mb-3" name="wallet" value="@if($user_social) {{ $user_social->wallet }} @endif">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control mb-3" name="instagram_link" value="@if($user_social) {{ $user_social->instagram_link }} @endif ">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control mb-3" name="twitter_link" value="@if($user_social) {{ $user_social->twitter_link }} @endif">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control mb-3" name="facebook_link" value="@if($user_social) {{ $user_social->facebook_link }} @endif">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

            <div class="profile-img mb-4">
                <img src="{!! asset(Auth::user()->profile_picture) !!}" width="140" height="140" alt=""  style="border: 1px solid green"/>
            </div>
            <div class="profile-info-bx mb-4">
                <h4 class="mb-1 fs-22">{{ Auth::user()->name }}</h4>
                <span>Admin</span>
            </div>

            <div class="text-center mb-5">
                <a href="@if($user_social) https://www.instagram.com/{{ $user_social->instagram_link }}" @endif target="_blank" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-instagram scale5 mr-3"></i>/@if($user_social){{ $user_social->instagram_link }} @endif</a>
                <a href="@if($user_social) https://twitter.com/{{ $user_social->twitter_link }}" @endif target="_blank" class="btn text-left light btn-dark d-block mb-3 "><i class="fa fa-twitter scale5 mr-3"></i>/@if($user_social){{ $user_social->twitter_link }} @endif</a>
                <a href="@if($user_social) https://www.facebook.com/{{ $user_social->facebook_link }}" @endif target="_blank" class="btn text-left light btn-dark d-block mb-4 "><i class="fa fa-facebook scale5 mr-3"></i>/@if($user_social){{ $user_social->facebook_link }} @endif</a>
                <a href="#" class="btn btn-outline-dark d-block btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Edit Profile</a>
            </div>
            <hr />
            <a href="{!! route('logout') !!}" class="btn btn-outline-danger d-block btn-lg mt-5">Logout</a>
            <div class="card-campaign mt-5">
                <h5>Ad Campaign Tutorials Video</h5>
                <a target="_blank" href="{{ \App\Models\Setting::find(1)->tutorial_link }}" class="fa fa-play"></a>
            </div>
          </div>

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>© Copyright by <a href="{!! route('welcome') !!}" target="_blank">{{ env("APP_NAME") }}</a> {{ \Carbon\Carbon::now()->format("Y") }}</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{!! asset('assets') !!}/vendor/global/global.min.js"></script>
    <script src="{!! asset('assets') !!}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{!! asset('assets') !!}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{!! asset('assets') !!}/js/custom.min.js"></script>
    <script src="{!! asset('assets') !!}/js/deznav-init.js"></script>

    <!-- Counter Up -->
    <script src="{!! asset('assets') !!}/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{!! asset('assets') !!}/vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Apex Chart -->
    <script src="{!! asset('assets') !!}/vendor/apexchart/apexchart.js"></script>
    <script src="{!! asset('assets') !!}/vendor/flot/jquery.flot.js"></script>
    <script src="{!! asset('assets') !!}/vendor/flot/jquery.flot.pie.js"></script>
    <script src="{!! asset('assets') !!}/vendor/flot/jquery.flot.resize.js"></script>
    <script src="{!! asset('assets') !!}/vendor/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="{!! asset('assets') !!}/js/plugins-init/flot-init.js"></script>

    <!-- Chart Chartist plugin files -->
    <script src="{!! asset('assets') !!}/vendor/chartist/js/chartist.min.js"></script>
    <script src="{!! asset('assets') !!}/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="{!! asset('assets') !!}/js/plugins-init/chartist-init.js"></script>

    {{-- Data dataTables --}}
    <script src="{!! asset('assets') !!}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{!! asset('assets') !!}/js/plugins-init/datatables.init.js"></script>
    <!-- Chart piety plugin files -->
    <script src="{!! asset('assets') !!}/vendor/peity/jquery.peity.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="{!! asset('assets') !!}/js/dashboard/dashboard-1.js"></script>


</body>

</html>
