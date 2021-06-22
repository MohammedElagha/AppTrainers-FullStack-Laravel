@extends('layouts.mainLayout')

	@section('page_heading')

	@stop

					@section('table_content')
					
					<thead>
						<tr>
							<th>Name</th>
							<th>Brand</th>
						</tr>
					</thead>

					<body>
						@foreach ($owners as $owner)
							<tr>
								<td>{{ $owner->name }}</td>
								<td>{{ $owner->car_brand }}</td>
							</tr>
						@endforeach
					</body>
					
					@stop
				