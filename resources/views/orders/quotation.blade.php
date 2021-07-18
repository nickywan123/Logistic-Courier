@extends('layouts.dashboard.app')

@section('content')


<div class="row">
    <div class="offset-1 col-11">
        <h4 style="font-weight: 700">Regular Order</h4>
        <p>Please select one courier:</p>
        <form method="POST" action="{{route('create.quotation')}}">
         @csrf
        <div class="row">
            <input type="hidden" name="postcode_delivery" value="{{$postcode_delivery}}" >
            @foreach($rates as $rate)
            <div class="col-3 col-md-2">
                 <img style="height: 60px; width:80px;" src="{{asset($rate->courier->image->path .''.$rate->courier->image->filename)}}" alt="{{$rate->courier->image->filename}}">                     
                 <div>
                    <input type="radio" class="mt-1 @error('courier') is-invalid @enderror" name="courier" value="{{$rate->id}}" required>
                    <label for="{{$rate->courier->name}}">RM{{$rate->cost}}</label>        
                </div>        
            </div>
            @endforeach
            @error('courier')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="offset-md-3 mt-4">
            <button type="submit" id="submit" class="btn" style="border-radius: 20px; background:#efcc37;">Book Delivery</button>  
        </div>
        </form>
    </div>
</div>


@endsection