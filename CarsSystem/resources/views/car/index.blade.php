@extends('layouts.mainLayout')

	@section('page_heading')

	@stop

					@section('table_content')
					
					<thead>
						<tr>
							<th>Brand</th>
							<th>Company</th>
							<th>Model</th>
							<th>Color</th>
							<th>Owner</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>

					<body>
						@foreach ($cars as $car)
							<tr>
								<td>{{ $car->brand }}</td>
								<td>{{ $car->company }}</td>
								<td>{{ $car->model }}</td>
								<td>{{ $car->color }}</td>
								<td>{{ $car->owner_name }}</td>
								<td><a href="{{ URL('car/edit/' . $car->id) }}">edit</a></td>
								<td>
									<form method="POST" action="{{ URL('car/delete/' . $car->id) }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button class="btn btn-danger" type="submit">delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</body>
					
					@stop
				