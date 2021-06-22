@extends('layouts.form_layout')

	@section('page_heading')

	@stop

					@section('form_content')
					
					<form method="POST" action="{{ URL('owner/store') }}" enctype="">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
						<div class="form-group">
							<label>name</label>
							<input type="text" name="name" class="form-control">
						</div>

						<div class="form-group">
							<label>car</label>
							
							<select name="car_id">
								@foreach ($cars as $car)
									<option value="{{ $car->id }}">{{ $car->model }} - {{ $car->color }}</option>
								@endforeach
							</select>
						</div>

						<button class="btn btn-primary" type="submit">Save</button>

					</form>
					
					@stop