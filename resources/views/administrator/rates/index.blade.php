@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<h3>Courier Rates</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Courier</th>
        <th scope="col">Weight(kg)</th>
        <th scope="col">Cost</th>
        <th scope="col">Location</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rates as $rate)
      <tr>
        <th scope="row">{{$rate->courier->name}}</th>
        <td>{{$rate->weight}}</td>
        <td>{{$rate->cost}}</td>
        <td>{{$rate->location->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $rates->links() }}
@endsection