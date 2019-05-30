@extends('layouts.app')
@section('content')

	<form method="post" action="{{route('departments.store')}}">
	{{csrf_field()}}
		<input type="hidden" name="_method" value="post">

		<div class="form-group">
			<label for="department">Department Name<span class="required">*</span></label>
			<input type="text" name="department" placeholder="Department name" id="department" required spellcheck="false" class="form-control" >
		</div>


		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="submit">
		</div>

	</form>
	}
	}

@endsection