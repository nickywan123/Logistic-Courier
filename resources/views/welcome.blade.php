@extends('layouts.app')

@section('title', 'Welcome to')

@section('content')

    <section class="bg-dark-fuiyoh py-110">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-12 text-yellow-fuiyoh text-md-start text-sm-center text-center">
                                    <h1 class="font-700 font-lg-size text-uppercase mb-0">Ready when you are.</h1>
                                    <p>Get matched with our delivery crew in just a few seconds. Enjoy faster deliveries, even within an hour.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5 pe-sm-0 d-sm-block d-none">
                            <img src="{{ asset('assets/images/mascot-02-logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7 ps-sm-0">
                            <div class="spec-card">
                                <div class="spec-card-body pt-105 pb-60 px-70 pb-xs-40 px-xs-20">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
