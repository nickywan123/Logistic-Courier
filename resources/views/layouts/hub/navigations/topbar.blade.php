<header class="main-header py-3">
    <div class="container-fluid d-flex flex-wrap">
        <div class="text-start">
            <button onclick="FuiyohHub.minimize($(this))" type="button" class="btn btn-light"><i data-feather="align-left"></i></button>
        </div>
        {{-- Search Bar --}}
        <form action="" class="col-6 col-lg-5 col-sm-5 col-lg-auto ms-3">
            @csrf
            <div class="input-group">
                <button class="btn btn-light" type="submit"><i data-feather="search"></i></button>
                <input type="text" class="form-control" placeholder="Enter your tracking ID,Name or Phone Number" aria-label="" aria-describedby="button-addon1">
            </div>
        </form>

        <div class="text-end ms-auto align-content-center align-items-center d-xl-flex d-lg-flex d-sm-flex d-none">
            <p class="mb-0 me-4">Credit Balance: RM {{Auth::user()->userInfo->credit}}</p>
            <p class="mb-0 me-4">{{Auth::user()->name}}</p>
        </div>
        <div class="dropdown text-end ms-xl-0 ms-lg-0 ms-sm-0 ms-auto">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle py-1" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/images/blank-avatar.jpg') }}" alt="{{ Auth::user()->name }}" class="rounded-circle" width="32" height="32">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item d-xl-none d-sm-none" href="#">Credit Balance: {{Auth::user()->userInfo->credit}}</a></li>
                <li><hr class="dropdown-divider d-xl-none d-sm-none"></li>
                <li>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
