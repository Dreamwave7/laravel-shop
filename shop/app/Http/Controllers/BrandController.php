<?php

namespace App\Http\Controllers;

use App\Models\brands;
use App\Models\items;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands(){
        $brands = brands::all();
        return view("brands", compact("brands"));
    }

    public function edit($brand_id){
        $brand = brands::find($brand_id);
        return view("brands_edit",compact("brand_id","brand"));
        
    }

    public function update($brand_id){
        $data = request()->validate(["name"=>"string"]);
        $brand = brands::find($brand_id)->update($data);
        return redirect()->to("/brands");

    }


    public function delete($brand_id){
        // dd($brand_id);
        $brand = brands::find($brand_id);
        $brand->delete();
        return redirect()->to("/brands");
    }

    public function create_brand(){
        return view("brands_create");
    }

    public function create(){
        $data = request()->validate(["name"=>"string"]);
        brands::create($data);
        return redirect()->to("/brands");
    }

    public function one_brand($brand_id){
        $items = items::all()->where("brand_id",$brand_id);
        return view("brand_select",compact("items"));

    }
}
