<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register','API\RegisterController@register');
Route::post('login','API\LoginController@login');

Route::middleware('auth:api')->group(function(){

    // Product Resource
    Route::resource('products','API\ProductController');
    
    // Route::get('products', function () {
    //     $product_data = DB::table('products')->get();
    //     dd($product_data);
    //     return true;
    // });
    
    
    // Route::post('products', function (Request $request) {
    
    //     $product_data =array(
    //         'product_name' => $request->product_name,
    //         'product_detail' => $request->product_detail,
    //         'product_barcode' => $request->product_barcode,
    //         'product_qty' => $request->product_qty,
    //         'product_price' => $request->product_price,
    //         'product_image' => $request->product_image,
    //         'product_category' => $request->product_category,
    //         'product_status' => $request->product_status,
    //         'created_at' => NOW()
    //     );
    
    //     $result = DB::table('products')->insert($product_data);
    //     return $result;
    
    // });

});



