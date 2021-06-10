<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		#grades-heading {
			color: blue;
			font-weight: bold;
		}
	</style>

	@php
	$boostrap_js = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css';
	@endphp

	<link rel="stylesheet" type="text/css" href="{{ $boostrap_js }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/my_style.css') }}">
</head>
<body>
	<h1 style="color: green; font-family: sans-serif;">Student Grades</h1>

	<h2>Name: {{ $name }} </h2>
	<h2>GPA: {{ $GPA }}</h2>

	<h2 id="grades-heading">Grades:</h2>

	<button class="btn btn-primary">SAVE</button>

	<table>
		<tbody>


			@foreach ($grades as $course => $mark)
				<tr>
					<td>{{$course}}</td>
					<td>{{$mark}}</td>

					<td>
						@if ($mark >= 90)
							<mark>A</mark>
						@elseif ($mark >= 80 && $mark < 90)
							<mark>B</mark>
						@elseif ($mark >= 70 && $mark < 80)
							<mark>C</mark>
						@elseif ($mark >= 60 && $mark < 70)
							<mark>D</mark>
						@else
							<mark>F</mark>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>


<script type="text/javascript">
	alert("hello");
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="{{ asset('js/my_js.js') }}"></script>
</html>