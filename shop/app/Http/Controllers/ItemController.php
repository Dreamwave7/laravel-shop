<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function items(){
        $items = items::all();
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
    
}
