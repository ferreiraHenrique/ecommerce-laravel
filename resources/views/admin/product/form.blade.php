@extends('admin.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
@endsection


@section('content')
<section class="form">
    <h2>New Product</h2>

    <form method="POST">
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
        </div>

        <div class="description">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="6"></textarea>
        </div>

        <div class="details">
            <label for="details">Details</label>
            <textarea name="details" id="details" rows="6"></textarea>
        </div>

        <div class="price">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" />
        </div>

        <h3>Dimension</h3>

        <div>
            <label for="length">Length</label>
            <input type="text" name="length" id="length" />
        </div>

        <div>
            <label for="height">Height</label>
            <input type="text" name="height" id="height" />
        </div>

        <div>
            <label for="width">Width</label>
            <input type="text" name="width" id="width" />
        </div>

        <div>
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" />
        </div>

        @csrf
        <button type="submit">SAVE</button>
    </form>
</section>
@endsection
