@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('wards.store')}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="post">

		<div class="form-group">
			<label for="ward">Ward Name<span class="required">*</span></label>
			<input type="text" name="ward" placeholder="Ward name" id="ward" required spellcheck="false" class="form-control" >
		</div>

		<div class="form-group">
			<label for="num_of_bed">Number of bed<span class="required">*</span></label>
			<input type="number" name="num_of_bed" placeholder="num of bed" id="num_of_bed" required spellcheck="false" class="form-control" >
		</div>


		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection