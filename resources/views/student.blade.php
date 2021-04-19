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
                    <form action="/p" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="customFile" name="csv">
                            <label class="custom-file-label pb-2" for="customFile">Choose file</label>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection