@extends('layouts.dashboard.app')

@section('page_title', 'Order History')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Order History</h2>

                <div class="table-responsive">
                    <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                        <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>Order Number</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->status->name}}</td>
                                <td>#</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection

