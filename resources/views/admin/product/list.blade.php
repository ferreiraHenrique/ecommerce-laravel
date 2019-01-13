@extends('admin.base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
@endsection


@section('content')
<section class="products">
    <h2>Products</h2>
    <div class="actions">
        <a href="{{ route('admin.product.new') }}"><i class="fas fa-plus"></i></a>
    </div>

    <div class="list">
        @foreach($products as $product)
        <div>
            <p>{{$product->name}}</p>
            <p>${{$product->format_price()}}</p>

            <div class="actions">
                <a href="{{ route('admin.product.edit', $product->id) }}"><i class="fas fa-edit"></i></a>
                <a href="{{ route('admin.product.delete', $product->id) }}"><i class="far fa-trash-alt"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
