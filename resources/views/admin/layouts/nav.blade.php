<div class="page-sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
        <div>
            <img class="img-50 rounded-circle" src="/{{auth()->user()->photo}}" alt="#">
        </div>
        <h6 class="mt-3 f-12">
            {{auth()->user()->name}}
        </h6>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('admin') }}"
                class="sidebar-header">
                <i class="icon-desktop"></i><span> Dashboard </span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_notifications') }}"
                class="sidebar-header">
                <i class="icon-id-badge"></i><span> Members</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_notifications') }}"
                class="sidebar-header">
                <i class="icon-bell"></i><span> Notifications</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_new_payment') }}" class="sidebar-header">
                <i class="icon-money"></i>
                <span>
                    New Payment
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_payments') }}"
                class="sidebar-header">
                <i class="icon-money"></i><span> Payment History</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_payments') }}"
                class="sidebar-header">
                <i class="icon-money"></i><span> Due List</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_payments') }}"
                class="sidebar-header">
                <i class="icon-envelope"></i><span> Feedbacks</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin_settings') }}"
                class="sidebar-header">
                <i class="icon-settings"></i><span> Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();return confirm('logout') && document.getElementById('logout-form').submit();"
                class="sidebar-header">
                <i class="icon-lock"></i><span> Logout</span>
            </a>
        </li>
        {{-- <li>
            <div class="sidebar-title">Layout</div>
            <a href="javascript:void(0)" class="sidebar-header">
                <i class="icon-palette"></i>
                <span>Color Version</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="http://admin.pixelstrap.com/universal/default/layout-light.html"><i
                            class="fa fa-angle-right"></i>Layout Light</a></li>
                <li><a href="http://admin.pixelstrap.com/universal/default/layout-dark.html"><i
                            class="fa fa-angle-right"></i>Layout Dark</a></li>
            </ul>
        </li> --}}
    </ul>
</div>
