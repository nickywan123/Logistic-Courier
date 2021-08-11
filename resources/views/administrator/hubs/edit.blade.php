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
                    <div class="form-group">
                      <label for="hub_name">Hub Name</label>
                      <input type="text" name="hub_name" class="form-control"  value="{{$hub->hub_name}}" required>
                      @error('hub_name')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control"  value="{{$hub->email}}" readonly required>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" name="address" class="form-control"  value="{{$hub->address}}"  required>
                      @error('address')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control"  value="{{$hub->city}}"  required>
                        @error('city')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" class="form-control"  value="{{$hub->state}}"  required>
                        @error('state')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input type="text" name="postcode" class="form-control"  value="{{$hub->postcode}}" required>
                        @error('postcode')
                        <div class="ps-25 invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Information</button>
                  </form>       
            </div>
        </div>
    </div>

@endsection
