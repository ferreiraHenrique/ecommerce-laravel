<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Client;

class Product extends Model
{
    private static function init()
    {
        $client = new Client([
            'base_uri' => 'localhost:8080',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        return $client;
    }

    private static function allProducts()
    {
        $client = Product::init();

        $response = $client->get('/v1/product/all');

        dd($response);
    }
}
