@extends('layouts.dashboard.app')

@section('page_title', 'Regular Order')

@section('content')

    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Regular Order</h2>
                <p class="subtitle-section">Please fill in the parcel details:</p>

                <form action="{{ route('order.quotation') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <select class="form-select rounded-pill px-20 @error('parcel_weight') is-invalid @enderror" name="parcel_weight" id="parcel_weight" required>
                            <option selected>Weight (kg)</option>
                            @foreach($weights as $weight)
                                <option value="{{$weight->weight}}">{{$weight->weight}}</option>
                            @endforeach
                        </select>
                        @error('parcel_weight')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select class="form-select rounded-pill px-20 @error('parcel_size') is-invalid @enderror" name="parcel_size" id="parcel_size" required>
                            <option selected="selected">Parcel Size</option>
                            <option>Box Size</option>
                            <option>Rectangular Size</option>
                        </select>
                        @error('parcel_size')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('postcode_pickup') is-invalid @enderror" placeholder="Postcode Pickup" name="postcode_pickup" id="postcode_pickup" value="{{ old('postcode_pickup') }}" required>
                            @error('postcode_pickup')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('postcode_delivery') is-invalid @enderror" placeholder="Postcode Delivery" name="postcode_delivery" id="postcode_delivery" value="{{ old('postcode_delivery') }}" required>
                            @error('postcode_delivery')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success rounded-pill px-30" value="Proceed">
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection

