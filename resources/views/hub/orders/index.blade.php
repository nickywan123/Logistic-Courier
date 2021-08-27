@extends('layouts.hub.main')

@section('page_title', 'Hub')

@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="p-lg-30 p-md-30 p-sm-30 p-10">
            <h2 class="title-section">Customer Orders</h2>
            <div class="row">
                <div class="offset-md-9 col-md-3">
                    <a href="#" class="btn btn-primary download_bulk_hub" >Print Multiple Consignment</a>
                </div>
            </div>
            <div class="table-responsive mt-2">
                <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                    <thead>
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="allCheckHub" value="" name="">
                        </th>
                        <th>Date & Time</th>
                        <th>Order Number</th>
                        <th>Status</th>
                        <th>Amount(RM)</th>
                        <th>Tracking Number</th>
                        <th>Consignment Note</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hub_orders->orders as $order)
                        <tr>
                            <td>
                                <input class="form-check-input subChkOrderHub" type="checkbox" data-id="{{ $order->awb_id_link }}" id="{{ $order->id }}">
                            </td>
                            <th>{{$order->created_at}}</th>
                            <td>{{$order->order_number}}</td>
                            <td><a href="{{$order->tracking_url}}" target="_blank">Track Shipment</a></td>
                            <td>{{$order->amount}}</td>
                            <td>{{$order->courier->name}}- {{$order->awb}}</td>
                            <td><a href="{{$order->awb_id_link}}" target="_blank">Print Consignment Note</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection


