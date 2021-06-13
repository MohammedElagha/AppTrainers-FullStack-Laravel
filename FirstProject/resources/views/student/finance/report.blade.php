@extends('layouts.mainLayout')

	@section('page_heading')
	<h1>Students List</h1>
	@stop

					@section('table_content')
					<thead>
						<tr>
							<th>Month</th>
							<th>Payed</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($report as $month => $payed)
							<tr>
								<td>{{ $month }}</td>
								<td>{{ $payed }} $</td>
							</tr>
						@endforeach
					</tbody>
					@stop
