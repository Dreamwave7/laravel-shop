@extends("layouts.main")

@section("content")
<div style="text-align: center; padding: 20px;">

    <h1>Item info</h1>
    
    <img class="item_img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d443d5bd2ee842a3848899a957e9e283_9366/Argentina_Anniversary_Track_Top_Blue_JD9096_HM1.jpg" alt="item photo">
    
    <table style="margin: 20px auto; border-collapse: collapse; width: 60%;">
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">ID</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->id}}</td>
        </tr>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Name</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->name}}</td>
        </tr>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Description</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->description}}</td>
        </tr>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Price</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->price}} грн</td>
        </tr>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Brand</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->brand->name}}</td>
        </tr>
        <tr>
            <th style="padding: 8px; border: 1px solid #ddd; text-align: left;">Category</th>
            <td style="padding: 8px; border: 1px solid #ddd; text-align: left;">{{$item->category->name}}</td>
        </tr>
    </table>

    <a href="/items" style="color: red; text-decoration: none; font-weight: bold; display: block; margin-bottom: 35px;">Back</a>
    <a href="/items/create" style="color: red; text-decoration: none; font-weight: bold; display: block; margin-bottom: 35px;">Create new item</a>
    <a href="/items/{{$item->id}}/edit" style="color: red; text-decoration: none; font-weight: bold; margin-bottom: 40px;">Edit</a>

    <form action="{{route('destroy.items', $item->id)}}" method="post"  >
        @csrf
        @method("delete")
        <button style="color: white;
        background-color: red;
        border: none;
        padding: 10px 15px;
        font-weight: bold;
        margin:30px;
        cursor: pointer;">Delete</button>
    </form>

</div>

<style>
    .item_img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        margin-bottom: 20px;
    }



    
</style>

@endsection
