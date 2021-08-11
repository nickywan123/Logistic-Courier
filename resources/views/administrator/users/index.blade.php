@extends('layouts.administrator.main')

@section('page_title', 'Administrator')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">List of all users</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{route('admin.users.create')}}" class="btn btn-yellow-hub">Register New User</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Credit(RM)</th>
                        <th scope="col">Date Registered</th>
                        <th scope="col">Status</th>
                        <th scope="col">Role</th>
                        <th scope="col">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->userInfo->credit}}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->email_verified_at ? 'Verified' : 'Unverified'  }}</td>
                            <td>
                                @forelse($user->getRoleNames() as $role)
                                {{$role}}
                                @if(!$loop->last)
                                 +
                                @endif
                                @empty
                                customer
                                @endforelse
                            </td>
                            <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
