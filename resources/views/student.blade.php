@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Side Bar -->
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('Navigation') }}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <td><a href="{{ url('/home')}}">Home</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ url('/student')}}">Manage Student</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Main Bar -->
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Student Management') }}</div>
                <div class="card-body">
                    {{ __('Please Insert Student Information') }}
                    <form action="{{ url('/student/insert') }}" method="post">
                        @csrf

                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Validity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>

                            <tbody id="addRow" class="addRow">

                            </tbody>
                            <tbody>
                                <tr>
                                <td><input type="text" class="form-control" name="name[]"></td>
                                <td><input type="number" class="form-control" name="phone[]"></td>
                                <td><input type="date" class="form-control" name="validity[]"></td>
                                <td><input type="number" class="form-control" name="amount[]"></td>
                                </tr>
                            </tbody>

                        </table>
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection