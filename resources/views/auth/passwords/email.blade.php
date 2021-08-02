@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

    <section class="bg-img-network d-flex align-items-center">
        <div class="container py-150">

            <div class="row">
                <div class="col-md-7 col-sm-8 mx-auto">
                    <div class="spec-card">
                        <div class="spec-card-body py-70 px-70">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i data-feather="mail"></i>
                                        </span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Please enter your registered email address">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-yellow-hub">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
