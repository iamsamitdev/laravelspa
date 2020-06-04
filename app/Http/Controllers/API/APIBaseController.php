<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class APIBaseController extends Controller
{
     // สร้างฟังก์ชันในการแสดงข้อมูลออกเมื่อทำงานสำเร็จ
     public function sendResponse($result, $message)
     {
         $response = [
             'success'   => true,
             'data'         => $result,
             'message' => $message
         ];
 
         return response()->json($response, 200);
     }
 
     // สร้างฟังก์ชันแสดงข้อมูลเมื่อมีข้อผิดพลาด
     public function sendError($error, $errorMessages = [], $code = 404)
     {
         $response = [
             'success'   => false,
             'message' => $error
         ];
 
         if(!empty($errorMessages)){
             $response['data'] =  $errorMessages;
         }
 
         return response()->json($response, $code);
     }
}
