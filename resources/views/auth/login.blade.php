@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card mt-4 guests-card" style="border-radius: 20px;">
                <div class="card-header text-center text-white form-card-title p-0 m-0 border-0" style="border-radius: 20px;">
                    <p style="font-size:40px;">
                     <img class="img-logo-size" src="{{asset('/images/logo/fuiyoh_hub.png')}}" alt="fuiyoh_logo">
                    </p>
                    <p>DASHBOARD</p>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="false">Sign-up</a>
                        </li>
                    </ul>
                </div>  
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="card-body" style="background-color:#ffff; min-height:100%; border-radius:20px;">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-row mb-2">
                                        <div class="input-group col-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your email address">
                                        </div>
                                        <div class="col-12">
                                            @error('email')
                                            <span class="text-danger mt-1" role="alert">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-row mb-2">
                                        <div class="input-group col-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="Your password">
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-5 mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input remember-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label text-dark" style="padding-top: 1px;" for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right mb-1">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-12 text-center mb-1">
                                            <button type="submit" class="btn login-btn">Login</button>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-5 offset-3">
                                            <p class="text-dark">By signing in, you agree to the 
                                                <a href="#">terms and conditions.</a>
                                            </p>
                                        </div>
                                    </div>
                             </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab"><h1>PLACEHOLDER</h1></div>
                </div>      
            </div>      
        </div>
        <div class="col-md-5 mt-5">
            <h3 class="text-color">ACCESS YOUR ACCOUNT AND MANAGE YOUR BOOKINGS</h3>
            <p class="text-color">Get matched with our delivery our delivery crews in just a few seconds. Enjoy faster deliveries, even within an hour.</p>
            <div style="margin-top: 10rem;">
             <img class="kopenas-logo-size" src="{{asset('/images/footer/icons/kopenas_logo.png')}}" alt="kopenas_logo">
             <img class="kopenas-logo-size" src="{{asset('/images/footer/icons/mykopenas_logo.png')}}" alt="mykopenas_logo">
             <img class="kopenas-logo-size" src="{{asset('/images/footer/icons/kb_digital_logo.png')}}" alt="kb_digital_logo">
             <img class="kopenas-logo-size" src="{{asset('/images/footer/icons/fuiyoh_white_logo.png')}}" alt="fuiyoh_white_logo">
            </div>
        </div>
    </div>
</div>


@endsection
