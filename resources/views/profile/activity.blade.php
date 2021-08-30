@extends('layouts.dashboard.app')


@section('content')

 <div class="container">
     <div class="row">
         <div class="col-md-8 offset-md-1">
            <div class="pb-2 mt-4 mb-3 border-bottom">
              <div class="row">
                <div class="col-md-6">
                 <h2>Latest Activity Feed</h2>
                </div>
              </div>
            </div>
            @forelse($activities as $activity)
             
              <div class="card mb-4">
                <div class="card-header">
                    <div class="level">
                      <span class="flex">
                        {{$activity->created_at}}
                      </span>
                    </div>
                </div>
                <div class="card-body">
                    {{$activity->description}}
                </div>
            </div>
            @empty 
              <p>There are no activities in your feed....</p>
            @endforelse
        </div>
     </div>
</div>

@endsection