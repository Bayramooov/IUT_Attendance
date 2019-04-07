<!DOCTYPE html>
<html>
<head>

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/newStyle.css') }}" rel="stylesheet">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newStyle.css') }}" rel="stylesheet">
	<!-- <title>Generated Code</title> -->
	<style type="text/css">
		body {
			margin: 0;
		}
		.body1 {
			position: absolute;
			top: 0;
			width: 100%;
			height: 10px;
			width: 100%;
		}
		.loading1 {
			height: 100%;
			width: 100%;
			background-color: #0C542C;
			transition: width 12s linear; 
		}
		.body2 {
			position: absolute;
			bottom: 0;
			float: right;
			width: 100%;
			height: 10px;
			width: 100%;
		}
		.loading2 {
			float: right;
			height: 100%;
			width: 100%;
			background-color: #0C542C;
			transition: width 12s linear; 
		}
		.width {
			width: 0 !important;
		}
	</style>
</head>
<body onload = "loading()">
	<div class="body1"><div class="loading1" id="ddd"></div></div>
	<div class="body2"><div class="loading2" id="dddd"></div></div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 myCard_2">
				<div class="card">
					<div class="card-header">{{$class->cl_name}}</div>
					<div class="codePage_body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function loading()
		{
			let width1 = document.getElementById("ddd");
				width1.classList.add("width");
			let width2 = document.getElementById("dddd");
				width2.classList.add("width");
		}
	</script>
</body>
</html>