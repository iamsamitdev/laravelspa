<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller; // แก้ไขบรรทัดนี้
use App\Http\Controllers\API\APIBaseController as APIBaseController; // ใช้อันนี้แทน
use App\Model\API\Product;
use Illuminate\Http\Request;

use Validator;

// class ProductController extends Controller // แก้ไขบรรทัดนี้
class ProductController extends APIBaseController // ใช้อันี้แทน
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse($products->toArray(), "Products retrived successfully.");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'product_name' => 'required',
            'product_barcode' => 'required',
            'product_qty' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_status' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }else{
            
            $product_data =array(
                'product_name' => $request->product_name,
                'product_detail' => $request->product_detail,
                'product_barcode' => $request->product_barcode,
                'product_qty' => $request->product_qty,
                'product_price' => $request->product_price,
                'product_category' => $request->product_category,
                'product_status' => $request->product_status,
                'created_at' => NOW()
            );

            $products = Product::create($product_data);
            return $this->sendResponse($products->toArray(), "Product create successfully.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\API\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\API\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\API\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
