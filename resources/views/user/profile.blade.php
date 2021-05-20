@extends('layouts.usernav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Main Bar -->
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Manage User Profile') }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center pt-5">
                            <div class="col h3">Edit User Information</div>
                        </div>
                        <div class="row">
                            <div class="col">

                            <!-- Form for edit input -->
                            <form action="/student/profile/{{ $user->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" id="name"
                                        name="name" readonly/>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" value="{{ $user->email }}" id="email"
                                        name="email" readonly/>
                                </div>
                                <div class="mb-3">
                                    <label for="prefix" class="form-label">Prefix</label>
                                    <input type="text" class="form-control" value="{{ $user->prefix }}" id="prefix"
                                        name="prefix"/>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary" value="Edit">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection