@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Side Bar -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('Navigation') }}</div>

                <div class="card-body">
                    <a href="{{ url('#')}}">Upload CSV</a>
                </div>
            </div>
        </div>

        <!-- Main Bar -->
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Coupon Distribution System') }}</div>
                <div class="card-body">
                    {{ __('Please Upload the CSV file') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection