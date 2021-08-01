@extends('layouts.dashboard.app')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Regular Order</h2>
                <p class="subtitle-section">Please select one courier:</p>

                <form method="POST" action="{{route('create.quotation')}}">
                    @csrf
                    <div class="row">

                        <input type="hidden" name="postcode_delivery" value="{{ $postcode_delivery }}">
                        <input type="hidden" name="parcel_weight" value="{{ $parcel_weight }}">

                        @foreach($rates as $rate)
                            <div class="col-3 col-md-2">
                                <label class="card-courier mb-3 @error('courier') is-invalid @enderror">
                                    <input class="card-courier-element" type="radio" name="courier" value="{{ $rate->id }}" required>
                                    <div class="carrier-card-input">
                                        <div class="carrier-card-img">
                                            <img src="{{ asset($rate->courier->image->path .''.$rate->courier->image->filename) }}" alt="{{ $rate->courier->image->filename }}" class="img-fluid">
                                        </div>
                                        <div class="carrier-card-txt font-700">
                                            <span>RM {{$rate->cost}}</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endforeach

                        @error('courier')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-yellow-hub rounded-pill px-30" value="Book Delivery">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
