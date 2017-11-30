@extends('master')

@section('content')

{!! Form::open(['method' => 'POST', 'action' => 'AccountController@store']) !!}

<div class="form-group">
  {!! Form::label('username', 'Username') !!}
  {!! Form::text ('username',null,['class' => 'form-control text-center','placeholder'=>'Enter your Username..','required']) !!}
</div>

<div class="form-group" >
  {!! Form::label('password', 'Password') !!}
  {!! Form::text ('password',null,['class' => 'form-control text-center','placeholder'=>'Enter your password..','required']) !!}
</div>


{!!Form::submit('Save',['class'=>'form-control btn btn-success','type'=>'submit']) !!}


{!! Form::close() !!}
@endsection
