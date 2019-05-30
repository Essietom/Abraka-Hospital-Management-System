@extends('layouts.app')
@section('content')

<div class="panel panel-primary col-md-12">
	
	<div class="panel-heading"><a class="pull-left btn btn-primary btn-sm" href="/departments/create">Add Department</a>
	<div>Departments</div>
	</div>

	<div class="panel-body">

<table class="table table-striped">
	<thead class="thead-dark">
		<th scope="col">#</th>
		<th scope="col">Department name</th>
		
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
	</thead>
	<tbody>
	@foreach($departments as $department)
		<tr>
			
			<th scope="row">1</th>
			<td>{{$department->dept_name}}</td>
			
			<td><a href="/departments/{{$department->id}}/edit">Edit</a></td>
			<td>
			<a href="#" onclick="

			var result = confirm('Are you sure you want to delete this department');
			if(result){
			event.preventDefault();
			document.getElementById('delete-form').submit();
			}
			">Delete


			</a>
			<form id="delete-form" action="{{route('departments.destroy',[$department->id])}}" method="post" style="display:none;" >
				
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


