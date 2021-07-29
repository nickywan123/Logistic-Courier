@extends('layouts.app')

@section('content')


    <section class="bg-img-network d-flex align-items-center">
        <div class="container py-110">
            <div class="row">
                <div class="col-lg-5 col-sm-12 mt-xs-50">
                    <div class="spec-card">
                        <div class="spec-card-title pt-40 px-70 px-xs-30">
                            <img src="assets/images/dashboard-logo.png" alt="" class="d-block mx-auto">
                            <p class="mb-0 text-uppercase text-center text-white">Dashboard</p>
                            <nav class="nav nav-pills fuiyoh-spec nav-justified" id="nav-tab" role="tablist">
                                <a class="nav-link {{ ($errors->has('register_name') || $errors->has('register_email')|| $errors->has('register_password')) ? '' : 'active' }} " data-bs-toggle="tab" data-bs-target="#nav-login" type="button" role="tab" aria-controls="nav-login" aria-selected="true" href="#">Login</a>
                                <a class="nav-link {{ ($errors->has('register_name') || $errors->has('register_email')|| $errors->has('register_password')) ? 'active' : '' }} " data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register" aria-selected="false" href="#">Register</a>
                            </nav>
                        </div>
                        <div class="spec-card-body pt-105 pb-60 px-70 pb-xs-40 px-xs-20">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade {{ ($errors->has('register_name') || $errors->has('register_email')|| $errors->has('register_password')) ? '' : 'show active' }} " id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="username"><i data-feather="user"></i></span>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your email address">
                                            @error('email')
                                            <div class="ps-25 invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="password"><i data-feather="lock"></i></span>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Your password" aria-describedby="password">
                                        </div>
                                        <div class="mb-3">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-yellow-fuiyoh">Forgot password?</a>
                                            @endif
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="submit" class="btn btn-block btn-yellow-hub px-100 mx-auto rounded-pill text-white" value="Login">
                                        </div>
                                        <div class="text-center">
                                            <p class="mb-0">By signing in, you agree to the</p>
                                            <p class="mb-0"><a href="#">terms and conditions</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade  {{ ($errors->has('register_name') || $errors->has('register_email')|| $errors->has('register_password')) ? 'show active' : '' }}" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="register-name"><i data-feather="user"></i></span>
                                            <input type="text" class="form-control @error('register_name') is-invalid @enderror" placeholder="Name" aria-label="register_name" name="register_name" aria-describedby="register_name" value="{{ old('register_name') }}" required>
                                            @error('register_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="register-email"><i data-feather="mail"></i></span>
                                            <input type="email" class="form-control @error('register_email') is-invalid @enderror" placeholder="Email Address" aria-label="register_email" name="register_email" aria-describedby="register_email" value="{{ old('register_email') }}" required>
                                            @error('register_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="register_password"><i data-feather="lock"></i></span>
                                            <input type="password" class="form-control @error('register_password') is-invalid @enderror" placeholder="Password" aria-label="register_password" name="register_password" aria-describedby="register_password" required>
                                            @error('register_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="register_password_confirm"><i data-feather="lock"></i></span>
                                            <input type="password" name="register_password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="register_password_confirmation" aria-describedby="register_password_confirmation" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <button type="submit" class="btn btn-block btn-yellow-hub px-20 mx-auto rounded-pill text-white">Register</button>
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


{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-7">--}}
{{--            <div class="card mt-4 guests-card" style="border-radius: 20px;">--}}
{{--                <div class="card-header text-center text-white form-card-title p-0 m-0 border-0" style="border-radius: 20px;">--}}
{{--                    <p style="font-size:40px;">--}}
{{--                     <img class="img-logo-size" src="{{asset('/images/logo/fuiyoh_hub.png')}}" alt="fuiyoh_logo">--}}
{{--                    </p>--}}
{{--                    <p>DASHBOARD</p>--}}
{{--                    <!-- Nav tabs -->--}}
{{--                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                        <a class="nav-link" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="false">Sign-up</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- Tab panes -->--}}
{{--                <div class="tab-content">--}}
{{--                    <div class="tab-pane active" id="login" role="tabpanel" aria-labelledby="login-tab">--}}
{{--                        <div class="card-body" style="background-color:#ffff; min-height:100%; border-radius:20px;">--}}
{{--                            <form method="POST" action="{{ route('login') }}">--}}
{{--                                @csrf--}}
{{--                                    <div class="form-row mb-2">--}}
{{--                                        <div class="input-group col-12">--}}
{{--                                            <div class="input-group-prepend">--}}
{{--                                                <span class="input-group-text"><i class="fa fa-user"></i></span>--}}
{{--                                            </div>--}}
{{--                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your email address">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12">--}}
{{--                                            @error('email')--}}
{{--                                            <span class="text-danger mt-1" role="alert">--}}
{{--                                                {{ $message }}--}}
{{--                                            </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-row mb-2">--}}
{{--                                        <div class="input-group col-12">--}}
{{--                                            <div class="input-group-prepend">--}}
{{--                                                <span class="input-group-text"><i class="fa fa-key"></i></span>--}}
{{--                                            </div>--}}
{{--                                            <input class="form-control" type="password" name="password" id="password" placeholder="Your password">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-5 mb-1">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input remember-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                                <label class="form-check-label text-dark" style="padding-top: 1px;" for="remember">--}}
{{--                                                    Remember me--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 text-right mb-1">--}}
{{--                                            @if (Route::has('password.request'))--}}
{{--                                            <a href="{{ route('password.request') }}">Forgot Password?</a>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 text-center mb-1">--}}
{{--                                            <button type="submit" class="btn login-btn">Login</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mt-1">--}}
{{--                                        <div class="col-5 offset-3">--}}
{{--                                            <p class="text-dark">By signing in, you agree to the--}}
{{--                                                <a href="#">terms and conditions.</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                             </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab"><h1>PLACEHOLDER</h1></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


@endsection
