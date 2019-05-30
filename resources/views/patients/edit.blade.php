@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('patients.update',[$patient->id])}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="put">

		<div class="form-group">
			<label for="firstname">First Name<span class="required">*</span></label>
			<input type="text" name="firstname" placeholder="First name" id="firstname" required spellcheck="false" class="form-control" value="{{$patient->firstname}}">
		</div>

		<div class="form-group">
			<label for="lastname">Last Name<span class="required">*</span></label>
			<input type="text" name="lastname" placeholder="Last name" id="lastname" required spellcheck="false" class="form-control" value="{{$patient->lastname}}">
		</div>

		<div class="form-group">
			<label for="phone">Phone<span class="required">*</span></label>
			<input type="text" name="phone" placeholder="Phone number" id="phone" required spellcheck="false" class="form-control" value="{{$patient->phone_num}}">
		</div>

		<div class="form-group">
			<label for="sex">Sex<span class="required">*</span></label>
			
			<select name="sex" class="form-control" value="{{$patient->sex}}">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>

		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection