@extends('layouts.administrator.main')

@section('page_title', 'Courier Rates')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Edit Your Current Rate</h2>
                    </div>
                </div>
                <form action="{{route('admin.rates.update',$rate->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="courier">Courier</label>
                        <input type="text" name="courier" class="form-control"  value="{{$rate->courier->name}}" readonly required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="weight">Weight(kg)</label>
                        <input type="text" name="weight" class="form-control"  value="{{$rate->weight}}" readonly required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="location">Location</label>
                        <input type="text" name="location" class="form-control"  value="{{$rate->location->name}}" readonly required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="cost">Cost Retail (RM)</label>
                                <input type="text" name="cost" class="form-control"  value="{{$rate->cost}}" required>
                                @error('cost')
                                <div class="ps-25 invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="hub_cost">Hub Rate (RM)</label>
                                <input type="text" name="hub_cost" class="form-control"  value="{{$rate->hub_cost}}" required>
                                @error('hub_cost')
                                <div class="ps-25 invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-yellow-hub px-30">Update Rate</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>

@endsection
