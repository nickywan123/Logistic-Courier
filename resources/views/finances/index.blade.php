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

                            <div class="mx-auto">
                                <canvas id="line-chart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('onpagescript')

    <script>
        new Chart(document.getElementById("line-chart"), {
            type: 'bar',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
                datasets: [
                    {
                        data: [71.00, 423.00, 273.00, 175.00, 264.00, 25.00, 284.00, 196.00, 264.00, 27.00, 203.00, 350.00, 45.00, 124.00, 198.00, 378.00, 56.00, 133.00, 286.00, 319.00, 291.00, 165.00, 95.00, 192.00, 17.00, 146.00, 98.00, 233.00, 171.00, 625.00],
                        label: "July",
                        backgroundColor: "#8e5ea2",
                        fill: false
                    },
                    {
                        data: [448.00, 416.00, 524.00, 564.00, 494.00, 525.00, 551.00, 456.00, 246.00, 100.00, 271.00, 497.00, 260.00, 66.00, 305.00, 285.00, 307.00, 213.00, 136.00, 575.00, 267.00, 130.00, 283.00, 346.00, 457.00, 512.00, 394.00, 310.00, 554.00, 625.00, 638.00,],
                        label: "Jun",
                        backgroundColor: "#3e95cd",
                        fill: false
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Sales by products'
                }
            }
        });
    </script>

@endpush

