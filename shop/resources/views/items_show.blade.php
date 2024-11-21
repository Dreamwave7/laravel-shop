@extends("layouts.main")

@section("content")



<div>
        <h1>Информация о товаре</h1>
        <img class = "item_img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d443d5bd2ee842a3848899a957e9e283_9366/Argentina_Anniversary_Track_Top_Blue_JD9096_HM1.jpg" alt="item photo" >
        <table>
            <tr>
                <th>ID</th>
                <td>{{$item->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$item->description}}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{$item->price}} грн</td>
            </tr>
            <tr>
                <th>Brand</th>
                <td>{{$item->brand}}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{$item->category}}</td>
            </tr>
        </table>

        <a href="/items" style="color: red;">Back</a>
    </div>




<style>

.item_img{
    width: 250px;
    height: 250px; 
}

</style>
































@endsection