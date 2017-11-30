@extends('master')

@section('content')

        <div class="col">

              <div class="form-group">
                <strong>Title:</strong> {{$bsits->Title}}
              </div>

              <div class="form-group">
                <strong>Faculty_Involved:</strong>{{$bsits->Faculty_Involved}}
              </div>

              <div class="form-group">
                <strong>Researchers:</strong>{{$bsits->Researchers}}
              </div>

              <div class="form-group">
                <strong>Date Submitted:</strong>{{$bsits->created_at->diffForHumans()}}
              </div>

              <div class="form-group">
                <strong>Abstract:</strong>{{$bsits->Abstract}}
              </div>

        </div>

@endsection
