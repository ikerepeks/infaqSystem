@extends('layouts.app')

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
                            <div class="col h3">Edit Student Information</div>
                        </div>
                        <div class="row">
                            <div class="col">

                            <!-- Form for edit input -->
                            <form action="/student/update/{{ $student->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $student->name }}" id="name"
                                        name="name" />
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="0{{ $student->phone }}" id="phone"
                                        name="phone" />
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" value="{{ $student->code }}" id="code"
                                        name="code" readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Valid Until:</label>
                                    <input type="date" class="form-control" value="<?php echo strftime('%Y-%m-%d',
                                    strtotime($student->validity));?>" id="date" name="validity" />
                                </div>
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="text" class="form-control" value="{{ $student->amount }}"
                                        id="amount" name="amount"/>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary" value="Edit">
                                </div>
                            </form>

                            <!-- Simple form for delete button -->
                            {{ Form::open(['method'  => 'DELETE', 'route' => ['delete', $student->id]]) }}
                            {{ Form::button('Delete', array('type' => 'submit', 'class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection