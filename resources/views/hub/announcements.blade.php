@extends('layouts.dashboard.app')

@section('page_title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Announcements</h2>
                    </div>
                    <div class="">

                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th class="w-25">Title</th>
                        <th></th>
                        <th>Time | Date</th>
                        <th>Attachment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $key => $announcement)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $announcement->title }}</td>
                            <td>{!! $announcement->description !!}</td>
                            <td>{{ date('D d/m/Y', strtotime($announcement->created_at)) }}</td>
                            <td>
                                @isset($announcement->attachment)
                                    <a class="mt-15" target="_blank" href="{{ asset('assets/images/upload/'.$announcement->attachment) }}">See attachment</a>
                                @endisset
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
