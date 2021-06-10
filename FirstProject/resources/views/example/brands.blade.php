@extends('example.layout')
	
	@section('page_title')
	<title>Brands</title>
	@stop
	
				@section('page_heading')
				<h3>Brands</h3>
				@stop

				
					@section('data_content')
					<thead>
						<tr>
							<th>Name</th>
							<th>Country</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($brands as $brand)
							<tr>
								<th>{{ $brand['name'] }}</th>
								<th>{{ $brand['country'] }}</th>
							</tr>
						@endforeach
					</tbody>
					@stop
