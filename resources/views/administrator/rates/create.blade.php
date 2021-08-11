@extends('layouts.administrator.main')

@section('page_title', 'Courier Rates')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Add New Rate</h2>
                    </div>
                </div>
                <form action="{{route('admin.rates.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="courier">Courier</label>
                      <select name="courier" class="form-control" required >
                        <option disabled selected value="">Select a courier</option>
                        @foreach($couriers as $courier)                    
                        <option value="{{$courier->id}}">{{$courier->name}}</option>                    
                        @endforeach
                      </select>
                      @error('courier')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="weight">Weight(kg)</label>
                      <input type="text" name="weight" class="form-control" value="{{ old('weight') }}"  required>
                      @error('weight')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="location">Location</label>
                      <select name="location" class="form-control" required >
                        <option disabled selected value="">Select a location</option>
                        @foreach($locations as $location)
                       
                        <option value="{{$location->id}}">{{$location->name}}</option>
                        
                        @endforeach
                      </select>
                      @error('location')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="cost">Cost Retail(RM)</label>
                      <input type="text" name="cost" class="form-control" value="{{ old('cost') }}" required>
                      @error('cost')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="hub_cost">Hub Rate(RM)</label>
                        <input type="text" name="hub_cost" class="form-control" value="{{ old('hub_cost') }}" required>
                        @error('hub_cost')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Rate</button>
                  </form>       
            </div>
        </div>
    </div>

@endsection
