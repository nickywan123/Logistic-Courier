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
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control"  value="{{$user->name}}"  required>
                                @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" name="email" class="form-control"  value="{{$user->email}}" readonly required>
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label" for="credit">Credit Balance(RM)</label>
                                <input type="text" name="credit" class="form-control"  value="{{$user->userInfo->credit}}"  required>
                                @error('credit')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0">
                        <button type="submit" class="btn btn-yellow-hub px-30">Update Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
