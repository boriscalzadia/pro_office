<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('tittle') | Sac-ProOffice</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="grey darken-4">
	@include('templates.navbar')
    <div class="container">
    		@if (session()->has('flash_notification.message'))
			    <div class="alert alert-{{ session('flash_notification.level') }}">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

			        {!! session('flash_notification.message') !!}
			    </div>
			@endif
            @yield('content')
    </div>
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('js/init.js')}}"></script>
</body>
</html>