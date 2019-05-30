@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('wards.update',[$ward->id])}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="put">

		<div class="form-group">
			<label for="ward"> Name<span class="required">*</span></label>
			<input type="text" name="ward" placeholder="ward name" id="ward" required spellcheck="false" class="form-control" value="{{$ward->ward_name}}">
		</div>

		<div class="form-group">
			<label for="num_of_bed"> No of Bed<span class="required">*</span></label>
			<input type="number" name="num_of_bed" placeholder="number of bed" id="num_of_bed" required spellcheck="false" class="form-control" value="{{$ward->num_of_bed}}">
		</div>


		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection