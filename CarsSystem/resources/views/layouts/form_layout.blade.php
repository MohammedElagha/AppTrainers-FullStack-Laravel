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

				@yield('form_content')

			</div>
		</div>
	</div>
</body>


@include('includes.appJS')

</html>