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
        padding: 10px 20px; /* Отступы внутри кнопки */
        background-color: #f44336; /* Красный цвет фона */
        color: #fff; /* Белый цвет текста */
        text-decoration: none; /* Убираем подчеркивание */
        font-size: 14px; /* Размер шрифта */
        font-weight: bold; /* Полужирный текст */
        border-radius: 5px; /* Скругленные углы */
        border: none; /* Убираем границу */
        cursor: pointer; /* Указатель при наведении */
        transition: background-color 0.3s ease; /* Анимация при наведении */
    }

    .reset-link:hover {
        background-color: #d32f2f; /* Темнее при наведении */
    }

    .reset-link:active {
        background-color: #b71c1c; /* Еще темнее при нажатии */
    }
</style>

@php
$total_price = 0;
@endphp

@foreach($items as $item)
<div class="separator"></div>
<div class="item">
    <p><strong>Name:</strong> {{$item["item_name"]}}</p>
    <p><strong>Description:</strong> {{$item["item_description"]}}</p>
    <p><strong>Price:</strong> {{$item["item_price"]}}</p>
    <p><strong>Category:</strong> {{$item["item_category"]}}</p>
    <p><strong>Brand:</strong> {{$item["item_brand"]}}</p>
    <p><strong>Quantity:</strong> {{$item["item_quantity"]}}</p>
    <form action="" method="post">
        @csrf
        @method("delete")
        <button>Delete</button>
    </form>

    @php
    $price_quantity = $item["item_price"] * $item["item_quantity"];
    $total_price += $price_quantity;
    @endphp
</div>
<div class="separator"></div>
@endforeach

<p class="total-price">Total price = {{$total_price}} uah</p>

<a class= "reset-link" href = "/session/reset">Reset all items</a>


@endsection
