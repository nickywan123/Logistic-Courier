@extends('layouts.dashboard.app')

@section('page_title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- box start -->
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">

                <h2 class="title-section">Dashboard</h2>

                <div class="alert alert-warning" role="alert">
                    <p class="mb-0"><span class="font-700">Notice:</span> <span class="font-700">Pick up and deliveries will remain as usual</span> during the FMCO period <a href="http://covid-19.moh.gov.my/faqsop/sop-perintah-kawalan-pergerakan-diperketatkan-pkpd-emco" target="_blank" class="font-700">except for areas under EMCO</a>. Kindly ensure the <span class="font-700">address booked is available for pick up/delivery. Facemask is prohibited for international delivery</span> for all couriers at the moment. Kindly expect <span class="font-700">slight delay in pick up and delivery</span> due to the restricted operation hour and high parcel volume during this pandemic period. Stay safe and stay home.</p>
                </div>

                <hr class="my-30">

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box bg-light">
                            <div class="box-header">
                                <h5 class="box-title">Credit Balance</h5>
                                <div class="box-controls pull-right">
                                    <button class="btn btn-sm btn-outline-info" href="#">Show More</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-6"><i data-feather="dollar-sign"></i></div>
                                    <div class="col-6 text-end">
                                        <h3 class="mb-0 font-600">RM {{$user->userInfo->credit}}</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('topup.index') }}" class="btn btn-yellow-hub">Top Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box bg-light">
                            <div class="box-header">
                                <h5 class="box-title">Total Delivered</h5>
                                <div class="box-controls pull-right">
                                    <button class="btn btn-sm btn-outline-info" href="#">Show More</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-6"><i data-feather="truck"></i></div>
                                    <div class="col-6 text-end">
                                        <h3 class="mb-0 font-600">{{ $total_delivered }}</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('order.index') }}" class="btn btn-yellow-hub">Create a new order</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box bg-light">
                            <div class="box-header">
                                <h5 class="box-title">Total Orders</h5>
                                <div class="box-controls pull-right">
                                    <button class="btn btn-sm btn-outline-info" href="#">Show More</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-6"><i data-feather="list"></i></div>
                                    <div class="col-6 text-end">
                                        <h3 class="mb-0 font-600">{{ $user->orders->count() }}</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('order.show') }}" class="btn btn-yellow-hub">View Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box bg-light">
                            <div class="box-header">
                                <h5 class="box-title">Total Referral</h5>
                                <div class="box-controls pull-right">
                                    <button class="btn btn-sm btn-outline-info" href="#">Show More</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-6"><i data-feather="user-plus"></i></div>
                                    <div class="col-6 text-end">
                                        <h3 class="mb-0 font-600">0</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('topup.index') }}" class="btn btn-yellow-hub">Refer a friend</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- box end -->

        </div>
    </div>

@endsection
