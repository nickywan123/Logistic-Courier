<nav class="navbar navbar-expand-md navbar-light navbar-bg-color">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                   
            </ul>
            <!-------Search Bar ----->
            <form class="search-form" method="POST" action="#" style="width:400px;">
                @csrf
                <input type="text" placeholder="Enter your tracking ID,Name or Phone Number" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form> 
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-5"> 
                <li class="nav-item nav-link mt-1 text-dark" style="font-weight: 700">
                    Credit Balance: RM{{Auth::user()->userInfo->credit}}
                </li>
                <li class="nav-item nav-link mt-1 text-dark">
                    {{Auth::user()->name}}
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img class="img-avatar" src="{{asset('images/avatars/default-avatar.jpg')}}" alt="{{ Auth::user()->name }}">
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
            </ul>
        </div>
    </div>
</nav>


