@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Student Management') }}</div>
                <div class="card-body">
                    {{ __('Please Insert Student Information') }}

                    <form action="{{ url('/student/insert') }}" method="post" id="dynamic_form">
                        @csrf
                        <table class="table table-sm table-bordered">
                            <tr>
                                <th class="w-auto">Name</th>
                                <th class="w-auto">Phone</th>
                                <th class="w-auto">Validity</th>
                                <th class="w-auto">Amount (RM)</th>
                            </tr>
                            <tbody id="form_body">
                                <tr>
                                    <td><input type="text" class="form-control" name="name[]" required></td>
                                    <td><input type="number" class="form-control" name="phone[]" required></td>
                                    <td><input type="date" class="form-control" name="validity[]" required></td>
                                    <td><input type="number" class="form-control" name="amount[]" required></td>
                                    <td><input type="button" class="btn btn-primary" name="add" id="add" value="Add">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="button" class="btn btn-danger" name="remove" id="remove" value="Remove Last Row">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection