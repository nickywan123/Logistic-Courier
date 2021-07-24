<div class="sidenav">
    <a href="{{route('dashboard.index')}}">
     <img style="width: 100px; height:100px;"  src="{{asset('/images/logo/fuiyoh_hub.png')}}" alt="fuiyoh_logo">   
    </a>
    <p class="text-white" style="font-size:20px;">ADMIN DASHBOARD</p>
    {{-- <a href="#" class="mt-4"><i class="fa fa-plus mr-2"></i>CREATE ORDER</a> --}}
    {{-- <button type="button" class="btn create-order-btn pl-1" data-toggle="modal" data-target="#createOrder">
     <i class="fa fa-plus mr-1"></i>TEST 123    
    </button> --}}

    <a href="{{route('admin.index')}}"><i class="fa fa-user-circle-o mr-2"></i>List of Users</a>
    <a href="{{route('admin.index.rates')}}"><i class="fa fa-money mr-2"></i>Check rates</a>
    <a href="{{route('dashboard.index')}}"><i class="fa fa-home mr-2"></i>Fuiyoh Hub Dashboard</a>
    <a class="mt-4" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out mr-2"></i>
        {{ __('Logout') }}
    </a>
    <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

 <!-- Modal -->
{{-- <div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-height">
        <div class="modal-header" style="background-color: 	#D0D0D0">
          <h5 class="modal-title">Choose an order type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a class="modal-button" href="{{route('order.index')}}" style="background-color: #FFF0F5; text-decoration:none;">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            Create a Regular Order</a>
          <a class="modal-button mt-3" href="#" style="background-color: #E6E6FA; text-decoration:none;">
            <i class="fa fa-undo" aria-hidden="true"></i>
            Create a Return Order</a>
        </div>
      </div>
    </div>
</div> --}}