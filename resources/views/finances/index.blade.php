@extends('layouts.dashboard.app')

@section('page_title', 'Finance Report')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Statement</h2>

                <div class="card">
                    <div class="card-header pt-20">
                        <ul class="nav nav-tabs justify-content-center card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="credithistory-tab" data-bs-toggle="tab" data-bs-target="#credithistory" type="button" role="tab" aria-controls="credithistory" aria-selected="true">Credit History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="invoice-tab" data-bs-toggle="tab" data-bs-target="#invoice" type="button" role="tab" aria-controls="invoice" aria-selected="false">Invoice</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="topupinvoice-tab" data-bs-toggle="tab" data-bs-target="#topupinvoice" type="button" role="tab" aria-controls="topupinvoice" aria-selected="false">Top Up Invoice</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales" type="button" role="tab" aria-controls="sales" aria-selected="false">Sales</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content pb-30" id="myTabContent">
                        <div class="tab-pane fade show active" id="credithistory" role="tabpanel" aria-labelledby="credithistory-tab">

                            <div class="table-responsive">
                                <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                                    <thead>
                                    <tr>
                                        <th>Date/Time</th>
                                        <th>Order ID</th>
                                        <th>Description</th>
                                        <th>Debits</th>
                                        <th>Credits</th>
                                        <th>Balance(RM)</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2021-07-07 12:52:03</td>
                                        <td>EI-4JJD</td>
                                        <td>Order - EI-4JJD</td>
                                        <td>-5.00</td>
                                        <td>32</td>
                                        <td>50 403.00</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2021-07-03 14:52:03</td>
                                        <td>-</td>
                                        <td>Topup Bonus- Topup Bonus(RM500)</td>
                                        <td>-0.00</td>
                                        <td>500.00</td>
                                        <td>50 000.00</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">

                            <div class="table-responsive">
                                <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                                    <thead>
                                    <tr>
                                        <th>Date/Time</th>
                                        <th>Order ID</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2021-07-07 12:52:03</td>
                                        <td>EI-4JJD</td>
                                        <td>Order Payment: Shipment from Selangor to Johor by Pos Laju - ERB10234274MY</td>
                                        <td>RM5.70</td>
                                        <td><a href="#" class="btn btn-sm btn-primary"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2021-07-03 14:52:03</td>
                                        <td>EI-4HAIT</td>
                                        <td>Order Payment: Shipment from Selangor to Selangor by Aramex - 4623746135</td>
                                        <td>RM6.20</td>
                                        <td><a href="#" class="btn btn-sm btn-primary"><i data-feather="download"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="topupinvoice" role="tabpanel" aria-labelledby="topupinvoice-tab">

                            <div class="table-responsive">
                                <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                                    <thead>
                                    <tr>
                                        <th>Date/Time</th>
                                        <th>Transaction No.</th>
                                        <th>Package</th>
                                        <th>Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2021-07-07 12:52:03</td>
                                        <td>45728203953</td>
                                        <td>F50000</td>
                                        <td>RM50000</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i data-feather="download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
