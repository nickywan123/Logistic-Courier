<aside class="main-sidebar">
    <div class="brand-container">
        <a href="{{ route('dashboard.index') }}" class="brand">
            <img src="{{ asset('assets/images/dashboard-logo.png') }}" alt="" class="brand-img mx-auto">
            <div class="brand-txt">Dashboard</div>
        </a>
        <a href="{{ route('dashboard.index') }}" class="brand-collapse">
            <img src="{{ asset('assets/images/fuiyohhub-mascot.png') }}" alt="" class="img-fluid">
        </a>
    </div>
    <div class="side-container">
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="btn btn-block btn-yellow-hub px-20 d-flex justify-content-center rounded-pill" data-bs-toggle="modal" data-bs-target="#createOrder">
                    <i data-feather="plus"></i>
                    <span class="text">Create Order</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.show') }}">
                    <span class="icon"><i class="cus-icon icon-clock-light"></i></span>
                    <span class="text">Order History</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="cus-icon icon-user-light"></i></span>
                    <span class="text">Fuiyoh Crew</span>
                </a>
            </li>
            <li>
                <a href="{{ route('topup.index') }}">
                    <span class="icon"><i class="cus-icon icon-wallet-light"></i></span>
                    <span class="text">Topup Credit</span>
                </a>
            </li>
            <li>
                <a href="{{ route('finance.index') }}">
                    <span class="icon"><i class="cus-icon icon-finance-light"></i></span>
                    <span class="text">Finance Report</span>
                </a>
            </li>

            {{--<li>--}}
            {{--    <a href="{{ route('easyparcel-makingOrder') }}">--}}
            {{--        <span class="icon"><i class="cus-icon icon-finance-light"></i></span>--}}
            {{--        <span class="text">EasyParcel API</span>--}}
            {{--    </a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--    <a href="{{ route('easyparcel-rateChecking') }}">--}}
            {{--        <span class="icon"><i class="cus-icon icon-finance-light"></i></span>--}}
            {{--        <span class="text">Rate Checking API</span>--}}
            {{--    </a>--}}
            {{--</li>--}}

            <li class="mt-50">
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
