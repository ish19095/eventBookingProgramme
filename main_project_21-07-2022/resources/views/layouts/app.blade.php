<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>BLM Programme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Birdlife-Logo.png">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

        
        {{-- referncing with blade --}}
        {{-- <link href="{{ URL::asset('css/icons.css') }}" rel="stylesheet" type="text/css" /> --}}
        {{-- <link href="{{ URL::asset('css/app-creative.css') }}" rel="stylesheet" type="text/css" /> --}}
        {{-- <link href="{{ URL::asset('css/app-creative-dark.css') }}" rel="stylesheet" type="text/css" /> --}}
        {{-- ================== --}}




        {{-- <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="dark-style" /> --}}
        {{-- <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="dark-style" /> --}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        @yield('head')
    </head>

    <body class="loading" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    
                    <div class="topnav shadow-sm  bg-secondary-lighten">                        
                        <div class="container-fluid active">
                            <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav-menu-content" aria-expanded="false">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <div class="container-fluid active">                            
                            {{-- <button class="btn btn-primary ml-1 navbar-toggle" type="button"
                                data-toggle="collapse" data-target="#topnav-menu-content"
                                aria-expanded="false" aria-controls="topnav-menu-content"
                                onclick="openAndCollapseNavbar()">                                    
                                <div>                                        
                                    | | |
                                </div>
                            </button> --}}
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <a href="/home" class="topnav-logo">
                                    <span class="topnav-logo-lg">
                                        <img src="assets/images/Birdlife-Logo.png" alt="" height="52">
                                    </span>                                                
                                </a>
                               
                                {{-- btn_left was added in app-creative.css --}}
                                <button class="btn btn-primary ml-1 navbar-toggle btn_left" type="button"
                                    data-toggle="collapse" data-target="#topnav-menu-content"
                                    aria-expanded="false" aria-controls="topnav-menu-content"
                                    onclick="openAndCollapseNavbar()">                                    
                                    {{-- <div>                                        
                                        | | |
                                    </div> --}}
                                    <img src="assets/images/hamburgerBlueMenu.png" alt="" height="25">
                                    
                                </button>                                
                                
                                <div class="navbar-collapse  collapse show" id="topnav-menu-content" style="display: none">
                                    
                                    <ul class="navbar-nav">
                                        {{-- <li>
                                            <a href="/home" class="topnav-logo">
                                                <span class="topnav-logo-lg">
                                                    <img src="assets/images/Birdlife-Logo.png" alt="" height="52">
                                                </span>                                                
                                            </a>
                                        </li> --}}
                                        {{-- <li>
                                            <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav-menu-content" aria-expanded="false">
                                                <div class="lines">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>                                         --}}
                                        <li></li>

                                        <li class="nav-item dropdown">

                                            <a class="nav-link dropdown-toggle arrow-none" href="events" id="topnav-events" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" mdi mdi-calendar-plus"></i>&nbsp;&nbsp;Events <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                                {{-- <a href="{{route('events.index')}}#internal" class="dropdown-item">Internal</a>
                                                <a href="{{route('events.index')}}#external" class="dropdown-item">External</a> --}}
                                                

                                                <a  class="dropdown-item" href="{{ route('events.create') }}"  >Create</a>
                                                {{-- <a  class="dropdown-item">Create</a> --}}
                                                <a class="dropdown-item">Edit</a>

                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="schools" id="topnav-schools" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-bus-school"></i>&nbsp;&nbsp;Schools <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="apps-calendar.html" class="dropdown-item active">Create</a>
                                                <a href="apps-calendar.html" class="dropdown-item active">Edit</a> 
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="statistics" id="topnav-statistics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" mdi mdi-chart-bar"></i>&nbsp;&nbsp;Statistics <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                                                                
                                                <a href="pages-starter.html" class="dropdown-item">Test</a>
                                                
                                            </div>
                                        </li>
                                        

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="attendance" id="topnav-attendance" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-clipboard-account-outline"></i>&nbsp;&nbsp;Attendance <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-test">
                                                <a href="layouts-vertical.html" class="dropdown-item">Test</a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="admins" id="topnav-admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class=" mdi mdi-account-box"></i>&nbsp;&nbsp;Admin <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                {{-- <a href="employees" class="dropdown-item">Edit Employee</a> --}}   
                                                
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="admins" id="topnav-ui-kit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Edit Employee <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                        <a href="{{ route('employees.index')}}#add_employee" class="dropdown-item">Add</a>
                                                        <a href="{{ route('employees.index')}}#remove_employee" class="dropdown-item">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ route('locations.create') }}" id="topnav-ui-kit2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Edit Location <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                                        <a href="ui-media-object.html" class="dropdown-item">Add</a>
                                                        <a href="ui-modals.html" class="dropdown-item">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="runreport" id="topnav-extended-ui" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Run Report <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                                        <a href="extended-dragula.html" class="dropdown-item">type 1</a>
                                                        <a href="extended-range-slider.html" class="dropdown-item">type 2</a>
                                                        <a href="extended-ratings.html" class="dropdown-item">type 3</a>
                                                    </div>
                                                </div>
                                                <a href="editeventform" class="dropdown-item">Edit Event Form</a>                                                                                                                                           
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>



                    <!-- end Topbar -->
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                <!-- content -->
                <br><br>
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © BirdLifeMalta
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->


        <script>
            const target = document.getElementById("topnav-menu-content");
            function openAndCollapseNavbar(){
                if (target.style.display === "block") {
                    target.style.display = "none";
                } else {
                    target.style.display = "block";
                }
            }
        </script>
        

        @yield('script')
    </body>
</html>