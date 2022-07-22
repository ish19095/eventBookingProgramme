
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Calendar | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Calendar</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg font-16 btn-primary btn-block  ">
                                                <i class="mdi mdi-plus-circle-outline"></i> Create New Event
                                            </a>
                                            <div id="external-events" class="m-t-20">
                                                <br>
                                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                <div class="external-event bg-success" data-class="bg-success">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>New Theme Release
                                                </div>
                                                <div class="external-event bg-info" data-class="bg-info">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>My Event
                                                </div>
                                                <div class="external-event bg-warning" data-class="bg-warning">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Meet manager
                                                </div>
                                                <div class="external-event bg-danger" data-class="bg-danger">
                                                    <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class="custom-control custom-checkbox mt-3">
                                                <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                            </div>

                                            <div class="mt-5 d-none d-xl-block">
                                                <h5 class="text-center">How It Works ?</h5>

                                                <ul class="pl-3">
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->

                                    </div>  <!-- end row -->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Add New Event</h4>
                                        </div>
                                        <div class="modal-body pt-3 pr-4 pl-4">
                                        </div>
                                        <div class="text-right pb-4 pr-4">
                                            <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success save-event  ">Create event</button>
                                            <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Delete</button>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->

                            <!-- Modal Add Category -->
                            <div class="modal fade" id="add-category" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0 d-block">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Add a category</h4>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form>
                                                <div class="form-group">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                        <option value="primary">Primary</option>
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="warning">Warning</option>
                                                        <option value="dark">Dark</option>
                                                    </select>
                                                </div>

                                            </form>

                                            <div class="text-right">
                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary ml-1   save-category" data-dismiss="modal">Save</button>
                                            </div>

                                        </div> <!-- end modal-body-->
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->
                        </div>
                        <!-- end col-12 -->
                    </div> <!-- end row -->

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
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/fullcalendar.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.calendar.js"></script>
    <!-- end demo js-->

</body>
</html>