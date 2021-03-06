<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('tittle') | Sac-ProOffice</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/aps.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="grey darken-4">
	@include('templates.navbar')
    <div class="container">
   
		<div class="panel-body">
			@if (session()->has('flash_notification.message'))
			    <div class="alert alert-{{ session('flash_notification.level') }}">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

			        {!! session('flash_notification.message') !!}
			    </div>
			@endif
			@include('templates.errors')
		</div>
    	@yield('content')
    </div>  
    </div>
    
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('js/init.js')}}"></script>
	<div class="contenedor-div">    
    <img  class=" imagen-abajo-derecha" src="{{ asset('plugins/bootstrap/img/nt_.png')}}"  alt="NT">
	</div>
</body>
</html>