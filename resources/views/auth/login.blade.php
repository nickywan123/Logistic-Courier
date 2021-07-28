@extends('layouts.app')

@section('title', 'Login')

@section('content')


    <section class="vhscreen bg-img-network d-flex align-items-center">
        <div class="container py-110">
            <div class="row">

                <div class="col-lg-5 col-sm-12 mt-xs-50">

                    <div class="spec-card">
                        <div class="spec-card-title pt-40 px-70 px-xs-30">
                            <img src="assets/images/dashboard-logo.png" alt="" class="d-block mx-auto">
                            <p class="mb-0 text-uppercase text-center text-white">Dashboard</p>
                            <nav class="nav nav-pills fuiyoh-spec nav-justified" id="nav-tab" role="tablist">
                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" href="#">Login</a>
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" href="#">Register</a>
                            </nav>
                        </div>
                        <div class="spec-card-body pt-105 pb-60 px-70 pb-xs-40 px-xs-20">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="username"><i data-feather="user"></i></span>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your email address">
                                            @error('email')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="password"><i data-feather="lock"></i></span>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Your password" aria-describedby="password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input remember-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label text-dark" for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="submit" class="btn btn-block btn-yellow-hub px-80 mx-auto rounded-pill text-white" value="Login">
                                        </div>
                                        <div class="text-center">
                                            @if (Route::has('password.request'))
                                                <p><a href="{{ route('password.request') }}" class="text-yellow-fuiyoh">Forgot password?</a></p>
                                            @endif
                                            <p class="mb-0">By signing in, you agree to the</p>
                                            <p class="mb-0"><a href="#">terms and conditions</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="username"><i data-feather="user"></i></span>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="password"><i data-feather="mail"></i></span>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="username"><i data-feather="lock"></i></span>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="password"><i data-feather="lock"></i></span>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <button type="submit" class="btn btn-block btn-yellow-hub px-80 mx-auto rounded-pill text-white">{{ __('Register') }}</button>
                                        </div>
                                        <div class="text-center">
                                            <p class="mb-0">By signing in, you agree to the</p>
                                            <p class="mb-0"><a href="#">terms and conditions</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12 mt-xs-100 ms-auto d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-12 text-yellow-fuiyoh text-md-start text-sm-center text-center">
                            <h1 class="font-700 font-lg-size text-uppercase mb-0">Access Your Account & Manage Your Bookings</h1>
                            <p>Get matched with our delivery crew in just a few seconds. Enjoy faster deliveries, even within an hour.</p>
                        </div>
                        <div class="col-lg-12 mt-90 d-flex align-items-center">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-2 ms-sm-auto col-5 mx-auto mb-3">
                                    <img src="assets/images/kopenas-logo.png" alt="" class="img-fluid img-grayscale">
                                </div>
                                <div class="col-md-4 col-8 mx-auto mb-3">
                                    <img src="assets/images/my-copenas-logo.png" alt="" class="img-fluid img-grayscale">
                                </div>
                                <div class="col-md-2 col-5 mx-auto mb-3">
                                    <img src="assets/images/kb-digital-logo.png" alt="" class="img-fluid img-grayscale">
                                </div>
                                <div class="col-md-3 me-sm-auto col-6 mx-auto mb-3">
                                    <img src="assets/images/fuiyoh-logo.png" alt="" class="img-fluid img-grayscale">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
