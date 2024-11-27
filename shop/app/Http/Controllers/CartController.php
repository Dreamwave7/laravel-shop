<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(){
        $item_id = request()->input("item_id");
        $item_name = request()->input("item_name");
        $item_description = request()->input("item_description");
        $item_price = request()->input("item_price");
        $item_brand = request()->input("item_brand");
        $item_category = request()->input("item_category");
        $item_quantity = request()->input("item_quantity");

        if($item_quantity >=1){
            session()->push("cart",[
                "item_id"=>$item_id,
                "item_name"=>$item_name,
                "item_description"=>$item_description,
                "item_price"=>$item_price,
                "item_brand"=>$item_brand,
                "item_category"=>$item_category,
                "item_quantity"=>$item_quantity
            ]);
    
            return redirect()->back();

        }else{
            return redirect()->to("/items");
        }
        
    }

    public function cart(){
        $items = session()->only(["cart"]);
        if(!empty($items)){
            $items = $items["cart"];
            return view("cart",compact("items"));}
        else{return redirect()->to("/items");}
            
        }

        public function cart_last_items(){
            $last_items = json_decode($_COOKIE["last_items"]);
            return view("cart_viewed",compact("last_items"));
        }
    }

