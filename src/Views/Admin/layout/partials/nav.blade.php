<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="img/logo.png" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a href="{{asset('admin/')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt>
                </div>
                <span>DashBoard </span>
            </a>
        </li>
        <li class>
            <a href="{{asset('admin/directory')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt>
                </div>
                <span>Quản Lý Danh Mục</span>
            </a>
        </li>
        <li class="mm-active">
            <a  href="{{asset('admin/content')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/dashboard.svg" alt>
                </div>
                <span>Quản Lý Bài Viết</span>
            </a>
        </li>
        <li class>
            <a href="{{asset('admin/users')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt>
                </div>
                <span>Quản Lý User</span>
            </a>
        </li>


    </ul>
</nav>