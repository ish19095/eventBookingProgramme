
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Analytics Dashboard | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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

</head>

<body class="loading" data-layout="topnav">
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
                        <a href="" class="topnav-logo">
                            <span class="topnav-logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="16">
                            </span>
                            <span class="topnav-logo-sm">
                                <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                            </span>
                        </a>

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
        
                            <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down align-middle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                    <span>G Suite</span>
                                                </a>
                                            </div>
            
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li class="notification-list">
                                <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Dominic Keller</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <a class="navbar-toggle"  data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <div class="app-search dropdown">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
             
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 mr-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-life-ring font-16 mr-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-cog font-16 mr-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="media">
                                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="media-body">
                                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="media">
                                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="media-body">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topnav shadow-sm">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-dashboard mr-1"></i>Dashboards <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                            <a href="dashboard-analytics.html" class="dropdown-item">Analytics</a>
                                            <a href="dashboard-crm.html" class="dropdown-item">CRM</a>
                                            <a href="index.html" class="dropdown-item">Ecommerce</a>
                                            <a href="dashboard-projects.html" class="dropdown-item">Projects</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-apps mr-1"></i>Apps <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                            <a href="apps-calendar.html" class="dropdown-item">Calendar</a>
                                            <a href="apps-chat.html" class="dropdown-item">Chat</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ecommerce <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                    <a href="apps-ecommerce-products.html" class="dropdown-item">Products</a>
                                                    <a href="apps-ecommerce-products-details.html" class="dropdown-item">Products Details</a>
                                                    <a href="apps-ecommerce-orders.html" class="dropdown-item">Orders</a>
                                                    <a href="apps-ecommerce-orders-details.html" class="dropdown-item">Order Details</a>
                                                    <a href="apps-ecommerce-customers.html" class="dropdown-item">Customers</a>
                                                    <a href="apps-ecommerce-shopping-cart.html" class="dropdown-item">Shopping Cart</a>
                                                    <a href="apps-ecommerce-checkout.html" class="dropdown-item">Checkout</a>
                                                    <a href="apps-ecommerce-sellers.html" class="dropdown-item">Sellers</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Email <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                    <a href="apps-email-inbox.html" class="dropdown-item">Inbox</a>
                                                    <a href="apps-email-read.html" class="dropdown-item">Read Email</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Projects <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                                    <a href="apps-projects-list.html" class="dropdown-item">List</a>
                                                    <a href="apps-projects-details.html" class="dropdown-item">Details</a>
                                                    <a href="apps-projects-gantt.html" class="dropdown-item">Gantt</a>
                                                    <a href="apps-projects-add.html" class="dropdown-item">Create Project</a>
                                                </div>
                                            </div>
                                            <a href="apps-social-feed.html" class="dropdown-item">Social Feed</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tasks" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tasks <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                                    <a href="apps-tasks.html" class="dropdown-item">List</a>
                                                    <a href="apps-tasks-details.html" class="dropdown-item">Details</a>
                                                    <a href="apps-kanban.html" class="dropdown-item">Kanban Board</a>
                                                </div>
                                            </div>
                                            <a href="apps-file-manager.html" class="dropdown-item">File Manager</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-copy-alt mr-1"></i>Pages <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Authenitication <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                    <a href="pages-login.html" class="dropdown-item">Login</a>
                                                    <a href="pages-login-2.html" class="dropdown-item">Login 2</a>
                                                    <a href="pages-register.html" class="dropdown-item">Register</a>
                                                    <a href="pages-register-2.html" class="dropdown-item">Register 2</a>
                                                    <a href="pages-logout.html" class="dropdown-item">Logout</a>
                                                    <a href="pages-logout-2.html" class="dropdown-item">Logout 2</a>
                                                    <a href="pages-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                    <a href="pages-recoverpw-2.html" class="dropdown-item">Recover Password 2</a>
                                                    <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                    <a href="pages-lock-screen-2.html" class="dropdown-item">Lock Screen 2</a>
                                                    <a href="pages-confirm-mail.html" class="dropdown-item">Confirm Mail</a>
                                                    <a href="pages-confirm-mail-2.html" class="dropdown-item">Confirm Mail 2</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Error <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                    <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                    <a href="pages-404-alt.html" class="dropdown-item">Error 404-alt</a>
                                                    <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                </div>
                                            </div>
                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                            <a href="pages-preloader.html" class="dropdown-item">With Preloader</a>
                                            <a href="pages-profile.html" class="dropdown-item">Profile</a>
                                            <a href="pages-profile-2.html" class="dropdown-item">Profile 2</a>
                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                            <a href="pages-faq.html" class="dropdown-item">FAQ</a>
                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                            <a href="landing.html" class="dropdown-item">Landing</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-package mr-1"></i>Components <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <a href="widgets.html" class="dropdown-item">Widgets</a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Base UI 1 <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                                    <a href="ui-accordions.html" class="dropdown-item">Accordions</a>
                                                    <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                    <a href="ui-avatars.html" class="dropdown-item">Avatars</a>
                                                    <a href="ui-badges.html" class="dropdown-item">Badges</a>
                                                    <a href="ui-breadcrumb.html" class="dropdown-item">Breadcrumb</a>
                                                    <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                    <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                    <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                    <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                    <a href="ui-embed-video.html" class="dropdown-item">Embed Video</a>
                                                    <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                    <a href="ui-list-group.html" class="dropdown-item">List Group</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Base UI 2 <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                                    <a href="ui-media-object.html" class="dropdown-item">Media Object</a>
                                                    <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                    <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                                                    <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                    <a href="ui-popovers.html" class="dropdown-item">Popovers</a>
                                                    <a href="ui-progress.html" class="dropdown-item">Progress</a>
                                                    <a href="ui-ribbons.html" class="dropdown-item">Ribbons</a>
                                                    <a href="ui-spinners.html" class="dropdown-item">Spinners</a>
                                                    <a href="ui-tabs.html" class="dropdown-item">Tabs</a>
                                                    <a href="ui-tooltips.html" class="dropdown-item">Tooltips</a>
                                                    <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extended-ui" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Extended UI <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                                    <a href="extended-dragula.html" class="dropdown-item">Dragula</a>
                                                    <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                                    <a href="extended-ratings.html" class="dropdown-item">Ratings</a>
                                                    <a href="extended-scrollbar.html" class="dropdown-item">Scrollbar</a>
                                                    <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Charts <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-apex-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Apex Charts <div class="arrow-down"></div>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-apex-charts">
                                                            <a href="charts-apex-area.html" class="dropdown-item">Area</a>
                                                            <a href="charts-apex-bar.html" class="dropdown-item">Bar</a>
                                                            <a href="charts-apex-bubble.html" class="dropdown-item">Bubble</a>
                                                            <a href="charts-apex-candlestick.html" class="dropdown-item">Candlestick</a>
                                                            <a href="charts-apex-column.html" class="dropdown-item">Column</a>
                                                            <a href="charts-apex-heatmap.html" class="dropdown-item">Heatmap</a>
                                                            <a href="charts-apex-line.html" class="dropdown-item">Line</a>
                                                            <a href="charts-apex-mixed.html" class="dropdown-item">Mixed</a>
                                                            <a href="charts-apex-pie.html" class="dropdown-item">Pie</a>
                                                            <a href="charts-apex-radar.html" class="dropdown-item">Radar</a>
                                                            <a href="charts-apex-radialbar.html" class="dropdown-item">RadialBar</a>
                                                            <a href="charts-apex-scatter.html" class="dropdown-item">Scatter</a>
                                                            <a href="charts-apex-sparklines.html" class="dropdown-item">Sparklines</a>
                                                        </div>
                                                    </div>
                                                    <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                                    <a href="charts-brite.html" class="dropdown-item">Britecharts</a>
                                                    <a href="charts-sparkline.html" class="dropdown-item">Sparklines</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Forms <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                                    <a href="form-elements.html" class="dropdown-item">Basic Elements</a>
                                                    <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                    <a href="form-validation.html" class="dropdown-item">Validation</a>
                                                    <a href="form-wizard.html" class="dropdown-item">Wizard</a>
                                                    <a href="form-fileuploads.html" class="dropdown-item">File Uploads</a>
                                                    <a href="form-editors.html" class="dropdown-item">Editors</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tables <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                    <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                    <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Icons <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                    <a href="icons-mdi.html" class="dropdown-item">Material Design</a>
                                                    <a href="icons-unicons.html" class="dropdown-item">Unicons</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    Maps <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                    <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                                    <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-window mr-1"></i>Layouts <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                            <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                            <a href="layouts-detached.html" class="dropdown-item">Detached</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-primary border-primary text-white">
                                                        <i class="mdi mdi-calendar-range font-13"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-primary ml-2">
                                            <i class="mdi mdi-autorenew"></i>
                                        </a>
                                    </form>
                                </div>
                                <h4 class="page-title">Analytics</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="card tilebox-one">
                                <div class="card-body">
                                    <i class='uil uil-users-alt float-right'></i>
                                    <h6 class="text-uppercase mt-0">Active Users</h6>
                                    <h2 class="my-2 pt-1" id="active-users-count">121</h2>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                        <span class="text-nowrap">Since last month</span>  
                                    </p>
                                </div> <!-- end card-body-->
                            </div>
                            <!--end card-->

                            <div class="card tilebox-one">
                                <div class="card-body">
                                    <i class='uil uil-window-restore float-right'></i>
                                    <h6 class="text-uppercase mt-0">Views per minute</h6>
                                    <h2 class="my-2 pt-1" id="active-views-count">560</h2>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger mr-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                                        <span class="text-nowrap">Since previous week</span>
                                    </p>
                                </div> <!-- end card-body-->
                            </div>
                            <!--end card-->

                            <div class="card cta-box overflow-hidden">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <h3 class="m-0 font-weight-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></h3>
                                        </div>
                                        <img class="ml-3" src="assets/images/email-campaign.svg" width="92" alt="Generic placeholder image">
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-success alert-dismissible mb-4 fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        Property HY1xx is not receiving hits. Either your site is not receiving any sessions or it is not tagged correctly.
                                    </div>
                                    <ul class="nav float-right d-none d-lg-flex">
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#">7d</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link active" href="#">15d</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#">1m</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#">1y</a>
                                        </li>
                                    </ul>
                                    <h4 class="header-title mb-3">Sessions Overview</h4>

                                    <div id="sessions-overview" class="apex-charts mt-3" data-colors="#44badc"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Sessions by country</h4>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div id="world-map-markers" class="mt-3 mb-3" style="height: 300px">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div id="country-chart" class="apex-charts" data-colors="#f9bc0d"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Views Per Minute</h4>

                                    <div id="views-min" class="apex-charts mt-2" data-colors="#42d29d"></div>

                                    <div class="table-responsive mt-3">
                                        <table class="table table-sm mb-0 font-13">
                                            <thead>
                                                <tr>
                                                    <th>Page</th>
                                                    <th>Views</th>
                                                    <th>Bounce Rate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-analytics</a>
                                                    </td>
                                                    <td>25</td>
                                                    <td>87.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
                                                    </td>
                                                    <td>15</td>
                                                    <td>21.48%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                                                    </td>
                                                    <td>10</td>
                                                    <td>63.59%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-muted">/minton/home</a>
                                                    </td>
                                                    <td>7</td>
                                                    <td>56.12%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Sessions by Browser</h4>

                                    <div id="sessions-browser" class="apex-charts mt-3" data-colors="#3688fc"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Sessions by Operating System</h4>

                                    <div id="sessions-os" class="apex-charts mt-3" data-colors="#fa6767,#3688fc,#44badc,#f9bc0d"></div>

                                    <div class="row text-center mt-2">
                                        <div class="col-6">
                                            <h4 class="font-weight-normal">
                                                <span>6,510</span>
                                            </h4>
                                            <p class="text-muted mb-0">Online System</p>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="font-weight-normal">
                                                <span>2,031</span>
                                            </h4>
                                            <p class="text-muted mb-0">Offline System</p>
                                        </div>
                                    </div>
                                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="" class="p-0 float-right mb-3">Export <i class="mdi mdi-download ml-1"></i></a>
                                    <h4 class="header-title mt-1">Channels</h4>

                                    <div class="table-responsive">
                                        <table class="table table-sm table-centered mb-0 font-14">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Channel</th>
                                                    <th>Visits</th>
                                                    <th style="width: 40%;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Direct</td>
                                                    <td>2,050</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 65%; height: 20px;" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Organic Search</td>
                                                    <td>1,405</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 45%; height: 20px;" aria-valuenow="45"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Refferal</td>
                                                    <td>750</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 30%; height: 20px;" aria-valuenow="30"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Social</td>
                                                    <td>540</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 25%; height: 20px;" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="" class="p-0 float-right mb-3">Export <i class="mdi mdi-download ml-1"></i></a>
                                    <h4 class="header-title mt-1">Social Media Traffic</h4>

                                    <div class="table-responsive">
                                        <table class="table table-sm table-centered mb-0 font-14">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Network</th>
                                                    <th>Visits</th>
                                                    <th style="width: 40%;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Facebook</td>
                                                    <td>2,250</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 65%; height: 20px;" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Instagram</td>
                                                    <td>1,501</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 45%; height: 20px;" aria-valuenow="45"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Twitter</td>
                                                    <td>750</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 30%; height: 20px;" aria-valuenow="30"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>LinkedIn</td>
                                                    <td>540</td>
                                                    <td>
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 25%; height: 20px;" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="" class="p-0 float-right mb-3">Export <i class="mdi mdi-download ml-1"></i></a>
                                    <h4 class="header-title mt-1">Engagement Overview</h4>

                                    <div class="table-responsive">
                                        <table class="table table-sm table-centered mb-0 font-14">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Duration (Secs)</th>
                                                    <th style="width: 30%;">Sessions</th>
                                                    <th style="width: 30%;">Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0-30</td>
                                                    <td>2,250</td>
                                                    <td>4,250</td>
                                                </tr>
                                                <tr>
                                                    <td>31-60</td>
                                                    <td>1,501</td>
                                                    <td>2,050</td>
                                                </tr>
                                                <tr>
                                                    <td>61-120</td>
                                                    <td>750</td>
                                                    <td>1,600</td>
                                                </tr>
                                                <tr>
                                                    <td>121-240</td>
                                                    <td>540</td>
                                                    <td>1,040</td>  
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
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

    <!-- Right Sidebar -->
    <div class="right-bar">

      <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
          <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
      </div>

      <div class="rightbar-content h-100" data-simplebar>

        <div class="p-3">
          <div class="alert alert-warning" role="alert">
            <strong>Customize </strong> the overall color scheme, layout width, etc.
          </div>

          <!-- Settings -->
          <h5 class="mt-3">Color Scheme</h5>
          <hr class="mt-1" />

          <div class="custom-control custom-switch mb-1">
            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check"
              checked />
            <label class="custom-control-label" for="light-mode-check">Light Mode</label>
          </div>

          <div class="custom-control custom-switch mb-1">
            <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
            <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
          </div>

          <!-- Width -->
          <h5 class="mt-4">Width</h5>
          <hr class="mt-1"/>
          <div class="custom-control custom-switch mb-1">
            <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
            <label class="custom-control-label" for="fluid-check">Fluid</label>
          </div>
          <div class="custom-control custom-switch mb-1">
            <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
            <label class="custom-control-label" for="boxed-check">Boxed</label>
          </div>

  

          <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

          <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>
        </div> <!-- end padding-->

      </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard-analytics.js"></script>
    <!-- end demo js-->

</body>
</html>