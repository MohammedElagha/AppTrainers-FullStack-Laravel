@extends('layouts.form_layout')

	@section('page_heading')

	@stop

					@section('form_content')

					<a href="{{ URL('student') }}">Go to Students</a>
					
					<form method="POST" action="{{ URL('student/update/' . $student->id) }}" enctype="">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" value="{{ $student->name }}">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="{{ $student->email }}">
						</div>

						<div class="form-group">
							<label>GPA</label>
							<input type="text" name="gpa" class="form-control" value="{{ $student->gpa }}">
						</div>

						<button class="btn btn-primary" type="submit">Save</button>

					</form>
					
					@stop