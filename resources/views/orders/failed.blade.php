@extends('layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">

                <div class="card text-white bg-danger py-30">
                    <div class="card-body text-center">
                        <h4 class="font-700 mb-20">Oops, looks like something went wrong. Please try again.</h4>
                        <h4 class="font-700 mb-20">Failed to create an order.</h4>
                        <p class="text-center">
                            <a class="btn btn-yellow-hub px-20 rounded-pill" href="{{ route('order.index') }}">Try Again</a>
                        </p>
                        <p class="mb-0">Error: {{ $errorMessage }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
