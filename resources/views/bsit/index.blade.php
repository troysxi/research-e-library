@extends('master')

@section('content')

	<br><br>
	@if (Session::has('flash_message'))
		<div class="alert alert-success">{{Session::get('flash_message')}}</div>
	@endif
	<div class = "row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h5>BSIT Students Research Titles</h5>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('bsit.create') }}">Add New Research Title</a>
			</div>
		</div>
	</div>
     <table class = "table">
     	<thead>
     		<tr>
     			<th>#</th>
     			<th>Research Title</th>
     			<th>Faculty Involved</th>
     			<th>Name Of Researchers</th>
     			<th>Date Submitted</th>

     		</tr>
     	</thead>

     	<tbody>
     		@foreach($bsits as $bsits)
     		<tr>
     			<th>{{ $bsits->id }}</th>
     			<td>{{ $bsits->Title }}</td>
     			<td>{{ $bsits->Faculty_Involved }}</td>
     			<td>{{ $bsits->Researchers }}</td>
     			<td>{{ $bsits->created_at }}</td>
     			<th>
     				<td>
     				<a class="btn btn-info" href="{{route('bsit.show',$bsits->id)}}">Show</a>
     				<a class="btn btn-primary" href="">Edit</a>
     				</td>
     			</th>
     		</tr>
     		@endforeach
     	</tbody>

     </table>
@endsection
