@extends('layouts.hub.main')

@section('page_title', 'Hub')

@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="p-lg-30 p-md-30 p-sm-30 p-10">
            <h2 class="title-section">Customer Orders</h2>

            <div class="table-responsive">
                <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Order Number</th>
                        <th>Status</th>
                        <th>Amount(RM)</th>
                        <th>Courier</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hub_orders->orders as $order)
                        <tr>
                            <th>{{$order->created_at}}</th>
                            <td>{{$order->order_number}}</td>
                            <td>{{$order->status->name}}</td>
                            <td>{{$order->amount}}</td>
                            <td>{{$order->courier->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
