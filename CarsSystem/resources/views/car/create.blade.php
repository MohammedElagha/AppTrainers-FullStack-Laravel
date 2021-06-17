@extends('layouts.form_layout')

	@section('page_heading')

	@stop

					@section('form_content')
					
					<form method="POST" action="{{ URL('car/store/' . $id) }}" enctype="">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
						<div class="form-group">
							<label>Brand</label>
							<input type="text" name="brand" class="form-control">
						</div>

						<div class="form-group">
							<label>Company</label>
							<input type="text" name="company" class="form-control">
						</div>

						<div class="form-group">
							<label>Model</label>
							<input type="text" name="model" class="form-control">
						</div>

						<div class="form-group">
							<label>Color</label>
							<input type="text" name="color" class="form-control">
						</div>

						<button class="btn btn-primary" type="submit">Save</button>

					</form>
					
					@stop