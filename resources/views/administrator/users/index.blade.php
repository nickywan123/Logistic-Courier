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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Credit(RM)</th>
                        <th>Date Registered</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th class="text-center" style="width:150px;">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->userInfo->credit }}</td>
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
                            <td class="text-center"><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-secondary">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
