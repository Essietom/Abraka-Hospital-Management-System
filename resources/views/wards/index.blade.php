@extends('layouts.app')
@section('content')

<div class="panel panel-primary col-md-12">
	
	<div class="panel-heading"><a class="pull-left btn btn-primary btn-sm" href="/wards/create">Add Ward</a>
	<div>Wards</div>
	</div>

	<div class="panel-body">

<table class="table table-striped">
	<thead class="thead-dark">
		<th scope="col">#</th>
		<th scope="col">Ward name</th>
		<th scope="col">Number of Beds</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
	</thead>
	<tbody>
	@foreach($wards as $ward)
		<tr>
			
			<th scope="row">1</th>
			<td>{{$ward->ward_name}}</td>
			<td>{{$ward->num_of_bed}}</td>
			
			<td><a href="/wards/{{$ward->id}}/edit">Edit</a></td>
			<td>
			<a href="#" onclick="

			var result = confirm('Are you sure you want to delete this ward');
			if(result){
			event.preventDefault();
			document.getElementById('delete-form').submit();
			}
			">Delete


			</a>
			<form id="delete-form" action="{{route('wards.destroy',[$ward->id])}}" method="post" style="display:none;" >
				
			<input type="hidden" name="_method" value="delete">
			{{csrf_field()}}
			</form>
			</td>


			
			
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>


@endsection


