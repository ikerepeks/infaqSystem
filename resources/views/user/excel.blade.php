@extends('layouts.usernav')

@section('content')  
<div class="container">
  <div class="row justify-content-center">
      <!-- Main Bar -->
      <div class="col-md">
          <div class="card">
              <div class="card-header">{{ __('Upload/Download People List Excel') }}</div>
              <div class="card-body">
                  <div class="container">
                      <div class="row pb-5 justify-content-center">
                        <a href="{{ route('exportExcel', 'xls') }}" class="pr-2"><button class="btn btn-success">Download Excel xls</button></a>
                        <a href="{{ route('exportExcel', 'xlsx') }}" class="pr-2"><button class="btn btn-success">Download Excel xlsx</button></a>
                        <a href="{{ route('exportExcel', 'csv') }}" class="pr-2"><button class="btn btn-success">Download CSV</button></a>
                      </div>
                      <div class="row justify-content-center">
                        <span class="rounded border border-primary p-2">
                        <form action="{{ route('importExcel') }}" class="form-group" method="post" enctype="multipart/form-data">
                          @csrf
                          <input type="file" name="import_file"/>
                          <button class="btn btn-primary">Import File</button>
                      </form>
                    </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @if($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <strong>Success!</strong> {{ $message }}
        </div>
    @endif
    {!! Session::forget('success') !!}
</div>
@endsection

