@extends('master')

@section('content')

{!! Form::open(['method' => 'POST', 'action' => 'RecordController@store']) !!}

<div class="form-group">
  {!! Form::label('Title', 'Title') !!}
  {!! Form::text ('Title',null,['class' => 'form-control text-center','placeholder'=>'Enter a title..','required']) !!}
</div>

<div class="form-group" >
  {!! Form::label('Faculty', 'Faculty Involved') !!}
  {!! Form::text ('Faculty',null,['class' => 'form-control text-center','placeholder'=>'Enter Faculty Involved..','required']) !!}
</div>

<div class="form-group">
  {!! Form::label('Researcher', 'Researcher') !!}
  {!! Form::text('Researcher',null,['class' => 'form-control text-center','placeholder'=>'Enter the names of researchers..','required']) !!}
</div>

<div class="form-group text-center">
  {!! Form::label('Abstract', 'Abstract Of Research Title') !!}
  {!! Form::textarea('Abstract',null,['class' => 'form-control text-center','placeholder'=>'Enter the Abstract of the Title..','required']) !!}
</div>

<div class="form-group">
  {!! Form::label('created_at', 'Year') !!}
  {!! Form::input('date','created_at',date('Y-m-d'),['class' => 'form-control text-center','placeholder'=>'Enter the Year Submitted','required']) !!}
</div>

{!!Form::submit('Save',['class'=>'form-control btn btn-success','type'=>'submit']) !!}


{!! Form::close() !!}
@endsection
