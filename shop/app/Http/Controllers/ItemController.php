<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

use function PHPSTORM_META\type;

class ItemController extends Controller
{
    public function items(){
        $items = items::all();
        session()->put("permanent","permanent");
        return view("items", compact("items"));
        
        
    }

    

    public function create_item(){
        return view("items_create");
    }

    public function create(){

        $data = request()->validate([
            "name"=>"string",
            "description"=>"string",
            "price"=>"integer",
            "brand_id"=>"integer",
            "category_id"=>"integer",
            "image"=>"nullable|integer"
        ]);
        items::create($data);
        return redirect()->to("/items");
    }


    public function show_item($id){
        $item = items::findOrFail($id);

        if(isset($_COOKIE["last_items"])){
            $this->change_cookie();
        }
        else
        {
            $current_page = [request()->fullUrl(),];
            $current_page = json_encode($current_page);
            setcookie("last_items",$current_page, time()+2500,"/");
        }

        return view("items_show",compact("item"));
    }

    public function edit($id){
        $item = items::findOrFail($id);
        $item_id = $item->id;
        return view("items_edit",compact("item_id"));
    }

    public function update($item_id){
        $data = request()->validate([
            "name" => "nullable|string",
            "description" => "nullable|string",
            "price" => "nullable|integer",
            "brand_id" => "nullable|string",
            "category_id" => "nullable|integer"
        ]);

        $data = array_filter($data);
        items::find($item_id)->update($data);
        return redirect()->to("/items");

    }

    public function delete($item_id){
        $item = items::find($item_id);
        $item->delete();
        return redirect()->to("/items");
    }
    

    public function change_cookie(){

        $last_items = json_decode($_COOKIE["last_items"]);
        $current_page = request()->fullUrl();

        if(count($last_items) >10){
            array_pop($last_items);
        }
        array_unshift($last_items,$current_page);
        
        $last_items=json_encode($last_items);
        setcookie("last_items",$last_items,time()+3600,"/");
       dump($_COOKIE["last_items"]);
    }
}
