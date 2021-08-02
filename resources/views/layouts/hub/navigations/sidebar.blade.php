<aside class="main-sidebar">
    <div class="brand-container">
        <a href="{{ route('hub.index') }}" class="brand">
            <img src="{{ asset('assets/images/dashboard-logo.png') }}" alt="" class="brand-img mx-auto">
            <div class="brand-txt">{{Auth::user()->name}}</div>
        </a>
        <a href="{{ route('hub.index') }}" class="brand-collapse">
            <img src="{{ asset('assets/images/fuiyohhub-mascot.png') }}" alt="" class="img-fluid">
        </a>
    </div>
    <div class="side-container">
        <ul class="sidebar-menu">
            <li>
                <a href="{{route('hub.orders.index')}}">
                    <span class="icon"><i data-feather="users"></i></span>
                    <span class="text">Manage Orders</span>
                </a>
            </li>
            <li class="mt-50">
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

            <li class="mt-50">
                <a href="">
                    <span class="icon"></span>
                    <span class="text">Powered by <br> KOPENAS SDN BHD</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
