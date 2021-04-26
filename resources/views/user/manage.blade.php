@extends('layouts.usernav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Manage Student') }}</div>
                <div class="card-body">
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
                                    <td><a href="/student/edit/{{ $data->id }}">Edit</a></td>
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