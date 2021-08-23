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
                    <div class="mb-3">
                        <label class="form-label" for="courier">Courier</label>
                        <select name="courier" class="form-select @error('courier') is-invalid @enderror" required >
                            <option disabled selected value="">Select a courier</option>
                            @foreach($couriers as $courier)
                                <option value="{{$courier->id}}">{{$courier->name}}</option>
                            @endforeach
                        </select>
                        @error('courier')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="weight">Weight(kg)</label>
                        <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}"  required>
                        @error('weight')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="location">Location</label>
                        <select name="location" class="form-select @error('location') is-invalid @enderror" required >
                            <option disabled selected value="">Select a location</option>
                            @foreach($locations as $location)

                                <option value="{{$location->id}}">{{$location->name}}</option>

                            @endforeach
                        </select>
                        @error('location')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="cost">Cost Retail (RM)</label>
                                <input type="text" name="cost" class="form-control @error('cost') is-invalid @enderror" value="{{ old('cost') }}" required>
                                @error('cost')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="hub_cost">Hub Rate (RM)</label>
                                <input type="text" name="hub_cost" class="form-control @error('hub_cost') is-invalid @enderror" value="{{ old('hub_cost') }}" required>
                                @error('hub_cost')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <button type="submit" class="btn btn-yellow-hub px-30">Add Rate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
