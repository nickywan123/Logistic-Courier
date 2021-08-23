@extends('layouts.administrator.main')

@section('page_title', 'Administrator')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">All Customer Orders</h2>
                    </div>
                    {{-- <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="#" class="btn btn-yellow-hub">Register New User</a>
                        </div>
                    </div> --}}
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">User</th>
                        <th scope="col">Courier</th>
                        <th scope="col">Hub</th>
                        <th>Amount</th>
                        <th>Tracking Number</th>
                        <th class="text-center" style="width:150px;">Order Status</th>
                        <th class="text-center" style="width:150px;">Consignment Note</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->created_at}}</td>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->courier->name }}</td>
                            <td>{{$order->hub->hub_name}}</td>
                            <td>{{ $order->amount }}</td>
                            <td>{{$order->awb}}</td>
                            <td class="text-center"><a class="btn btn-secondary" href="{{$order->tracking_url}}">Track Parcel</a></td>
                            <td class="text-center"><a class="btn btn-info text-white" href="{{$order->awb_id_link}}">Print</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
