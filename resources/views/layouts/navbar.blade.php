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
                        <li aria-haspopup="true"><a href="{{ url('/') }}">Home</a></li>
                        @if(Route::current()->getName() == '')
                        <li aria-haspopup="true"><a class="link-nav" href="#services">Services</a></li>
                        <li aria-haspopup="true"><a class="link-nav" href="#faq">FAQs</a></li>
                        @else
                        <li aria-haspopup="true"><a href="{{ url('/') }}#services">Services</a></li>
                        <li aria-haspopup="true"><a href="{{ url('/') }}#faq">FAQs</a></li>
                        @endif
                        {{--<li aria-haspopup="true"><a href="#">Outlet</a></li>--}}
                        <li aria-haspopup="true">
                            <a href="{{ route('login') }}" class="wssignlinktop">
                                <i data-feather="user"></i>
                            </a>
                        </li>
                        <li aria-haspopup="true">
                            <a href="tel:+03-5032 8511" class="wsheadphoneno">
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

{{--@if (Route::has('login'))--}}
{{--    <div class="top-right links">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}">Login</a>--}}

{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}
