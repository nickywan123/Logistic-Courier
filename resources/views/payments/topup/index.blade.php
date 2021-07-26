@extends('layouts.dashboard.app')

@section('page_title', 'Top Up Credit')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Top Up Credit</h2>

                <div class="card bg-yellow-fuiyoh mb-3">
                    <div class="card-body p-20">
                        <h5 class="card-titl font-700 mb-3">1. Select top up package</h5>

                        <div class="row">
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F10
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F50
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F100
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F300
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F500
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F1000
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F2000
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F5000
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F10000
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="card-topup mb-3">
                                    <input class="card-input-element" type="radio" name="topup" value="" />
                                    <div class="card-input">
                                        <div class="card-input-body">
                                            F20000
                                        </div>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card bg-yellow-fuiyoh mb-3">
                    <div class="card-body p-20">
                        <h5 class="card-titl font-700 mb-3">2. Trigger auto top up when my credit balance falls below</h5>

                        <form action="{{route('toyyibpay-create')}}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="AutoTopup">RM </span>
                                    <input type="text" class="form-control px-20" placeholder="Enter a threshold amount" aria-label="AutoTopup" aria-describedby="AutoTopup" name="amount">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Top Up</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-yellow-fuiyoh mb-3">
                    <div class="card-body p-20">
                        <h5 class="card-titl font-700 mb-3">3. Top up using</h5>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="card">
                                        <i data-feather="credit-card"></i>
                                    </span>
                                    <input type="text" class="form-control px-20" placeholder="Add new card" aria-label="card" aria-describedby="card">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-yellow-fuiyoh">
                    <div class="card-body p-20">
                        <h5 class="card-titl font-700 mb-3">Term & Conditions</h5>

                        <div class="py-10 bg-white">
                            <ol class="ps-30 mb-0">
                                <li>You’ll be notified via email / notification once the autopay top up has been triggered.</li>
                                <li>For more information, please contact <a href="#">support@fuiyoh.my</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
