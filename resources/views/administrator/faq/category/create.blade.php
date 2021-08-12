@extends('layouts.administrator.main')

@section('page_title', 'Faq')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Create Faq Category</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>

                        </div>
                    </div>
                </div>

                <form action="{{ route('faq-category.store') }}" method="POST">
                    @csrf
                    <table id="createFaq" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th class="text-center" style="width:10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="category" name="category[0][name]">
                                @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </td>
                            <td class="text-center">
                                <a href="#0" class="btn btn-info py-0 text-white add-row"><span class="material-icons">add</span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-yellow-hub px-30" value="Submit">
                </form>

            </div>
        </div>
    </div>

@endsection
