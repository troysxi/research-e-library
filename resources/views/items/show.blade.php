@extends('master')

@section('content')

<div class="col">
  
  <div class="form-group">
    <strong>Title:</strong>             {{$items->Title}}
  </div>

  <div class="form-group">
    <strong>Faculty_Involved:</strong>  {{$items->Faculty_Involved}}
  </div>

  <div class="form-group">
    <strong>Researchers:</strong>       {{$items->Researchers}}
  </div>

  <div class="form-group">
    <strong>Date Submitted:</strong>    {{$items->created_at->diffForHumans()}}
  </div>

  <div class="form-group">
    <strong>Abstract:</strong>          {{$items->Abstract}}
  </div>

</div>

@endsection
