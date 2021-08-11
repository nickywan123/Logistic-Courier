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
                        <th scope="col">ID</th>
                        <th scope="col">Hub Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">#</th>
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
                            <td><a href="{{route('admin.hubs.edit',$hub->id)}}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
