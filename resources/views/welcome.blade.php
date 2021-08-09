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

                                    <form action="{{ route('guest.order.quotation') }}" method="POST">
                                        @csrf
                                        <h3 class="font-700">Get Instant Quotes</h3>
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill px-20 @error('parcel_weight') is-invalid @enderror" placeholder="Weight(kg e.g:0.1)" name="parcel_weight" id="parcel_weight" value="{{ old('parcel_weight') }}" required>
                                            @error('parcel_weight')
                                            <div class="ps-25 invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-3">
                                            <select name="" id="" class="form-select">
                                                <option selected="selected">Parcel Size</option>
                                                <option value="#">Box Size</option>
                                                <option value="#">Rectangular Size</option>
                                            </select>
                                        </div> --}}
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill px-20 @error('postcode_pickup') is-invalid @enderror" placeholder="Postcode Pickup" name="postcode_pickup" id="postcode_pickup" value="{{ old('postcode_pickup') }}" required>
                                            @error('postcode_pickup')
                                            <div class="ps-25 invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-pill px-20 @error('postcode_delivery') is-invalid @enderror" placeholder="Postcode Delivery" name="postcode_delivery" id="postcode_delivery" value="{{ old('postcode_delivery') }}" required>
                                            @error('postcode_delivery')
                                            <div class="ps-25 invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
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

            <ul id="fabTab" class="nav nav-pills nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Merchant</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Rider</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#" id="contact-tab" data-bs-toggle="tab" data-bs-target="#hub" type="button" role="tab" aria-controls="contact" aria-selected="false">Hub</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade pt-30 show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="accordion" id="accordionFuiyoh">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#userOne" aria-expanded="true" aria-controls="userOne">
                                    Berapakah had penghantaran untuk Fuiyoh Express?
                                </button>
                            </h2>
                            <div id="userOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Had jarak penghantaran bagi Fuiyoh Express adalah sekitar radius 15 kilometer.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#userTwo" aria-expanded="false" aria-controls="userTwo">
                                    Berapakah caj penghantaran menggunakan platform Fuiyoh?
                                </button>
                            </h2>
                            <div id="userTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Caj penghantaran menggunakan Platform Fuiyoh bermula dari serendah RM2.00.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#userThree" aria-expanded="false" aria-controls="userThree">
                                    Adakah kos penghantaran ditentukan mengikut jumlah berat parcel?
                                </button>
                            </h2>
                            <div id="userThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Kadar caj penghantaran bagi Fuiyoh Express ditentukan mengikut jenis kenderaan penghantaran dan jarak penghantaran.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user4" aria-expanded="false" aria-controls="user4">
                                    Apakah itu Fuiyoh?
                                </button>
                            </h2>
                            <div id="user4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Fuiyoh merupakan platform jualan atas talian yang dibangunkan oleh KOPENAS.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user5" aria-expanded="false" aria-controls="user5">
                                    Apakah itu platform eDagang Fuiyoh?
                                </button>
                            </h2>
                            <div id="user5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Platform eDagang Fuiyoh adalah platform jualan “online” melalui aplikasi pengguna, Fuiyoh
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user6" aria-expanded="false" aria-controls="user6">
                                    Apakah itu platform P-hailing Fuiyoh?
                                </button>
                            </h2>
                            <div id="user6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Platform P-hailing Fuiyoh adalah platform perkhidmatan “pick-up” dan “delivery”.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user7" aria-expanded="false" aria-controls="user7">
                                    Apakah itu Fuiyoh Delivery?
                                </button>
                            </h2>
                            <div id="user7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Fuiyoh Delivery adalah kurier penghantaran jarak jauh yang merentasi daerah dan negeri
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user8" aria-expanded="false" aria-controls="user8">
                                    Apakah itu Fuiyoh Express?
                                </button>
                            </h2>
                            <div id="user8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Fuiyoh Express adalah penghantaran jarak dekat dan segera.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user9" aria-expanded="false" aria-controls="user9">
                                    Apakah servis yang ditawarkan oleh Fuiyoh?
                                </button>
                            </h2>
                            <div id="user9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Rangkaian servis yang diperkenalkan dibawah jenama Fuiyoh adalah Fuiyoh Delivery, Fuiyoh Market, Fuiyoh Crew, Fuiyoh Hub, Fuiyoh Courier dan Fuiyoh Express.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user10" aria-expanded="false" aria-controls="user10">
                                    Apakah servis dan jualan yang disediakan di platform eDagang Fuiyoh?
                                </button>
                            </h2>
                            <div id="user10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Makanan, minuman, barang runcit, keperluan harian, pakaian, barangan elektronik, produk kecantikan dan pelbagai lagi
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#user11" aria-expanded="false" aria-controls="user11">
                                    Apakah perkhidmatan kurier yang digunakan oleh platform Fuiyoh?
                                </button>
                            </h2>
                            <div id="user11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFuiyoh">
                                <div class="accordion-body">
                                    Fuiyoh menggunakan kurier Fuiyoh Delivery dan Fuiyoh Express.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade pt-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="accordion" id="accordionMerchant">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheadingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchantOne" aria-expanded="true" aria-controls="merchantOne">
                                    Adakah pendaftaran Merchant percuma?
                                </button>
                            </h2>
                            <div id="merchantOne" class="accordion-collapse collapse" aria-labelledby="merchheadingOne" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Ya. Pendaftaran Merchant adalah percuma.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchantTwo" aria-expanded="false" aria-controls="merchantTwo">
                                    Apakah itu Fuiyoh Market?
                                </button>
                            </h2>
                            <div id="merchantTwo" class="accordion-collapse collapse" aria-labelledby="merchheadingTwo" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Platform dashboard khas untuk Merchant/Seller/Freelancers berbisnes & berhubung secara atas talian
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchantThree" aria-expanded="false" aria-controls="merchantThree">
                                    Dimanakah produk dipasarkan sekiranya Merchant memuat naik senarai produk mereka melalui dashboard Fuiyoh Market?
                                </button>
                            </h2>
                            <div id="merchantThree" class="accordion-collapse collapse" aria-labelledby="merchheadingThree" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Produk akan automatik dipasarkan di aplikasi pengguna Fuiyoh, Facebook Page (shop), Shopee, Lazada dan Alibaba.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchant4" aria-expanded="false" aria-controls="merchant4">
                                    Adakah Merchant perlu menyemak tempahan pelanggan dan mengurus stok dengan mengakses setiap akaun eDagang tersebut?
                                </button>
                            </h2>
                            <div id="merchant4" class="accordion-collapse collapse" aria-labelledby="merchheading4" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Merchant hanya perlu menyemak dan mengurus stok melalui dashboard Fuiyoh Gig sahaja.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchant5" aria-expanded="false" aria-controls="merchant5">
                                    Adakah penolakan caj servis dikenakan kepada setiap transaksi yang berjaya?
                                </button>
                            </h2>
                            <div id="merchant5" class="accordion-collapse collapse" aria-labelledby="merchheading5" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Tidak. Harga jualan Merchant adalah kekal seperti yang ditetapkan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="merchheading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#merchant6" aria-expanded="false" aria-controls="merchant6">
                                    Apakah produk yang boleh dipasarkan melalui Fuiyoh Market?
                                </button>
                            </h2>
                            <div id="merchant6" class="accordion-collapse collapse" aria-labelledby="merchheading6" data-bs-parent="#accordionMerchant">
                                <div class="accordion-body">
                                    Fuiyoh Market membolehkan pemasaran untuk pelbagai jenis produk.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade pt-30" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="accordion" id="accordionRider">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheadingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#riderOne" aria-expanded="true" aria-controls="riderOne">
                                    Adakah pendaftaran sebagai rider di Fuiyoh Crew percuma?
                                </button>
                            </h2>
                            <div id="riderOne" class="accordion-collapse collapse" aria-labelledby="riderheadingOne" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Ya. Pendaftaran sebagai Fuiyoh Crew adalah percuma.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#riderTwo" aria-expanded="false" aria-controls="riderTwo">
                                    Apakah itu Fuiyoh Crew?
                                </button>
                            </h2>
                            <div id="riderTwo" class="accordion-collapse collapse" aria-labelledby="riderheadingTwo" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Fuiyoh Crew adalah platform untuk menjadi Rider kepada Fuiyoh Delivery dan Fuiyoh Express.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Siapakah yang boleh daftar sebagai rider di Fuiyoh Crew?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="riderheadingThree" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Sesiapa sahaja berumur 18 – 40 tahun dan mempunyai lesen memandu yang sah bagi yang menggunakan kenderaan seperti motorsikal dan kereta.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rider4" aria-expanded="true" aria-controls="rider4">
                                    Apakah kenderaan yang digunakan?
                                </button>
                            </h2>
                            <div id="rider4" class="accordion-collapse collapse" aria-labelledby="riderheading4" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Jenis kenderaan yang digunakan adalah kereta, motosikal dan basikal
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rider5" aria-expanded="false" aria-controls="rider5">
                                    Adakah rider Fuiyoh Crew mendapat lindungan insurans?
                                </button>
                            </h2>
                            <div id="rider5" class="accordion-collapse collapse" aria-labelledby="riderheading5" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Rider yang sah berdaftar akan mendapat lindungan insurans.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Bagaimanakah cara untuk mendaftar sebagai rider?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="riderheading6" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Untuk menjadi rider kepada Fuiyoh Delivery dan Fuiyoh Express, boleh mendaftar secara percuma melalui platfrom Fuiyoh Crew.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="riderheading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Adakah terdapat kekosongan untuk jawatan rider?
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="riderheading7" data-bs-parent="#accordionRider">
                                <div class="accordion-body">
                                    Bagi sebarang jawatan kosong rider, sila rujuk kepada...
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade pt-30" id="hub" role="tabpanel" aria-labelledby="hub-tab">

                    <div class="accordion" id="accordionHub">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse1" aria-expanded="true" aria-controls="hubcollapse1">
                                    Berapakah harga untuk menggunakan Fuiyoh Express?
                                </button>
                            </h2>
                            <div id="hubcollapse1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Kadar caj penghantaran bergantung pada:
                                    <ol class="ps-20 mb-0">
                                        <li>Jenis kenderaan penghantaran</li>
                                        <li>Jarak penghantaran</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse2" aria-expanded="false" aria-controls="hubcollapse2">
                                    Apakah itu Fuiyoh Hub?
                                </button>
                            </h2>
                            <div id="hubcollapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Fuiyoh Hub adalah pusat perkhidmatan kurier dan penghantaran yang diusahakan oleh Kopenas Berhad
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse3" aria-expanded="false" aria-controls="hubcollapse3">
                                    Apakah itu Drop Point?
                                </button>
                            </h2>
                            <div id="hubcollapse3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Drop Point adalah tempat untuk pelanggan meletakkan barangan atau parcel yang perlu dihantar ke destinasi
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse4" aria-expanded="true" aria-controls="hubcollapse4">
                                    Apakah itu Drop Center?
                                </button>
                            </h2>
                            <div id="hubcollapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Drop Center adalah tempat pengagihan barangan mengikut lokasi alamat yang dikirim.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse5" aria-expanded="false" aria-controls="hubcollapse5">
                                    Siapakah rakan penghantaran rasmi Fuiyoh Hub?
                                </button>
                            </h2>
                            <div id="hubcollapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Fuiyoh Courier dan Fuiyoh Express merupakan rakan penghantaran rasmi Fuiyoh Hub.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse6" aria-expanded="false" aria-controls="hubcollapse6">
                                    Bagaimanakah sistem yang digunakan oleh Fuiyoh Delivery?
                                </button>
                            </h2>
                            <div id="hubcollapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Fuiyoh Delivery menggunakan sistem Drop Point dan Drop Center.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse7" aria-expanded="true" aria-controls="hubcollapse7">
                                    Dimanakah lokasi rasmi Drop Point untuk Fuiyoh Delivery?
                                </button>
                            </h2>
                            <div id="hubcollapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Stesen minyak yang terpilih.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse8" aria-expanded="false" aria-controls="hubcollapse8">
                                    Apakah cara penghantaran yang boleh digunakan oleh pelanggan?
                                </button>
                            </h2>
                            <div id="hubcollapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Terdapat 3 cara penghantaran yang boleh digunakan oleh pelanggan, iaitu:-
                                    <ol class="ps-20 mb-0">
                                        <li>Membuat kiriman barangan atau parcel di Fuiyoh Hub.</li>
                                        <li>Membuat tempahan penghantaran secara atas talian.</li>
                                        <li>Menggunakan sister Drop Point dan Drop Center</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse9" aria-expanded="false" aria-controls="hubcollapse9">
                                    Bagaimanakah proses penghantaran menggunakan sistem Drop Point dan Drop Center?
                                </button>
                            </h2>
                            <div id="hubcollapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Proses penghantaran adalah seperti berikut:-
                                    <ol class="ps-20 mb-0">
                                        <li>Pelanggan meletakkan barangan yang hendak dikirim di mana-mana lokasi Drop Point.</li>
                                        <li>Barangan tersebut akan di bawa ke lokasi Drop Center yang terdekat.</li>
                                        <li>Barangan tersebut akan dikurier ke Drop Center lain seperti alamat yang  dikirim.</li>
                                        <li>Dari Drop Center itu, barangan akan diedarkan ke Fuiyoh Hub yang terdekat  dengan alamat yang dikirim.</li>
                                        <li>Dari Fuiyoh Hub, Fuiyoh Crew akan terus menghantar barangan tersebut sehingga ke depan pintu alamat penerima.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse10" aria-expanded="true" aria-controls="hubcollapse10">
                                    Bagaimana proses penghantaran menggunakan Fuiyoh Express?
                                </button>
                            </h2>
                            <div id="hubcollapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Pelanggan boleh terus membuat tempahan untuk menggunakan Fuiyoh Express melalui website, aplikasi atau Fuiyoh Hub
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hubcollapse11" aria-expanded="false" aria-controls="hubcollapse11">
                                    Berapakah radius jarak penghantaran untuk pelanggan menggunakan Fuiyoh Express melalui Fuiyoh Hub
                                </button>
                            </h2>
                            <div id="hubcollapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionHub">
                                <div class="accordion-body">
                                    Sekitar 15 km sahaja
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
