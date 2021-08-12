@extends('layouts.app')

@section('title', 'Welcome to')

@section('content')

    <section id="top" class="bg-dark-fuiyoh py-110">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-12 text-yellow-fuiyoh text-lg-start text-md-center text-sm-center text-center py-60">
                                    <h1 class="font-700 font-lg-size text-uppercase mb-0">Ready when you are.</h1>
                                    <p>Get matched with our delivery crew in just a few seconds. Enjoy faster deliveries, even within an hour.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-6">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 pe-sm-0 d-sm-block d-none">
                            <img src="{{ asset('assets/images/mascot-02-logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-7 ps-sm-0">
                            <div class="spec-card">
                                <div class="spec-card-body py-70 px-70 pb-xs-40 px-xs-20">

                                    <form action="#" method="POST">
                                        @csrf
                                        <h3 class="font-700">Get Instant Quotes</h3>
                                        <div class="mb-3">
                                            <select name="" id="" class="form-select">
                                                <option value="#">Weight (kg)</option>
                                                <option value="#">1</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <select name="" id="" class="form-select">
                                                <option selected="selected">Parcel Size</option>
                                                <option value="#">Box Size</option>
                                                <option value="#">Rectangular Size</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Postcode Pickup">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Postcode Delivery">
                                        </div>
                                        <div class="d-grid gap-2 mb-3">
                                            <button type="submit" class="btn btn-yellow-hub px-50 text-white">Quote</button>
                                        </div>
                                        <div class="text-start">
                                            <p class="mb-0">By signing in, you agree to the</p>
                                            <p class="mb-0"><a href="#">terms and conditions</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="bg-img-yellow-fuiyoh py-110">
        <div class="container">
            <h1 class="font-700 text-center text-uppercase mb-60">Fuiyoh Hub Services</h1>

            <div class="row">
                <div class="col-md-11 mx-auto">

                    <div id="hubServices" class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-dropoff.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Drop-off</h3>
                                    <p class="mb-0">Drop your parcel to the nearby drop-off point, or 'drop shop', where the courier collects it later.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-dropout.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Pick-up</h3>
                                    <p class="mb-0">Avoid the hassle. Book your delivery and our courier service will come to pick you parcel at your doorstep.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-subtract.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Courier</h3>
                                    <p class="mb-0">Deliver your order anywhere including overseas with our top courier partners.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-book-check.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Payment & Renewal</h3>
                                    <p class="mb-0">Get your SSM, road tax or your insurance renewal today. You can even pay your bills fast & easy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-materials.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Vendor Marketplace</h3>
                                    <p class="mb-0">Allow multiple vendors to sell their products at the location provided inside the hub.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="spec-card mb-4">
                                <div class="spec-card-body p-55 text-center">
                                    <img src="{{ asset('assets/images/cus-icon/icon-order.png') }}" alt="" class="mb-20 w-50 img-fluid">
                                    <h3 class="font-700 mb-20">Print Services</h3>
                                    <p class="mb-0">We also offer services like photocopy and physical documents or hard copies for printing.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>


    <section id="faq" class="bg-dark-fuiyoh py-110">
        <div class="container">
            
            <h1 class="font-700 text-center text-uppercase text-yellow-fuiyoh mb-60">Frequently Ask Questions</h1>

            <ul id="fabTab" class="nav nav-pills nav-fill" role="tablist">
                @foreach($categories as $category)
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="coll{{ preg_replace('/\s+/', '_', $category->name) }}-tab" data-bs-toggle="tab" data-bs-target="#collapse{{ preg_replace('/\s+/', '_', $category->name) }}" type="button" role="tab" aria-controls="collapse{{ preg_replace('/\s+/', '_', $category->name) }}" aria-selected="true">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach($categories as $category)
                <div class="tab-pane fade pt-30" id="collapse{{ preg_replace('/\s+/', '_', $category->name) }}" role="tabpanel" aria-labelledby="coll{{ preg_replace('/\s+/', '_', $category->name) }}-tab">
                    <div class="accordion" id="accordion{{ preg_replace('/\s+/', '_', $category->name) }}">
                    @foreach($category->faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ preg_replace('/\s+/', '_', $category->name) }}{{ $faq->id }}" aria-expanded="true" aria-controls="{{ preg_replace('/\s+/', '_', $category->name) }}{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="{{ preg_replace('/\s+/', '_', $category->name) }}{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordion{{ preg_replace('/\s+/', '_', $category->name) }}">
                                <div class="accordion-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
