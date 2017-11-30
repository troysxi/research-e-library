@extends('master')

@section('content')

  <div class="panel-body">
    <div class="form-group text-center">
      <a href="{{ route('record.create') }}">
        <button type="button" class="btn btn-info pull-right">Add New File</button>
      </a>

      <br><br>
      <div class="row">
        <div class="col-md-12">
          {!! Form::open(['url' => 'file/search', 'method' => 'get']) !!}
            <input class="form-control" type ="text" name="q" placeholder="Search Title ...."></input><br>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    @if(request()->has('q'))

    <div class="table-responsive">

      <table class="table table-hover table-bordered table-condensed text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Size</th>
            <th>Date Uploaded</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($files as $files)
          <tr>
            <th>{{ $files->id }}</th>
            <td>{{ $files->name }}</td>
            <td>{{ $files->size }}</td>
            <td>{{ $files->created_at }}</td>

            <td>
              <a href="public/upload/{{$files->name}}"download="{{$files->name}}">
                <button type="button" class="btn btn-primary">
                  <i class="glyphicon glyphicon-download">
                    Download
                  </i>
                </button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>

      </table>

    </div>
    @endif
  </div>
@endsection
