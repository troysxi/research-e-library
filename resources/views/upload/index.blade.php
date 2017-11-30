@extends('master')

@section('content')
<body>

  <div class="panel-body">
    <div class="form-group text-center">
      <a href="{{ route('record.create') }}">
        <button type="button" class="btn btn-info pull-right">Add New File</button>
      </a>

      <br><br>
      <form action='{{url('file/search')}}' method="post">
        <input class="form-control" type ="text" name="files" placeholder="Search Title ...."></input><br>
        <input type ="hidden" name="_token" value="{{ csrf_token() }}"></input>
      </form>
    </div>
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
  </div>
</body>
@endsection
