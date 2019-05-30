@extends('layouts.app')
@section('content')

<div class="panel panel-primary col-md-12">
	
	<div class="panel-heading"><a class="pull-left btn btn-primary btn-sm" href="/staffs/create">Add Staff</a>
	<div>Staff</div>
	</div>

	<div class="panel-body">

<table class="table table-striped">
	<thead class="thead-dark">
		<th scope="col">#</th>
		<th scope="col">First name</th>
		<th scope="col">Last name</th>
		<th scope="col">Phone</th>
		<th scope="col">Sex</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
	</thead>
	<tbody>
	@foreach($staffs as $staff)
		<tr>
			
			<th scope="row">1</th>
			<td>{{$staff->firstname}}</td>
			<td>{{$staff->lastname}}</td>
			<td>{{$staff->phone_num}}</td>
			<td>{{$staff->sex}}</td>
			<td><a href="/staffs/{{$staff->id}}/edit">Edit</a></td>
			<td>
			<a href="#" onclick="

			var result = confirm('Are you sure you want to delete this staff');
			if(result){
			event.preventDefault();
			document.getElementById('delete-form').submit();
			}
			">Delete


			</a>
			<form id="delete-form" action="{{route('staffs.destroy',[$staff->id])}}" method="post" style="display:none;" >
				
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


