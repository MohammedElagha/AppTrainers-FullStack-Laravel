@extends('layouts.mainLayout')

	@section('page_heading')

	@stop

					@section('table_content')

					<style type="text/css">
						.btn-danger {
							background-color: blue !important;
						}
					</style>

					<a href="{{ URL('student/create') }}">Add New Student</a>
					
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Email</th>
							<th>GPA</th>
							<th>Collage</th>
							<th>Create Date</th>
							<th>Courses</th>
							<th>edit</th>
							<th>delete</th>
						</tr>
					</thead>

					<body>
						@foreach ($students as $student)
							<tr>
								<td><img src="{{ $student->picture }}" width="50px"></td>
								<td>{{ $student->name }}</td>
								<td>{{ $student->email }}</td>
								<td>{{ $student->gpa }}</td>

								<td>
									@if (!is_null($student->collage))
										{{ $student->collage->name }}
									@endif
								</td>

								<td>{{ $student->created_at }}</td>

								<td>
									<ul>
										@foreach ($student->registered_courses as $registered_course)
											<li>{{ $registered_course->course->name }}</li>
										@endforeach
									</ul>
								</td>

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
				