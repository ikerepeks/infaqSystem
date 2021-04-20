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
                                <th class="w-50">Name</th>
                                <th class="w-50">Phone</th>
                                <th class="w-50">Validity</th>
                                <th class="w-25">Amount</th>
                            </tr>
                            <tbody id="form_body">
                                <tr>
                                    <td><input type="text" class="form-control" name="name[]"></td>
                                    <td><input type="number" class="form-control" name="phone[]"></td>
                                    <td><input type="date" class="form-control" name="validity[]"></td>
                                    <td><input type="number" class="form-control" name="amount[]"></td>
                                    <td><input type="button" class="btn btn-primary" name="add" id="add" value="Add">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection