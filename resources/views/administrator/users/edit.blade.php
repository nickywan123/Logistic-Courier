@extends('layouts.administrator.main')

@section('page_title', 'Edit User')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Edit User Information</h2>
                    </div>
                </div>
                <form action="{{route('admin.users.update',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-2">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control"  value="{{$user->name}}"  required>
                      @error('name')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group mt-2">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control"  value="{{$user->email}}" readonly required>
                      @error('email')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group mt-2">
                      <label for="credit">Credit Balance(RM)</label>
                      <input type="text" name="credit" class="form-control"  value="{{$user->userInfo->credit}}"  required>
                      @error('credit')
                      <div class="ps-25 invalid-feedback d-block">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Information</button>
                  </form>       
            </div>
        </div>
    </div>

@endsection
