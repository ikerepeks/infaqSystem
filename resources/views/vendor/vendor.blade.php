@extends('layouts.vendornav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Coupon Vendor Page') }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-12">
                                <div class="h1">Money Spent:</div>
                                <div class="h2">RM{{ $totalamount }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row text-center pt-5">
                            <div class="col h3">List of Transaction</div>
                        </div>
                        <div class="row">
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Code</th>
                                    <th>Amount</th>
                                    <th>Created At</th>
                                </tr>
                            @foreach ($transaction as $key => $data)
                                <tr>
                                    <td>{{ $data-> id }}</td>
                                    <td>{{ $data-> code }}</td>
                                    <td>0{{ $data-> amount }}</td>
                                    <td>{{ $data-> created_at }}</td>
                                </tr>
                            @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection