@extends('layouts.administrator.main')

@section('page_title', 'Faq')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Faq</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{ route('faq.create') }}" class="btn btn-yellow-hub">Add New Faq</a>
                            <a href="{{ route('faq-category.index') }}" class="btn btn-yellow-hub">Category</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Question</th>
                        <th class="w-50">Answer</th>
                        <th class="text-center" style="width:150px;">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->categories->name }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{!! $faq->answer !!}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('faq.edit', $faq) }}" class="btn btn-secondary text-white">Edit</a>
                                <button class="btn btn-danger" onclick="event.preventDefault(); $('#del-faq-{{ $faq->id }}').submit()"><i data-feather="trash-2"></i></button>
                                <form action="{{ route('faq.destroy', $faq) }}" id="del-faq-{{ $faq->id }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
