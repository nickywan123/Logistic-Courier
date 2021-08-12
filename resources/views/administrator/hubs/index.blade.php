@extends('layouts.administrator.main')

@section('page_title', 'Hubs')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">List of Fuiyoh Hubs</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{route('admin.hubs.create')}}" class="btn btn-yellow-hub">Register New Hub</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hub Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postcode</th>
                        <th class="text-center">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hubs as $hub)
                        <tr>
                            <td>{{ $hub->id }}</td>
                            <td>{{ $hub->hub_name }}</td>
                            <td>{{ $hub->email }}</td>
                            <td>{{$hub->address}}</td>
                            <td>{{ $hub->city }}</td>
                            <td>{{$hub->state  }}</td>
                            <td>{{$hub->postcode}}</td>
                            <td class="text-center"><a href="{{route('admin.hubs.edit',$hub->id)}}" class="btn btn-secondary">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
