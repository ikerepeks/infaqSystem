@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Coupon Distribution System') }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="h1">Total Student:</div>
                                <div class="h2">{{ $numStudent }}</div>
                            </div>
                            <div class="col-6">
                                <div class="h1">Total Balance:</div>
                                <div class="h2">RM{{ $totalamount }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row text-center pt-5">
                            <div class="col h3">List of Student</div>
                        </div>
                        <div class="row">
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Code</th>
                                    <th>Validity</th>
                                    <th>Amount</th>
                                    <th>Spent</th>
                                </tr>
                            @foreach ($student as $key => $data)
                                <tr>
                                    <td>{{ $data-> id }}</td>
                                    <td>{{ $data-> name }}</td>
                                    <td>0{{ $data-> phone }}</td>
                                    <td>{{ $data-> code }}</td>
                                    <td>{{ $data-> validity }}</td>
                                    <td>{{ $data-> amount }}</td>
                                    <td>{{ $data-> spent }}</td>
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