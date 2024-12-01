<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart\Cart;

class CartController extends Controller
{


    public function add(Request $request)
    {
        $item = Cart::add($request);
        return redirect()->to("/items");
    }


    public function cart()
    {
       $cart = Cart::getCart();
       return $cart;

    }

    public function cart_last_items()
    {
        $last_items = json_decode($_COOKIE["last_items"]);
        return view("cart_viewed",compact("last_items"));
    }

    public function delete($id)
    {
        $deleting = Cart::delete($id);
        return redirect()->to("/cart");
    }

    }

