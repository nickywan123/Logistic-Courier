@extends('layouts.dashboard.app')

@section('page_title', 'Order History')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Top Up History</h2>

                <div class="table-responsive">
                    <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                        <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>BillCode</th>
                            <th>Transaction ID</th>
                            <th>Amount(RM)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <th>{{$transaction->created_at}}</th>
                                <td>{{$transaction->billcode}}</td>
                                <td>{{$transaction->transaction_id}}</td>
                                <td>{{$transaction->amount}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection

