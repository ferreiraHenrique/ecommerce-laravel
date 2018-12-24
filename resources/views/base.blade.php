<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
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
				<li><a href="/">Home</a></li>
				<li><a href="#">our products</a></li>
				<li><a href="#">blog</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
				<li><a href="#">cart</a></li>
			</ul>
		</div>
	</nav>

	@yield('content')

	<section class="newsletter">
		<div class="section-title">
			<h2>SIGN UP AND GET FREE COFFEE BAGS</h2>
		</div>

		<div class="form">
			<h3>Coffee Updates</h3>

			<form>
				<input type="text" placeholder="email@email.com">
				<button type="button">SUBSCRIBE</button>
			</form>
		</div>
	</section>

	<footer>
		<div>
			<div>
				<div>
					<h2>CoffeeStyle.</h2>
					<p>Delivering the best coffee life since 1996.<br>From coffee geeks to the real ones.</p>
				</div>

				<i>CoffeeStyle Inc. &copy; 2018</i>
			</div>

			<div class="menu">
				<h2>MENU</h2>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Our Products</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<div class="social">
				<h2>FOLLOW US</h2>

				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Pinterest</a></li>
				</ul>
			</div>

			<div class="contact">
				<div>
					<h2>CONTACT US</h2>

					<p>We’re Always Happy to Help</p>
					<a href="#">contact@email.com</a>
				</div>

				<i>Powered by</i>
			</div>
		</div>
	</footer>
</body>
</html>