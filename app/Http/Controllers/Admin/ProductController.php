<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;


class ProductController extends Controller
{
    public function list()
    {
        $products = Product::all();
        
        return view('admin.product.list', [
            'section' => 'product',
            'products' => $products,
        ]);
    }


    public function create(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $product = new Product($data);
        $product->save();

        return redirect()->route('admin.product.list');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.product.form', [
            'edit' => true,
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->length = $request->length;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->weight = $request->weight;
        $product->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect()->back();
    }
}
