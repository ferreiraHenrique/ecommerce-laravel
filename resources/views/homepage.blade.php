@extends('base')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<section class="top">
	<div>
		<p>BEST PLACE TO BUY</p>
		<h1>Coffee Mugs</h1>
		<button>EXPLORE OUR PRODUCTS</button>
	</div>
</section>

<section class="about">
	<div>
		<h2>Even the all-powerful Pointing has no control about the blind texts.</h2>
		<p>
			It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
		</p>
		<a href="#">Read the full Story</a>
	</div>
</section>

<section class="featured">
	<div class="section-title">
		<h2>Featured Mugs</h2>
	</div>

	<div class="products">
		<ul class="image">
			<li>
				<button>EXPLORE MUG</button>
			</li>
			<li><button>EXPLORE MUG</button></li>
		</ul>
		<ul class="title">
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p>$99.00</p>
			</li>
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p class="off">$50.00 <i>$69.00</i></p>
			</li>
		</ul>
	</div>
</section>

<section class="more-products">
	<div class="section-title">
		<h2>More Products</h2>
	</div>

	<div class="products">
		<ul class="image">
			<li>
				<button>EXPLORE MUG</button>
			</li>
			<li><button>EXPLORE MUG</button></li>
			<li><button>EXPLORE MUG</button></li>
		</ul>
		<ul class="title">
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p>$99.00</p>
			</li>
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p class="off">$50.00 <i>$69.00</i></p>
			</li>
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p class="off">$50.00 <i>$69.00</i></p>
			</li>
		</ul>

		<ul class="image">
			<li>
				<button>EXPLORE MUG</button>
			</li>
			<li><button>EXPLORE MUG</button></li>
			<li><button>EXPLORE MUG</button></li>
		</ul>
		<ul class="title">
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p>$99.00</p>
			</li>
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p class="off">$50.00 <i>$69.00</i></p>
			</li>
			<li>
				<h3>Pink Premium Ceramic</h3>
				<p class="off">$50.00 <i>$69.00</i></p>
			</li>
		</ul>
	</div>
</section>


<section class="call-to-action">
	<div class="section-title">
		<h2>BUY 2 MUGS AND GET A COFFEE MAGAZINE FREE</h2>
	</div>

	<div class="content">
		<div class="images">
			<div class="image-1"></div>
			<div class="image-2"></div>
			<div class="image-3"></div>
		</div>

		<div class="description">
			<h3>premium offer</h3>
			<h4>Get our Coffee Magazine</h4>
			<p>The most versatile furniture system ever created.<br>Designed to fit your life.</p>
			<a href="#">start shopping</a>
		</div>
	</div>
</section>


<section class="parallax">
	
</section>


<section class="blog">
	<div class="section-title">
		<h2>BEHIND THE MUGS, LIFESTYLE STORIES</h2>
	</div>

	<div class="posts">
		<div>
			<div class="image">
				<button>READ THE FULL STORY</button>
			</div>
			<h3>Health Check: why do I get a headache when I haven’t had my coffee?</h3>
			<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			<span>OCTOBER 9, 2018</span>
		</div>

		<div>
			<div class="image">
				<button>READ THE FULL STORY</button>
			</div>
			<h3>Health Check: why do I get a headache when I haven’t had my coffee?</h3>
			<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			<span>OCTOBER 9, 2018</span>
		</div>

		<div>
			<div class="image">
				<button>READ THE FULL STORY</button>
			</div>
			<h3>Health Check: why do I get a headache when I haven’t had my coffee?</h3>
			<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			<span>OCTOBER 9, 2018</span>
		</div>
	</div>
</section>


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
@endsection
