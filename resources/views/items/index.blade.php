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
			<a class="btn btn-success" href="{{ route('items.create') }}">Add New Research Title</a>
		</div>
             
	</div>


	<div class="col-md-6 text-left">
		<form action="{{ route('items.index')}}" method="get" class="form-inline">
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
			<th>#</th>
			<th>Research Title</th>
			<th>Faculty Involved</th>
			<th>Researchers</th>
			<th>Date Submitted</th>
		</tr>
	</thead>
</tbody>
@foreach(	$items as $items	)
<tr>

	<th>	{{ $items->id }}								</th>
	<th>	{{ $items->Title }}							</th>
	<th>	{{ $items->Faculty_Involved }}	</th>
	<th>	{{ $items->Researchers }}				</th>
	<th>	{{ $items->created_at }}				</th>
	<th>

		<a class="btn btn-info" href="{{ route('items.show', $items->id) }}">Read</a>
		<a href="public/upload/{{$items->File}}"download="{{$items->File}}">
			<button type="button" class"btn btn-primary">
				<i class="glyphicon glyphicon-download">
					Download
				</i>
			</button>
		</a>
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
