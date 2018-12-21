<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

	@yield('head')
</head>
<body>
	<nav>
		<div>
			LOGO
		</div>
		<div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">our products</a></li>
				<li><a href="#">blog</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
				<li><a href="#">cart</a></li>
			</ul>
		</div>
	</nav>

	@yield('content')
</body>
</html>