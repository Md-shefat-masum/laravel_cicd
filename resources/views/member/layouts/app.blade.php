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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">
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
    <script src="/dashboard/chart/jquery-3.2.1.min.js"></script>
</head>

<body main-theme-layout="main-theme-layout-4">

    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <h4><span>&#x263A;</span></h4>
        </div>
    </div>

    <!--page-wrapper Start-->
    <div class="page-wrapper">

        <!--Page Header Start-->
        @include('member.layouts.header')
        <!--Page Header Ends-->

        <!--Page Body Start-->
        <div class="page-body-wrapper">
            <!--Page Sidebar Start-->
            @include('member.layouts.nav')
            <!--Page Sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>
                                    {{ $page_header ?? ""}}
                                    {{-- <small>Universal Admin panel</small> --}}
                                </h3>
                            </div>
                            <div class="col-lg-6">
                                {{-- <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">Sample Page</li>
                                </ol> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends -->

                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- Container-fluid starts -->
            </div>
        </div>
        <!--Page Body Ends-->

    </div>
    <!--page-wrapper Ends-->

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <script>
        var p = location.origin + location.pathname;
        var el = document.querySelector(`.sidebar-menu a[href="${p}"]`);
        if(el){
            el.classList.add('active');
        }
    </script>
    <!-- Bootstrap js-->
    <script src="/dashboard/assets/bootstrap.bundle.min.js"></script>
    <!-- Sidebar jquery-->
    <script src="/dashboard/assets/sidebar-menu.js"></script>
    <!-- Theme js-->
    <script src="/dashboard/assets/script.js"></script>

</body>

</html>
