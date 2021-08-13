@extends('layouts.administrator.main')

@section('page_title', 'Faq Edit')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Edit Faq</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="#" class="btn btn-yellow-hub">Add New Faq</a>
                            <a href="{{ route('faq-category.index') }}" class="btn btn-yellow-hub">Category</a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('faq-category.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="" name="name" value="{{ $category->name }}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
