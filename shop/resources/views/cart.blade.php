@extends("layouts.main")

@section("content")

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
        color: #333;
    }

    .item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .item p {
        margin: 5px 0;
    }

    .item button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    .item button:hover {
        background-color: #d32f2f;
    }

    .separator {
        margin: 20px 0;
        border-top: 1px solid #ddd;
    }

    .total-price {
        font-weight: bold;
        font-size: 1.2em;
        text-align: right;
    }
    .reset-link {
        display: inline-block;
        padding: 10px 20px; 
        background-color: blue;
        color: yellow; 
        text-decoration: none; 
        font-size: 14px; 
        font-weight: bold; 
        border-radius: 5px;
        border: none; 
        cursor: pointer; 
        transition: background-color 0.3s ease; 
    }
    .latest-items {
        display: inline-block;
        padding: 10px 20px; 
        background-color: grey;
        color: yellow; 
        text-decoration: none; 
        font-size: 14px; 
        font-weight: bold; 
        border-radius: 5px;
        border: none; 
        cursor: pointer; 
        transition: background-color 0.3s ease; 
    }

    .reset-link:hover {
        background-color: blueviolet; 
    }

    .reset-link:active {
        background-color: blueviolet; /
    }
</style>

@php

$total_price = 0;
@endphp

<div class="separator"></div>
<a class= "reset-link" href = "/session/reset">Reset all items</a>
<a class= "latest-items" href = "/cart/viewed">See last viewed items</a>
@if(!$items)
<p>Your cart is empty</p>
@else

@foreach($items as $item)
<div class="separator"></div>
<div class="item">
    <p><strong>Name:</strong> {{$item->getItemName()}}</p>
    <p><strong>Description:</strong> {{$item->getItemDescription()}}</p>
    <p><strong>Price:</strong> {{$item->getItemPrice()}}</p>
    <p><strong>Category:</strong> {{$item->getItemCategory()}}</p>
    <p><strong>Brand:</strong> {{$item->getItemBrand()}}</p>
    <p><strong>Quantity:</strong> {{$item->getItemQuantity()}}</p> 
    <form action="{{  route('delete.cart',$id = $item->getItemId())  }}" method="post">
        @csrf
        @method("delete")
        <button>Delete</button>
    </form>

    @php
    $price_quantity = $item->getItemPrice() * $item->getItemQuantity();
    $total_price += $price_quantity;
    @endphp
</div>
<div class="separator"></div>
@endforeach

<form action="{{route('post.order')}}" method="post">
    @csrf
    <input type="hidden" name = "order" value="{{json_encode($items)}}">
    <input type="hidden" name = "total_price" value="{{$total_price}}">
<button class= "reset-link">Make order</button>
</form>

<p class="total-price">Total price = {{$total_price}} uah</p>

@endif


@endsection
