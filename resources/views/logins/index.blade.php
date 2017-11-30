@extends('master')

@section('content')

<!-- Flash Message -->
@if (Session::has('flash_message'))
<div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif


<div class = "row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<strong>Research Titles</strong>
		</div>

		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('logins.create')}}">Add New Account</a>
		</div>

	</div>


	<div class="col-md-6 text-left">
		<form action="{{ route('logins.index')}}" method="get" class="form-inline">
			<div class="form-group">
				<input type="search" class="form-control" name="search" placeholder="Keyword" id="search" style="width:300px; height:40px;">
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit">Search</button>
			</div>
		</form>
	</div>

	<br>
	<br>
	<br>

</div>
<table class = "table">

	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Action</th>

		</tr>
	</thead>
</tbody>
@foreach(	$logins as $login )
<tr>

	<th>	{{ $login->id }}								</th>
	<th>	{{ $login->username }}					</th>
	<th>

		<a class="btn btn-info" href="{{route('logins.edit')}}">Edit</a>
		<a class="btn btn-danger" href="">Delete</a>
	</th>
</tr>
@endforeach

<script type="text/javascript">
$(#search).on('keyup',function(){
	var value=$(this).val();
	$ajax({
		type : 'get',
		url	 :	'{{URL::to('items.search')}}',
		data :	{'search':value},
		success:function(data){
			$('tbody').html(data);
		}
	});
})
</script>

</tbody>
</table>
@endsection
