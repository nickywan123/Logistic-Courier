@extends('layouts.administrator.main')

@section('page_title', 'Edit Hub')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Edit Fuiyoh Hub Information</h2>
                    </div>
                </div>
                <form action="{{route('admin.hubs.update',$hub->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="hub_name">Hub Name</label>
                                <input type="text" name="hub_name" class="form-control @error('hub_name') is-invalid @enderror"  value="{{$hub->hub_name}}" required>
                                @error('hub_name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Hub Email</label>
                                <input type="text" name="email" class="form-control @error('address') is-invalid @enderror"  value="{{$hub->email}}" readonly required>
                                @error('address')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="address">Hub Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  value="{{$hub->address}}"  required>
                        @error('address')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="city">City</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"  value="{{$hub->city}}"  required>
                        @error('city')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="state">State</label>
                                <input type="text" name="state" class="form-control @error('state') is-invalid @enderror"  value="{{$hub->state}}"  required>
                                @error('state')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="postcode">Postcode</label>
                                <input type="text" name="postcode" class="form-control @error('postcode') is-invalid @enderror"  value="{{$hub->postcode}}" required>
                                @error('postcode')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <button type="submit" class="btn btn-yellow-hub px-30">Update Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
