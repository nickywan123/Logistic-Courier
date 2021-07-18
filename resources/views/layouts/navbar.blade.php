<nav class="navbar navbar-expand-md navbar-light bg-color-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/login') }}">
            <p style="font-size:18px; color:#blue; font-weight:bold; font-style:italic;">
             <img style="width: 50px; height:50px;"  src="{{asset('/images/logo/fuiyoh_hub.png')}}" alt="fuiyoh_logo">   
            </p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href=#>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href=#>Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href=#>FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href=#>Outlet</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                    <li class="nav-item ml-5">
                        <a href="#" class="nav-link"><i class="fa fa-user-o" style="color:#efcc37 "></i></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="#" class="nav-link"><i class="fa fa fa-search" style="color: white"></i></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="#" class="nav-link"><i class="fa fa-phone" style="color:white"></i></a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


