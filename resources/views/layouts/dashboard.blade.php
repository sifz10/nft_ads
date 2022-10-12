<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:;">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                          d="M20.4604 0.848846H3.31682C2.64742 0.849582 2.00565 1.11583 1.53231 1.58916C1.05897 2.0625 0.792727 2.70427 0.791992 3.37367V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.414 2.64742 17.6803 3.31682 17.681C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5226V20.3168C4.15843 20.6214 4.24112 20.9204 4.39768 21.1817C4.55423 21.4431 4.77879 21.6571 5.04741 21.8008C5.31602 21.9446 5.61861 22.0127 5.92292 21.998C6.22723 21.9833 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.681H17.187C17.7383 17.68 18.2742 17.4993 18.7136 17.1664C19.1531 16.8334 19.472 16.3664 19.6222 15.8359L22.8965 4.05007C22.9998 3.67478 23.0152 3.28071 22.9413 2.89853C22.8674 2.51634 22.7064 2.15636 22.4707 1.8466C22.2349 1.53684 21.9309 1.28565 21.5822 1.1126C21.2336 0.93954 20.8497 0.849282 20.4604 0.848846ZM21.2732 3.60301L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8274C17.5496 15.938 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5226C5.84091 17.8532 5.57467 17.2115 5.10133 16.7381C4.62799 16.2648 3.98622 15.9985 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.37367C2.47534 3.15051 2.56406 2.93652 2.72186 2.77871C2.87966 2.62091 3.09365 2.5322 3.31682 2.53206H20.4604C20.5905 2.53239 20.7187 2.56274 20.8352 2.62073C20.9516 2.67872 21.0531 2.7628 21.1318 2.86643C21.2104 2.97005 21.2641 3.09042 21.2886 3.21818C21.3132 3.34594 21.3079 3.47763 21.2732 3.60301Z"
                                          fill="#3E4954"></path>
                                        <path
                                          d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z"
                                          fill="#3E4954"></path>
                                        <path
                                          d="M13.4161 10.1065H5.84161C5.6184 10.1065 5.40433 10.1952 5.2465 10.353C5.08867 10.5109 5 10.7249 5 10.9481C5 11.1714 5.08867 11.3854 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3854 14.2577 11.1714 14.2577 10.9481C14.2577 10.7249 14.169 10.5109 14.0112 10.353C13.8534 10.1952 13.6393 10.1065 13.4161 10.1065Z"
                                          fill="#3E4954"></path>
                                    </svg>
                                    <span class="badge light text-white bg-primary">5</span>
                                </a>
                            </li>

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
                <a href="javascript:;" class="fa fa-play"></a>
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
