@extends('layouts.administrator.main')

@section('page_title', 'Register New Hub')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Register New Hub</h2>
                    </div>
                </div>
                <form method="POST" action="{{route('admin.hubs.store')}}">
                    @csrf

                    <div class="form-group row">
                        <label for="hub_name" class="col-md-2 col-form-label text-md-right">Hub Name</label>

                        <div class="col-md-6">
                            <input id="hub_name" type="text" class="form-control @error('hub_name') is-invalid @enderror" name="hub_name" value="{{ old('hub_name') }}" placeholder="eg: Fuiyoh Hub Taiping" required autocomplete="hub_name" autofocus>

                            @error('hub_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="email" class="col-md-2 col-form-label text-md-right">Hub Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="address" class="col-md-2 col-form-label text-md-right">Hub Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="city" class="col-md-2 col-form-label text-md-right">City</label>

                        <div class="col-md-3">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="state" class="col-md-2 col-form-label text-md-right">State</label>

                        <div class="col-md-3">
                            <select name="state" class="form-control" required >
                                <option disabled selected value="">Select a state</option>
                                @foreach($states as $state)
                               
                                <option value="{{$state->name}}">{{$state->name}}</option>
                                
                                @endforeach
                              </select>
                              @error('state')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="postcode" class="col-md-2 col-form-label text-md-right">Postcode</label>

                        <div class="col-md-3">
                            <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>

                            @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="mininum 8 characters" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="minimum 8 characters" autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register Hub
                            </button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>

@endsection
