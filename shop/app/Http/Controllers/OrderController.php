<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_page(){
        return "ok";
    }

    public function order(){

        $items = request()->input('order');
        $total_price = request()->input('total_price');
        return view("order",compact("items","total_price"));
    }
    

    public function submit_order(){
        $items = session()->get("cart");
        $token = session()->get("_token");

        $data = request()->validate([
            "initials" => "string",
            "email" => "string",
            "phone" => "integer",
            "address" => "string" 
        ]);
        $data["token"] =$token;
        $data["cart"] =json_encode($items,true);
        
        Orders::create($data);
        session()->forget("cart");
        return redirect()->to("/success-order");
    }

    public function success(){
        return view("success");
    }
}

// $data = request()->validate([
//     "name"=>"string",
//     "description"=>"string",
//     "price"=>"integer",
//     "brand_id"=>"integer",
//     "category_id"=>"integer",
//     "image"=>"nullable|integer"
// ]);