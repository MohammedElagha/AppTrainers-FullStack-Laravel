@extends('layouts.mainLayout')

	@section('page_heading')
	<h1>Students List</h1>
	@stop

					@section('table_content')
					<thead>
						<tr>
							<th>Name</th>
							<th>GPA</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($students as $student)
							<tr>
								<td>{{ $student['name'] }}</td>
								<td>{{ $student['GPA'] }}</td>
							</tr>
						@endforeach
					</tbody>
					@stop
				