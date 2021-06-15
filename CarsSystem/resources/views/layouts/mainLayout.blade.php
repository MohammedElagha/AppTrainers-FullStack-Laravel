<!DOCTYPE html>
<html>
<head>

	@include('includes.appStyle')
	
</head>
<body>

	@yield('page_heading')

	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-hover">

					@yield('table_content')

					</table>
			</div>
		</div>
	</div>
</body>


@include('includes.appJS')

</html>