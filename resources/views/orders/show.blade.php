@extends('layouts.dashboard.app')

@section('page_title', 'Order History')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Order History</h2>
                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <a href="#" class="btn btn-primary download_bulk" >Print Multiple Consignment</a>
                    </div>
                </div>
                <div class="table-responsive mt-2">
                    <table id="tabledata" class="refresh table table-stripped mb-0" data-filtering="true">
                        <thead>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="allCheck" value="" name="">
                            </th>
                            <th>Date & Time</th>
                            <th>Order Number</th>
                            <th>Status</th>
                            <th>Tracking Number</th>
                            <th>Courier</th>
                            <th class="text-center" style="width:150px;">Consignment Note</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <input class="form-check-input subChkOrder" type="checkbox" data-id="{{ $order->awb_id_link }}" id="{{ $order->id }}">
                                </td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->order_number}}</td>
                                <td><a href="{{$order->tracking_url}}" target="_blank">Track Shipment</a></td>
                                <td>{{$order->awb}}</td>
                                <td>{{$order->courier->name}}</td>
                                <td class="text-center"><a class="btn btn-secondary text-white" href="{{$order->awb_id_link}}">Print</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection


@push('onpagescript')
    <script>
        $('#allCheck').on('click', function (e) {
            if($(this).is(':checked',true)) {
                $(".subChkOrder").prop('checked', true);
            } else {
                $(".subChkOrder").prop('checked',false);
            }
        });

        $('.download_bulk').on('click', function(e) {
            e.preventDefault();
            let allVals = [];
            $(".subChkOrder:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });
            if( allVals.length <= 1 ) {
                alert("Please select more than 1 row.");
            } else {            
                    //let join_selected_values = allVals.join(",");
                    $(".subChkOrder:checked").each(function() {
                        window.open($(this).attr('data-id'));
            });
                
            }
        });

    </script>
@endpush
