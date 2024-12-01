<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SessionController extends Controller
{
    public function reset(){

        request()->session()->forget("cart");
        return redirect()->to("/items");
    }

    public function show_second(){
        unset($_COOKIE["last_items"]);
        $data = json_encode([
            "http://127.0.0.1:8000/session/second",
    
    ],
        
        
        true);
        // setcookie("last_items",$data, time() +400);
        dd($_COOKIE["last_items"]);


    }
}
