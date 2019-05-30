@extends('layouts.app')
@section('content')

<div class="panel panel-primary col-md-12">
	
	<div class="panel-heading"><a class="pull-left btn btn-primary btn-sm" href="/appointments/create">Add Appointment</a>
	<div>Appointments</div>
	</div>

	<div class="panel-body">

<table class="table table-striped">
	<thead class="thead-dark">
		<th scope="col">#</th>
		<th scope="col">Appointment date</th>
		<th scope="col">Appointment Time</th>
		<th scope="col">Doctor</th>
		<th scope="col">Patient</th>
		<th scope="col">Description</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
	</thead>
	<tbody>
	@foreach($appointments as $appointment)
		<tr>
			
			<th scope="row">1</th>
			<td>{{$appointment->appointment_date}}</td>
			<td>{{$appointment->appointment_time}}</td>
			<td>{{$appointment->doctor_id}}</td>
			<td>{{$appointment->patient_id}}</td>
			<td><a href="/appointments/{{$appointment->id}}/edit">Edit</a></td>
			<td>
			<a href="#" onclick="

			var result = confirm('Are you sure you want to delete this appointment');
			if(result){
			event.preventDefault();
			document.getElementById('delete-form').submit();
			}
			">Delete


			</a>
			<form id="delete-form" action="{{route('appointments.destroy',[$appointment->id])}}" method="post" style="display:none;" >
				
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


