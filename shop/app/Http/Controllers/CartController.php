<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart\Cart;

class CartController extends Controller
{
    private $cart;
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }


    public function add(Request $request)
    {
        $item = $this->cart->add($request);

        return redirect()->to("/items");
    }


    public function cart()
    {
       $items = $this->cart->getCart();
       return view("cart",compact("items"));

    }

    public function cart_last_items()
    {
        $last_items = json_decode($_COOKIE["last_items"]);
        return view("cart_viewed",compact("last_items"));
    }

    public function delete($id)
    {
        $deleting = $this->cart->delete($id);
        return redirect()->to("/cart");
    }

    }

