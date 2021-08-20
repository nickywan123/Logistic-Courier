<aside class="main-sidebar">
    <div class="brand-container">
        <a href="{{ route('admin.users.index') }}" class="brand">
            <img src="{{ asset('assets/images/dashboard-logo.png') }}" alt="" class="brand-img mx-auto">
            <div class="brand-txt">Admin Dashboard</div>
        </a>
        <a href="{{ route('admin.users.index') }}" class="brand-collapse">
            <img src="{{ asset('assets/images/fuiyohhub-mascot.png') }}" alt="" class="img-fluid">
        </a>
    </div>
    <div class="side-container">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.users.index') }}">
                    <span class="icon"><i data-feather="users"></i></span>
                    <span class="text">List of Users</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.rates.index')}}">
                    <span class="icon"><i data-feather="refresh-ccw"></i></span>
                    <span class="text">Check rates</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.hubs.index')}}">
                    <span class="icon"><i data-feather="map-pin"></i></span>
                    <span class="text">List of Hubs</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.index.orders')}}">
                    <span class="icon"><i data-feather="book-open"></i></span>
                    <span class="text">All Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('faq.index') }}">
                    <span class="icon"><i data-feather="help-circle"></i></span>
                    <span class="text">FAQ</span>
                </a>
            </li>
            <li>
                <a href="{{ route('announcements.index') }}">
                    <span class="icon"><i class="material-icons-outlined">campaign</i></span>
                    <span class="text">Announcement</span>
                </a>
            </li>

            <li class="mt-40">
                <a href="{{route('dashboard.index')}}">
                    <span class="icon"><i data-feather="arrow-left-circle"></i></span>
                    <span class="text">Fuiyoh Hub Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="icon"><i class="cus-icon icon-signout-light"></i></span>
                    <span class="text">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>

            <li class="mt-40">
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Powered by <br> KOPENAS SDN BHD</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
