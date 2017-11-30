@extends('master2')

@section('content')

<div class="col">

  <div class="form-group">
    <strong>Title:</strong>          {{$records->Title}}
  </div><br>

  <div class="form-group">
    <strong>Faculty Involved:</strong>          {{$records->Faculty}}
  </div><br>

  <div class="form-group">
    <strong>Researchers:</strong>               {{$records->Researcher}}
  </div><br>

  <div class="form-group">
    <strong>Year Submitted:</strong>            {{$records->created_at}}
  </div><br>

  <div class="form-group">
    <strong>Abstract:</strong><br><br>            {{$records->Abstract}}
  </div>


</div>

@endsection
