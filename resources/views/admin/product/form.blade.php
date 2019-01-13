@extends('admin.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
@endsection


@section('content')
<section class="form">
    <h2>{{ isset($edit)? 'Edit' : 'New' }} Product</h2>

    <form method="POST">
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{isset($product->name)? $product->name : ''}}" />
        </div>

        <div class="description">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="6">{{isset($product->description)? $product->description : ''}}</textarea>
        </div>

        <div class="details">
            <label for="details">Details</label>
            <textarea name="details" id="details" rows="6">{{isset($product->details)? $product->details : ''}}</textarea>
        </div>

        <div class="price">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{isset($product->price)? $product->format_price() : ''}}" />
        </div>

        <h3>Dimension</h3>

        <div>
            <label for="length">Length</label>
            <input type="text" name="length" id="length" value="{{isset($product->length)? $product->length : ''}}" />
        </div>

        <div>
            <label for="height">Height</label>
            <input type="text" name="height" id="height" value="{{isset($product->height)? $product->height : ''}}" />
        </div>

        <div>
            <label for="width">Width</label>
            <input type="text" name="width" id="width" value="{{isset($product->width)? $product->width : ''}}" />
        </div>

        <div>
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" value="{{isset($product->weight)? $product->weight : ''}}" />
        </div>

        @csrf
        <button type="submit">SAVE {{ $edit? 'CHANGES' : '' }}</button>
    </form>
</section>
@endsection
