<div class="page-main-header">
    <div class="main-header-left" semilight-bg-color="bg-default-light-colo">
        <div class="logo-wrapper">
            <a href="{{ route('member') }}">
                {{-- <img src="/logo-full.png" class="image-dark" alt="">
                <img src="/logo-full.png" class="image-light" alt=""> --}}
                <h3 class="bn">পিরামিড বন্ধন</h3>
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
                        <img class="align-self-center pull-right me-2" src="/dashboard/assets/browser.png"
                            alt="header-browser">
                    </a>
                </li>

                <li class="onhover-dropdown">
                    <div class="d-flex align-items-center">
                        <img class="align-self-center pull-right flex-shrink-0 me-2" src="/dashboard/assets/user.png"
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
                            <a href="{{ route('settings') }}">
                                <i class="icon-user"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); confirm('logout') && document.getElementById('logout-form').submit();">
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
