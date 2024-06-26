<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">
    <title>Admin Panel</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/fontawesome.css">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/icofont.css">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/themify.css">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/flag-icon.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/bootstrap.css">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/responsive.css">
</head>

<body main-theme-layout="main-theme-layout-4">

    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <h4>Have a great day at work today <span>&#x263A;</span></h4>
        </div>
    </div>

    <!--page-wrapper Start-->
    <div class="page-wrapper">

        <!--Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-left" semilight-bg-color="bg-default-light-colo">
                <div class="logo-wrapper">
                    <a href="http://admin.pixelstrap.com/universal/default/index.html">
                        <img src="./assets/logo-light.png" class="image-dark" alt="">
                        <img src="./assets/logo-light-dark-layout.png" class="image-light" alt="">
                    </a>
                </div>
            </div>
            <div class="main-header-right row" header-bg-color="bg-default-light-colo">
                <div class="mobile-sidebar col-1 ps-0">
                    <div class="text-start switch-sm">
                        <label class="switch">
                            <input type="checkbox" id="sidebar-toggle" checked="">
                            <span class="switch-state"></span>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <!-- <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="search" class="form-control-plaintext" placeholder="Search..">
                                    <span class="d-sm-none mobile-search">
                                    </span>
                                </div>
                            </form>
                        </li> -->
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                                <img class="align-self-center pull-right me-2" src="./assets/browser.png"
                                    alt="header-browser">
                            </a>
                        </li>

                        <li class="onhover-dropdown">
                            <div class="d-flex align-items-center">
                                <img class="align-self-center pull-right flex-shrink-0 me-2" src="./assets/user.png"
                                    alt="header-user">
                                <div>
                                    <h6 class="m-0 txt-dark f-16">
                                        My Account
                                        <i class="fa fa-angle-down pull-right ms-2"></i>
                                    </h6>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle">
                        <i class="icon-more"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header Ends-->

        <!--Page Body Start-->
        <div class="page-body-wrapper">
            <!--Page Sidebar Start-->
            <div class="page-sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div>
                        <img class="img-50 rounded-circle" src="./assets/1.jpg" alt="#">
                    </div>
                    <h6 class="mt-3 f-12">Johan Deo</h6>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <div class="sidebar-title">General</div>
                        <a href="javascript:void(0)" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Dashboard</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Default
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://admin.pixelstrap.com/universal/starter-kit/layout-light.html"
                            class="sidebar-header">
                            <i class="icon-anchor"></i><span> Starter kit</span>
                        </a>
                    </li>

                    <li>
                        <div class="sidebar-title">Layout</div>
                        <a href="javascript:void(0)" class="sidebar-header">
                            <i class="icon-palette"></i> <span>Color Version</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="http://admin.pixelstrap.com/universal/default/layout-light.html"><i
                                        class="fa fa-angle-right"></i>Layout Light</a></li>
                            <li><a href="http://admin.pixelstrap.com/universal/default/layout-dark.html"><i
                                        class="fa fa-angle-right"></i>Layout Dark</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="http://admin.pixelstrap.com/universal/default/maintenance.html" class="sidebar-header">
                            <i class="icon-settings"></i><span> Maintenance</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!--Page Sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Sample Page
                                    <small>Universal Admin panel</small>
                                </h3>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">Sample Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends -->

                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sample Card</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-body">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts -->
            </div>
        </div>
        <!--Page Body Ends-->

    </div>
    <!--page-wrapper Ends-->

    <!-- latest jquery-->
    <script src="/dashboard/assets/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/dashboard/assets/bootstrap.bundle.min.js"></script>
    <!-- Sidebar jquery-->
    <script src="/dashboard/assets/sidebar-menu.js"></script>
    <!-- Theme js-->
    <script src="/dashboard/assets/script.js"></script>

</body>

</html>
