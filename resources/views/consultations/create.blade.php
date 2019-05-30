@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('consultations.store')}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="post">

		<div class="form-group">
			<label for="appointment_date">Appointment Date<span class="required">*</span></label>
			<input type="date" name="appointment_date" placeholder="Appointment date" id="appointment_date" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="appointment_time">Appointment time<span class="required">*</span></label>
			<input type="time" name="appointment_time" placeholder="Appointment time" id="appointment_time" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="description">Description<span class="required">*</span></label>
			<input type="text" name="description" placeholder="description" id="description" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="doctor_id">Doctor<span class="required">*</span></label>
			
			<select name="doctor_id" class="form-control" >
				<option value="1">dr. mat</option>
				
			</select>
		</div>

		<div class="form-group">
			<label for="patient_id">Patient<span class="required">*</span></label>
			
			<select name="patient_id" class="form-control" >
				<option value="1">mati</option>
				
			</select>
		</div>
		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection