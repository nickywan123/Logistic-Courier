@extends('layouts.administrator.main')

@section('page_title', 'Faq Category')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Faq Category</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{ route('faq-category.create') }}" class="btn btn-yellow-hub">Add New Category</a>
                            <a href="{{ route('faq.index') }}" class="btn btn-yellow-hub">Faq</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th style="max-width:150px;">ID</th>
                        <th>Name</th>
                        <th style="max-width:150px;">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('faq-category.edit', $category) }}" class="btn btn-secondary">Edit</a>
                            <button class="btn btn-danger py-0" onclick="event.preventDefault(); $('#del-category-{{ $category->id }}').submit()"><span class="material-icons">delete</span></button>
                            <form id="del-category-{{ $category->id }}" action="{{ route('faq-category.destroy', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
