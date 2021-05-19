@extends('layouts.usernav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Purchase History for')}} {{$student->name}}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center pt-5">
                            <div class="col h3">History of Purchase</div>
                        </div>
                        <div class="row">
                        <table class="table table-sm table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Vendor Name</th>
                                    <th>Amount</th>
                                    <th>Purchased At</th>
                                </tr>
                            @foreach ($history as $key => $data)
                                <tr>
                                    <td>{{ $data-> id }}</td>
                                    <td>{{ $data-> vendor-> name}}</td>
                                    <td>{{ $data-> amount }}</td>
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