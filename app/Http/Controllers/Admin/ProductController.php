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

    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect()->back();
    }
}
