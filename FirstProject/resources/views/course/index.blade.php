@extends('layouts.mainLayout')

	@section('page_heading')
	<h1>Courses List</h1>
	@stop

					@section('table_content')
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Credit</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($courses as $course)
							<tr>
								<td>{{ $course['id'] }}</td>
								<td>{{ $course['name'] }}</td>
								<td>{{ $course['credit'] }}</td>
							</tr>
						@endforeach
					</tbody>
					@stop
				