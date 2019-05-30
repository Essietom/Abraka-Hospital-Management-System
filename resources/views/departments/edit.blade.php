@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('departments.update',[$department->id])}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="put">

		<div class="form-group">
			<label for="department"> Name<span class="required">*</span></label>
			<input type="text" name="department" placeholder="department name" id="department" required spellcheck="false" class="form-control" value="{{$department->dept_name}}">
		</div>


		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection