@extends('master')

@section('content')

{!! Form::open(['method' => 'POST', 'action' => 'ItemController@store']) !!}

<div class="form-group">
  {!! Form::label('Title', 'Title') !!}
  {!! Form::text ('Title',null,['class' => 'form-control','placeholder'=>'Enter a title..','required']) !!}
</div>

<div class="form-group">
  {!! Form::label('Faculty_Involved', 'Faculty_Involved') !!}
  {!! Form::text ('Faculty_Involved',null,['class' => 'form-control','placeholder'=>'Enter Faculty Involved..','required']) !!}
</div>

<div class="form-group">
  {!! Form::label('Researchers', 'Researchers') !!}
  {!! Form::text('Researchers',null,['class' => 'form-control','placeholder'=>'Enter the names of researchers..','required']) !!}
</div>

<div class="form-group">
  {!! Form::label('Abstract', 'Abstract') !!}
  {!! Form::textarea('Abstract',null,['class' => 'form-control','placeholder'=>'Enter the Abstract of the Title..','required']) !!}
</div>

{!!Form::submit('Save',['class'=>'btn btn-success']) !!}

{!! Form::close() !!}

@endsection
