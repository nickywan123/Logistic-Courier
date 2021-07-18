@extends('layouts.dashboard.app')

@section('content')


<div class="row">
    <div class="offset-1 col-8">
        <h4 style="font-weight: 700">Regular Order</h4>
        <p>Please fill in parcel details:</p>
        <form method="POST" action="{{route('order.quotation')}}">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="form-control custom-select @error('parcel_weight') is-invalid @enderror" name="parcel_weight" style="border-radius:20px;" id="parcel_weight" required>
                <option disabled="" value="" selected>Weight (kg)</option>
                @foreach($weights as $weight)
                <option value="{{$weight->weight}}">{{$weight->weight}}</option>
                @endforeach
              </select>
              @error('parcel_weight')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <select class="form-control custom-select @error('parcel_size') is-invalid @enderror" name="parcel_size"  style="border-radius:20px;" id="parcel_size" required>
                <option disabled="" value="" selected="selected">Parcel Size</option>
                <option>Box Size</option>
                <option>Rectangular Size</option>
              </select>
              @error('parcel_size')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
                <input type="text"  placeholder="Postcode Pickup" value="{{ old('postcode_pickup') }}" class="form-control @error('postcode_pickup') is-invalid @enderror" style="border-radius:20px;" name="postcode_pickup" id="postcode_pickup" required>
                @error('postcode_pickup')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <input type="text" placeholder="Postcode Delivery" value="{{ old('postcode_delivery') }}" class="form-control @error('postcode_delivery') is-invalid @enderror" style="border-radius:20px;" name="postcode_delivery" id="postcode_delivery"  required>
                @error('postcode_delivery')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group offset-md-3">
                <button type="submit" id="submit" class="btn proceed-button" style="min-width: 200px;">Proceed</button>  
            </div>   
          </div>      
        </form>
    </div>
</div>

@endsection

