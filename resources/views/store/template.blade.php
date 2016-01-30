<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Videorama')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha256-ZgJYmqb5jZ8WCDqIYHlUarCVI7NDkBCeFnMW1gfihwY= sha512-yK8VlGnQXDlAH4aaZwd0EfmkYwv/XwZaA7VcT9JDO1YeZSvzu94p7/btLABkerIR26o7uYIiEmY59gQv/w/itA==" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Black+Ops+One|Hammersmith+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>