@extends('layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">

                <div class="card text-white bg-success py-30">
                    <div class="card-body text-center">
                        <h4 class="font-700 mb-10">Thank you! Payment Success!</h4>
                        <p class="mb-0">Your transaction ID is: {{ $transaction_id }}.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
