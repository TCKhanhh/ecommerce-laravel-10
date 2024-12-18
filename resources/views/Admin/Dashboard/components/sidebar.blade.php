<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="Avatar" class="img-circle" src="img/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong
                                    class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">Quản trị viên <b class="caret"></b></span>
                        </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Hồ sơ</a></li>
                        <li><a href="contacts.html">Liên hệ</a></li>
                        <li><a href="mailbox.html">Tin nhắn</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    Admin
                </div>
            </li>
            <li class="active">
                <a href="{{ route('dashboard.index') }}"><i class="fa fa-th-large"></i> <span
                        class="nav-label">Dashboard</span>
                </a>

            </li>
            {{-- <li class="active"> --}}
            <li class="active">
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">QL Thành Viên</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">QL Nhóm Thành Viên</a></li>
                    <li><a href="{{ route('user.index') }}">QL Thành Viên</a></li>

                </ul>
            </li>



        </ul>

    </div>
</nav>
