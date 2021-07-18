@extends('layouts.dashboard.app')

@section('content')


<div class="row">
    <div class="offset-1 col-8">
        <h4 style="font-weight: 700">Order History</h4>      
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Date & Time</th>
                <th scope="col">Order Number</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
              <tr>
                <th scope="row">{{$order->created_at}}</th>
                <td>{{$order->order_number}}</td>
                <td>{{$order->status->name}}</td>
                <td>placeholder</td>         
              </tr>
              @endforeach
            </tbody>
          </table>
        
    </div>
</div>

@endsection

