<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Client;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'id', 'name', 'description',
        'details', 'price', 'length',
        'height', 'width', 'weight',
    ];


    public function format_price()
    {
        return number_format($this->price, 2, '.', ',');
    }
}
