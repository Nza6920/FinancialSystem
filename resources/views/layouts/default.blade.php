<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container" id="defaultContainer">
	     <a class="navbar-brand" href="{{ url('/') }}"><p><span id="header">个人理财通</span></a>
	  </div>
	</nav>
	<div class="jumbotron" style="margin-bottom: 0px; padding-bottom: 300px; margin-top: -30px;">
	@yield('content')
	</div>
</body>
</html>
