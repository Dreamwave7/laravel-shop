<?php
namespace App\Cart;


class Cart
{

    public static function add($request)
    {
        //md5
        $item_id = $request->input("item_id");
        $item_name = request()->input("item_name");
        $item_description = request()->input("item_description");
        $item_price = request()->input("item_price");
        $item_brand = request()->input("item_brand");
        $item_category = request()->input("item_category");
        $item_quantity = request()->input("item_quantity");


        if(request()->input("item_quantity") <= 0){
            return redirect()->to("/items");
        }

        $item = new CartItem($item_id, $item_name, $item_description,$item_price,$item_brand,$item_category,$item_quantity);

        $items = self::load();
        
        $exist = false;

        if($items)
        {
            foreach($items as $current)
            {   
                if($item->getItemId() == $current->getItemId())
                {
                    $current->addQuantity($item->getItemQuantity());
                    $exist = true;
                }
            }   
        }
        
        if(!$exist)
        {
            session()->push("cart",$item);
        }
    }


    public static function load()
    {
        $items = session()->only(["cart"]);
        if(!empty($items))
        {
            $items = $items["cart"];
            return $items;
        }
        else
        {
            return null;
        }

    }

    public static function getCart()
    {
        $items = session()->only(["cart"]);
        if(!empty($items)){
            $items = $items["cart"];
            return view("cart",compact("items"));}
        else{return redirect()->to("/items");}
    }

    public function save()
    {
        ////////
    }

    public static function delete($id)
    {   
        $newItemsArray = [];

        $items = self::load();

        foreach($items as $item)
        {
            if($item->getItemId() != $id)
            {
                $newItemsArray[] = $item;
            }
            else
            {
                //
            }
        }

        session(['cart' => $newItemsArray]);

    }






}

