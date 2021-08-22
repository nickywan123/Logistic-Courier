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
                                    <div class="col-3"><i data-feather="dollar-sign"></i></div>
                                    <div class="col-9 text-end">
                                        <h3 class="mb-0 font-600">RM {{Auth::user()->userInfo->credit}}</h3>
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
                                    <div class="col-3"><i data-feather="truck"></i></div>
                                    <div class="col-9 text-end">
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
                                    <div class="col-3"><i data-feather="list"></i></div>
                                    <div class="col-9 text-end">
                                        <h3 class="mb-0 font-600">{{ Auth::user()->orders->count() }}</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('order.show') }}" class="btn btn-yellow-hub">View Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @hasrole('hub')
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box bg-light">
                            <div class="box-header">
                                <h5 class="box-title">Announcements Center</h5>
                                <div class="box-controls pull-right">
                                    <a class="btn btn-sm btn-outline-info d-none d-sm-block" href="{{ route('hub.announcements.index') }}">Show More</a>
                                </div>
                            </div>
                            <div class="box-body announcement">
                                @if(count($announcements) > 0)
                                    @foreach($announcements as $key => $announcement)
                                        <div>
                                            <div class="row d-flex justify-content-between align-items-center align-items-sm-start">
                                                <div class="col-md-9 col-6">
                                                    <h5 class="my-5">{{ $announcement->title }}</h5>
                                                </div>
                                                <div class="col-md-3 col-6 text-end">
                                                    <p>{{ date('D d/m/Y', strtotime($announcement->created_at)) }}</p>
                                                </div>
                                            </div>
                                            <div class="mb-15 pb-10 border-bottom">
                                                {!! $announcement->description !!}
                                                @isset($announcement->attachment)
                                                    <a class="mt-15" target="_blank" href="{{ asset('assets/images/upload/'.$announcement->attachment) }}">See attachment</a>
                                                @endisset
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <h3 class="text-center py-30 mb-0">No announcement available</h3>
                                        </div>
                                    </div>
                                @endif
                                <div class="d-grid gap-2">
                                    <a class="btn btn-sm btn-outline-info d-block d-sm-none" href="{{ route('hub.announcements.index') }}">Show More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endhasrole
                </div>

            </div>
            <!-- box end -->

        </div>
    </div>

@endsection
