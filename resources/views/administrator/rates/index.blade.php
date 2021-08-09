@extends('layouts.administrator.main')

@section('page_title', 'Courier Rates')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Courier Rates</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{route('admin.rates.create')}}" class="btn btn-yellow-hub">Add New Rate</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th>Courier</th>
                        <th>Weight(kg)</th>
                        <th>Cost(RM)</th>
                        <th>Hub Rate(RM)</th>
                        <th>Location</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rates as $rate)
                        <tr>
                            <th scope="row">{{$rate->courier->name}}</th>
                            <td>{{$rate->weight}}</td>
                            <td>{{$rate->cost}}</td>
                            <td>{{$rate->hub_cost}}</td>
                            <td>{{$rate->location->name}}</td>
                            <td><a href="{{route('admin.rates.edit',$rate->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
