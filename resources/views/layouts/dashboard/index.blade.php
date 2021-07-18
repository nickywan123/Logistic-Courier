@extends('layouts.dashboard.app')

@section('content')
     
<div class="row">
  <div class="col-12 col-md-10 offset-md-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active text-dark" aria-current="page">Dashboard</li>
        </ol>
    </nav>
  </div> 
</div>
<div class="row">
    <div class="col-12 col-md-10 offset-md-1">
        <div class="alert alert-warning border-dark alert-dismissible fade show" role="alert">
            <strong class="fs-18">Notice:</strong>
            <strong>Pick up and deliveries will remain as usual</strong> during the FMCO period <a href="http://covid-19.moh.gov.my/faqsop/sop-perintah-kawalan-pergerakan-diperketatkan-pkpd-emco" target="_blank" class="border_bottom_dotted"><strong>except for areas under EMCO</strong></a>. Kindly ensure the <strong>address booked is available for pick up/delivery. Facemask is prohibited for international delivery</strong> for all couriers at the moment.
            Kindly expect <strong>slight delay in pick up and delivery</strong> due to the restricted operation hour and high parcel volume during this pandemic period. Stay safe and stay home.
        </div>
    </div>
</div>

<div class="row mt-3" style="border-bottom: 2px solid grey">
    <div class="col-12 col-md-10">
     <h5 class="text-uppercase text-center">Summary</h5>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="card border-radius-card shadow" >
            <div class="card-body" style="height: 150px;">
                <div class="row">
                 <div class="col-6 col-md-6">
                 <h4 class="card-title " style="font-weight:bold; font-size:13pt;">Credit Balance</h4>
                 </div>
                 <div class="col-6 col-md-6">
                  <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                 </div>
                </div>
             
               <div class="row">
                <div class="col-1 col-md-1 ml-4">
                    <i class="fa fa-usd fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">   
                 <p class="card-title " style="font-weight:bold; font-size:20pt;">RM {{$user->userInfo->credit}} </p>
                 <a type="button" class="btn btn-primary" href="{{route('topup.index')}}">Top Up Now</a>
                </div>
               </div> 
            </div>
          </div>  
    </div>
    <div class="col-md-4">
        <div class="card border-radius-card shadow" >
            <div class="card-body" style="height: 150px;">
                <div class="row">
                 <div class="col-6 col-md-6">
                 <h4 class="card-title " style="font-weight:bold; font-size:13pt;">Total Delivered</h4>
                 </div>
                 <div class="col-6 col-md-6">
                  <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                 </div>
                </div>
             
               <div class="row">
                <div class="col-1 col-md-1 ml-4">
                    <i class="fa fa-truck fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">   
                 <p class="card-title " style="font-weight:bold; font-size:20pt;">{{$total_delivered}}</p>
                 <a type="button" class="btn btn-primary" href="{{route('order.index')}}">Create a new order</a>
                </div>
               </div> 
            </div>
        </div>  
    </div>
    <div class="col-md-4">
        <div class="card border-radius-card shadow" >
            <div class="card-body" style="height: 150px;">
                <div class="row">
                 <div class="col-6 col-md-6">
                 <h4 class="card-title " style="font-weight:bold; font-size:13pt;">Total Orders</h4>
                 </div>
                 <div class="col-6 col-md-6">
                  <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                 </div>
                </div>
             
               <div class="row">
                <div class="col-1 col-md-1 ml-4">
                    <i class="fa fa-list fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">   
                 <p class="card-title " style="font-weight:bold; font-size:20pt;">{{$user->orders->count()}}</p>
                 <a type="button" class="btn btn-primary" href="{{route('order.show')}}">View Orders</a>
                </div>
               </div> 
            </div>
        </div>  
    </div>  
</div>


<div class="row mt-3">
    <div class="col-md-4">
        <div class="card border-radius-card shadow" >
            <div class="card-body" style="height: 150px;">
                <div class="row">
                 <div class="col-6 col-md-6">
                 <h4 class="card-title " style="font-weight:bold; font-size:13pt;">Total Referral</h4>
                 </div>
                 <div class="col-6 col-md-6">
                  <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                 </div>
                </div>
             
               <div class="row">
                <div class="col-1 col-md-1 ml-4">
                    <i class="fa fa-user-plus fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">   
                 <p class="card-title " style="font-weight:bold; font-size:20pt;">0</p>
                 <a type="button" class="btn btn-primary" href="{{route('topup.index')}}">Refer a friend</a>
                </div>
               </div> 
            </div>
          </div>  
    </div>  
</div>



<style>
.border-radius-card{
     border-radius: 15px;
}
</style>

@endsection