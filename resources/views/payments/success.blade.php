@extends('layouts.dashboard.app')

@section('content')
<div class="container" style="position: relative; min-height: 85vh;">
    <div class="card container" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="card-body">
            <h3 class="text-center">
                Thank you! Payment Success!
            </h3>
            <h5 class="text-center">
                Your transaction ID is: {{ $transaction_id }}.
            </h5>
        </div>
    </div>
</div>
@endsection