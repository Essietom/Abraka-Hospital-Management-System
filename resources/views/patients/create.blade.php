@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('patients.store')}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="post">

		<div class="form-group">
			<label for="firstname">First Name<span class="required">*</span></label>
			<input type="text" name="firstname" placeholder="First name" id="firstname" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="lastname">Last Name<span class="required">*</span></label>
			<input type="text" name="lastname" placeholder="Last name" id="lastname" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="phone">Phone<span class="required">*</span></label>
			<input type="text" name="phone" placeholder="Phone number" id="phone" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="sex">Sex<span class="required">*</span></label>
			
			<select name="sex" class="form-control" >
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>

		<div class="form-group">
			<label for="dob">Date of Birth<span class="required">*</span></label>
			<input type="text" name="dob" placeholder="Date of birth" id="dob" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="age">Age<span class="required">*</span></label>
			<input type="text" name="age" placeholder="Age" id="age" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="bloodgroup">Blood Group<span class="required">*</span></label>
			<input type="text" name="bloodgroup" placeholder="Blood Group" id="bloodgroup" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="marital_status">Marital status<span class="required">*</span></label>
			<input type="text" name="marital_status" placeholder="Marital status" id="marital_status" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="address">Address<span class="required">*</span></label>
			<input type="text" name="address" placeholder="Address" id="address" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="email">Email<span class="required">*</span></label>
			<input type="text" name="email" placeholder="Email" id="email" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection