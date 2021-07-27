<header>
   <!-- Mobile Header -->
   <div class="wsmobileheader clearfix ">
      <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
      <span class="smllogo"><img src="{{ asset('assets/images/dashboard-logo.png') }}" width="80" alt="" /></span>
      <div class="wssearch clearfix">
          <i class="wsopenmenuic" data-feather="search"></i>
          <i class="wsclosemenuic" data-feather="x"></i>
          <div class="wssearchform clearfix">
              <form>
                  <input type="text" placeholder="Search Here">
              </form>
          </div>
      </div>
   </div>
    <!-- Mobile Header -->
    <div class="wsmainfull clearfix bg-dark-fuiyoh">
        <div class="container">
            <div class="wsmainwp clearfix">
                <div class="desktoplogo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/dashboard-logo.png') }}" alt=""></a></div>
                <div class="wssearch wssearchdesktop clearfix">
                    <i class="wsopenmenuic" data-feather="search"></i>
                    <i class="wsclosemenuic" data-feather="x"></i>
                    <div class="wssearchform clearfix">
                        <form>
                            <input type="text" placeholder="Search Here">
                        </form>
                    </div>
                </div>
                <!--Main Menu HTML Code-->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        @guest
                        <li aria-haspopup="true"><a href="#">Home</a></li>
                        <li aria-haspopup="true"><a href="#">Services</a></li>
                        <li aria-haspopup="true"><a href="#">FAQs</a></li>
                        <li aria-haspopup="true"><a href="#">Outlet</a></li>
                        <li aria-haspopup="true">
                            <a href="{{ route('login') }}" class="wssignlinktop">
                                <i data-feather="user"></i>
                            </a>
                        </li>
                        <li aria-haspopup="true">
                            <a href="tel:1234567890" class="wsheadphoneno">
                                <i data-feather="phone"></i>
                            </a>
                        </li>
                        @else
                        <li aria-haspopup="true">
                            <a href="#">{{ Auth::user()->name }}</a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true">
                                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </nav>
                <!--Menu HTML Code-->
            </div>
        </div>
    </div>
</header>
