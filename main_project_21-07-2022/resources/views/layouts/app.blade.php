<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>BLM Programme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
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
                    {{-- <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="home" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="assets/images/blm-logo.png" alt="" height="60">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="assets/images/blm-logo.png" alt="" height="60">
                                </span>
                            </a>

                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="navbar-item"><a class="nav-link" href="events">Event Booking</a></li> 
                                        <li class="navbar-item"><a class="nav-link" href="schools">School Booking</a></li>
                                        <li class="navbar-item"><a class="nav-link" href="statistics">Nature Reserve Visitor Statistics</a></li>
                                        <li class="navbar-item"><a class="nav-link" href="admins">Admin</a></li>           
                                        <li class="navbar-item"><a class="nav-link" href="attendance">Attendence Sheet</a></li>
                                    </ul>
                                </div>
                            </nav>                       
                        </div>
                    </div> --}}

                    
                    <div class="topnav shadow-sm">
                        
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
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">                                
                                        
                                <div class="navbar-collapse active collapse show" id="topnav-menu-content" style="">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="events" id="topnav-dashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-dashboard mr-1"></i>Events <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                                <a href="events" class="dropdown-item">Internal</a>
                                                <a href="events" class="dropdown-item" onclick="setExternalTabAsActive()">External</a>
                                                {{-- <a href="index.html" class="dropdown-item">Ecommerce</a>
                                                <a href="dashboard-projects.html" class="dropdown-item">Projects</a> --}}
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle arrow-none" href="schools" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps mr-1"></i>Schools <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="apps-calendar.html" class="dropdown-item active">test</a>                                                
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="statistics" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-copy-alt mr-1"></i>Statistics <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                                                                
                                                <a href="pages-starter.html" class="dropdown-item">Test</a>
                                                
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="admins" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-package mr-1"></i>Admin <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                {{-- <a href="employees" class="dropdown-item">Edit Employee</a> --}}
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="employees" id="topnav-ui-kit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Edit Employee <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                        <a href="ui-accordions.html" class="dropdown-item">Add</a>
                                                        <a href="ui-alerts.html" class="dropdown-item">Remove</a>                                                        
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="locations" id="topnav-ui-kit2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="attendance" id="topnav-layouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-window mr-1"></i>Attendance <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                                <a href="layouts-vertical.html" class="dropdown-item">Test</a>
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

        

        @yield('script')
    </body>
</html>