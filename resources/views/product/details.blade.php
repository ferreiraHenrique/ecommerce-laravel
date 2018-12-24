@extends('base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
@endsection

@section('content')
<section class="product-details">
    <div class="image">
    </div>

    <div class="header-details">
        <h1>Pink Premium Ceramic</h1>
        <p>A et quia qui quia. Sunt tempore est sit facilis. Ducimus est ut neque sunt eum iusto. Consequatur quia occaecati enim omnis repudiandae labore.</p>

        <h2>$99.00</h2>

        <div class="form-add-cart">
            <form>
                <label>Quantity</label>
                <input type="number" value="1" />
                <button type="button">ADD TO CART</button>
            </form>
        </div>
    </div>

    <div class="description">
        <h2>DETAILS</h2>

        <p>Aut dicta iusto neque ea voluptates. Id cupiditate cum sequi eum neque dolorem dicta quisquam non. Quas vel perferendis accusantium eum cum voluptates libero doloribus voluptates. A et quia qui quia. Sunt tempore est sit facilis. Ducimus est ut neque sunt eum iusto. Consequatur quia occaecati enim omnis repudiandae labore.</p>
    </div>

    <div class="dimensions">
        <h2>DIMENSIONS</h2>

        <ul>
            <li><span>Lenght (in):</span> 45.0</li>
            <li><span>Height (in):</span> 98.0</li>
            <li><span>Width (in):</span> 56.0</li>
            <li><span>Weight (oz):</span> 200.0</li>
        </ul>
    </div>
</section>

<section class="related">
    <div class="section-title">
		<h2>YOU MIGHT ALSO LIKE THESE</h2>
    </div>
    
    <div class="products">
        <ul class="image">
			<li><button><a href="#">EXPLORE MUG</a></button></li>
			<li><button><a href="#">EXPLORE MUG</a></button></li>
			<li><button><a href="#">EXPLORE MUG</a></button></li>
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
@endsection

