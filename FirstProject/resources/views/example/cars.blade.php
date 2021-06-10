@extends('example.layout')

	@section('page_title')
	<title>Cars</title>
	@stop

				@section('page_heading')
				<h3>Cars</h3>
				@stop

					@section('data_content')
					<thead>
						<tr>
							<th>Brand</th>
							<th>Name</th>
							<th>Model</th>
							<th>Year</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($cars as $car)
							<tr>
								<th>{{ $car['brand'] }}</th>
								<th>{{ $car['name'] }}</th>
								<th>{{ $car['model'] }}</th>
								<th>{{ $car['year'] }}</th>
							</tr>
						@endforeach
					</tbody>
					@stop				