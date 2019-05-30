@extends('layouts.app')
@section('content')


<table class="table table-striped">
	<thead class="thead-dark">
		<th scope="col">#</th>
		<th scope="col">First name</th>
		<th scope="col">Last name</th>
		<th scope="col">Phone</th>
		<th scope="col">Sex</th>
	</thead>
	<tbody>
		<tr>
			@foreach($patients as $patient)
			<th scope="row">1</th>
			<td>{{$patient->firstname}}</td>
			<td>{{$patient->lastname}}</td>
			<td>{{$patient->phone_num}}</td>
			<td>{{$patient->sex}}</td>

			@endforeach
			
		</tr>
	</tbody>
</table>
@endsection


