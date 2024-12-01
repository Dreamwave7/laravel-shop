<?php
namespace App\Cart;

//$item_id, $item_name, $item_description,$item_price,$item_brand,$item_category,$item_quantity

class CartItem
{
    private $item_id;
    private $item_name;
    private $item_description;
    private $item_price;
    private $item_brand;
    private $item_category;
    private $item_quantity;


    public function __construct($item_id, $item_name, $item_description,$item_price,$item_brand,$item_category,$item_quantity)
    {
        $this->item_id = $item_id;
        $this->item_name = $item_name;
        $this->item_description = $item_description;
        $this->item_price = $item_price;
        $this->item_brand = $item_brand;
        $this->item_category = $item_category;
        $this->item_quantity = $item_quantity;

    }

    public function getItemName()
    {
        return $this->item_name;
    }

    
    public function getItemId()
    {
        return $this->item_id;
    }


    public function getItemDescription()
    {
        return $this->item_description;
    }


    public function getItemPrice()
    {
        return $this->item_price;
    }


    public function getItemBrand()
    {
        return $this->item_brand;
    }


    public function getItemCategory()
    {
        return $this->item_category;
    }


    public function getItemQuantity()
    {
        return $this->item_quantity;
    }

    public function addQuantity(int $value)
    {
        $quantity = $this->item_quantity;
        $quantity = $quantity +$value;
        $this->item_quantity = $quantity;
    }





}

