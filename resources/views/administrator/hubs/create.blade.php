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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hub_name" class="form-label">Hub Name</label>
                                <input id="hub_name" type="text" class="form-control @error('hub_name') is-invalid @enderror" name="hub_name" value="{{ old('hub_name') }}" placeholder="eg: Fuiyoh Hub Taiping" required autocomplete="hub_name" autofocus>
                                @error('hub_name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Hub Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Hub Address</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                        @error('city')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <select name="state" class="form-select" required >
                                    <option disabled selected value="">Select a state</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->name}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                                @error('state')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="postcode" class="form-label">Postcode</label>
                                <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>
                                @error('postcode')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="mininum 8 characters" required autocomplete="new-password">
                                @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="minimum 8 characters" autocomplete="new-password">
                            </div>
                        </div>
                    </div>

                    <div class="mb-0">
                        <button type="submit" class="btn btn-yellow-hub px-30">Register Hub</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
