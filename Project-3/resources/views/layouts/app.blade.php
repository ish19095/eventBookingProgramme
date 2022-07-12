<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>BLM Event Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- <link href="assets/css/vendor/fullcalendar.min.css" rel="stylesheet" type="text/css" /> -->
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
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
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
                                        <li class="navbar-item"><a class="nav-link" href="calendar">Calendar</a></li>
                                        <li class="navbar-item"><a class="nav-link" href="event">Event Booking</a></li> 
                                        <li class="navbar-item"><a class="nav-link" href="school">School Booking</a></li>
                                        <li class="navbar-item"><a class="nav-link" href="statistics">Nature Reserve Visitor Statistics</a></li>
                                        <li class="navbar-item"><a class="nav-link" href="admin">Admin</a></li>           
                                        <li class="navbar-item"><a class="nav-link" href="attendance">Attendence Sheet</a></li>
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

        @yield('script')
        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/js/vendor/jquery-ui.min.js"></script>
        <script src="assets/js/vendor/fullcalendar.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <script src="assets/js/pages/demo.calendar.js"></script>
        <!-- end demo js-->
    </body>
</html>