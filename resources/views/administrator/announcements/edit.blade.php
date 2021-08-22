@extends('layouts.administrator.main')

@section('page_title', 'Edit Announcement')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">@yield('page_title')</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>

                        </div>
                    </div>
                </div>

                <form action="{{ route('announcements.update', $announcement) }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                    @method('PUT')
                    @include('administrator.announcements.form', ['edit' => true])
                </form>

            </div>
        </div>
    </div>

@endsection