<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function reset(){
        // session()->put("cart",["id"=>"53","name"=>"some second shoes","price"=>5020]);
        // session(["cart"=>["id"=>"513","name"=>"some23 second shoes","price"=>50230]]);
        // session()->push("cart",["id"=>"551","name"=>"some second shoes","price"=>5020]);
        session()->forget("cart");
        return redirect()->to("/items");
    }

    public function show_second(){
        
        $data = session()->all();
        dd($data);
    }
}
