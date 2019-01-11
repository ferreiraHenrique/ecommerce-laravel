<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    // allProducts
    return view('homepage');
});

Route::get('/product/{slug}', function(){
    return view('product.details');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', function(){ return view('admin.login'); });

    Route::get('dashboard', function(){ return view('admin.dashboard'); })->name('dashboard');
    
    Route::get('products', 'Admin\ProductController@list')->name('product.list');
    Route::prefix('product')->name('product.')->group(function(){
        Route::get('new', function(){ return view('admin.product.form'); })->name('new');
        Route::post('new', 'Admin\ProductController@create')->name('create');
        Route::get('delete/{id}', 'Admin\ProductController@delete')->name('delete');
    });
});
