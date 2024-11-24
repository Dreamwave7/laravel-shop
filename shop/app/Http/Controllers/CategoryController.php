<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\items;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $all_categories = categories::all();
        // dd($all_categories->name);
        return view("categories",compact("all_categories"));
    }

    public function create(){
        return view("categories_create");
    }

    public function create_category(){
        $data = request()->validate(["name"=>"string"]);
        categories::firstOrCreate($data);
        return redirect()->to("categories");
    }

    public function edit($category_id){
        $category = categories::find($category_id);

        return view("categories_edit",compact("category","category_id"));

    }

    public function update($category_id){
        $data = request()->validate(["name"=>"string"]);
        categories::find($category_id)->update($data);
        return redirect()->to("/categories");
        
    }

    public function delete($category_id){
        $category = categories::find($category_id);
        $category->delete();
        return redirect()->to("/categories");
    }

    public function one_category($category_id){
        $items = items::all()->where("category_id",$category_id);
        return view("category_select",compact("items"));
    }
}
