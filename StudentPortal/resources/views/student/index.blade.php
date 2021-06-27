@extends('layouts.mainLayout')

	@section('page_heading')

	@stop

					@section('table_content')

					<a href="{{ URL('student/create') }}">Add New Student</a>
					
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>GPA</th>
							<th>Collage</th>
							<td>Create Date</td>
							<th>edit</th>
							<th>delete</th>
						</tr>
					</thead>

					<body>
						@foreach ($students as $student)
							<tr>
								<td>{{ $student->name }}</td>
								<td>{{ $student->email }}</td>
								<td>{{ $student->gpa }}</td>
								<td>{{ $student->collage->name }}</td>
								<td>{{ $student->created_at }}</td>
								<td><a href="{{ URL('student/edit/' . $student->id) }}">edit</a></td>
								<td>
									@if (is_null($student->deleted_at))
										<form method="POST" action="{{ URL('student/delete/' . $student->id) }}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button class="btn btn-danger" type="submit">delete</button>
										</form>
									@else
										<form method="POST" action="{{ URL('student/restore/' . $student->id) }}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button class="btn btn-danger" type="submit">restore</button>
										</form>
									@endif
								</td>
							</tr>
						@endforeach
					</body>
					
					@stop
				