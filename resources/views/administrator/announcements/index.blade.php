@extends('layouts.administrator.main')

@section('page_title', 'Announcement')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">Announcements</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-start justify-content-end">
                        <div>
                            <a href="{{ route('announcements.create') }}" class="btn btn-yellow-hub">Add Announcement</a>
                            <a href="#" class="btn btn-danger delete_all" data-url="{{ route('admin.announcement.delete') }}">Delete Selection</a>
                        </div>
                    </div>
                </div>

                <table class="refresh table table-stripped mb-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>
                            <input class="form-check-input" type="checkbox" id="masterCheck" value="" name="">
                        </th>
                        <th>Hub</th>
                        <th class="w-25">Title</th>
                        <th>Time | Date</th>
                        <th>Attachment</th>
                        <th class="text-center" style="width:150px;">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $key => $announcement)
                        <tr>
                            <td>{{ $announcement[0]->id }}</td>
                            <td>
                                <input class="form-check-input subChk" type="checkbox" data-id="{{ $announcement[0]->id }}" id="{{ $announcement[0]->id }}">
                            </td>
                            <td>
                                @if(count($announcement) > 2)
                                    ALL HUB
                                @else
                                {{ $announcement[0]->hub->hub_name }}
                                @endif
                            </td>
                            <td>{{ $announcement[0]->title }}</td>
                            <td>{{ date('h:iA | D d/m/Y', strtotime($announcement[0]->created_at)) }}</td>
                            <td>
                                @isset($announcement[0]->attachment)
                                    <a href="{{ asset('assets/images/upload/'.$announcement[0]->attachment) }}" class="btn btn-outline-success" target="_blank">View Attachment</a>
                                @endisset
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('announcements.edit', $announcement[0]->id) }}" class="btn btn-secondary text-white">Edit</a>
                                    <button class="btn btn-danger" onclick="event.preventDefault(); $('#del-announcement-{{ $announcement[0]->id }}').submit()"><i data-feather="trash-2"></i></button>
                                    <form action="{{ route('announcements.destroy', $announcement[0]->id) }}" id="del-announcement-{{ $announcement[0]->id }}" method="POST" class="d-none" onsubmit="return confirm('Do you really want to delete this?');">
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

@push('onpagescript')
    <script>
        $('#masterCheck').on('click', function (e) {
            if($(this).is(':checked',true)) {
                $(".subChk").prop('checked', true);
            } else {
                $(".subChk").prop('checked',false);
            }
        });

        $('.delete_all').on('click', function(e) {
            e.preventDefault();
            let allVals = [];
            $(".subChk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });
            if( allVals.length <= 1 ) {
                alert("Please select more than 1 row.");
            } else {
                let check = confirm("Are you sure you want to delete this row?");
                if( check === true ){
                    let join_selected_values = allVals.join(",");
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if(data['success']) {
                                $(".subChk:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });

    </script>
@endpush
