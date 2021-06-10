<!DOCTYPE html>
<html>
<head>
	@yield('page_title')
	@include('includes.appStyle')
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				@yield('page_heading')
				<table class="table table-bordered table-hover">
					@yield('data_content')
				</table>
			</div>
		</div>
	</div>

</body>
</html>