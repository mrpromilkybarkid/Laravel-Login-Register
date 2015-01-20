<!doctype html>
<html>
	<head>
		<title>Laravel</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css" />
	</head>
	<body>

		@include('layout.navigation')

		@if (Session::has('global'))
			<div class="container">
				{{ Session::get('global') }}
				<br />
			</div>
		@endif

		@yield('content')

		@include('layout.footer');


		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	</body>
</html>