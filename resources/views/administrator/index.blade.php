@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<h3>List of all users</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date Registered</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection