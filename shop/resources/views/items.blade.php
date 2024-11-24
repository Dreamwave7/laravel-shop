@extends("layouts.main")


@section("content")



<table>
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Category</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>

            @foreach($items as $item)
            <tr>
                <td>
                <form action="{{route('post.cart')}}" method="post">
                @csrf
                <input type="hidden" name="item_id" value="{{$item->id}}">
                <input type="hidden" name="item_name" value="{{$item->name}}">
                <input type="hidden" name="item_description" value="{{$item->description}}">
                <input type="hidden" name="item_price" value="{{$item->price}}">
                <input type="hidden" name="item_brand" value="{{$item->brand->name}}">
                <input type="hidden" name="item_category" value="{{$item->category->name}}">
                <input type="number" value=1 style="width: 30px; height: 30px; font-size: 14px;" name="item_quantity"><p></p>

                <button>Add to cart</button>
                </form>
                </td>
                <td>
                    <a href="/items/{{$item->id}}">{{$item->name}}</a>
                </td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->brand->name}}</td>
                <td>{{$item->category->name}}</td>
                <td><img src="https://www.8host.com/blog/wp-content/themes/wp-8host-new/img/logo.svg"></td>
            </tr>
           @endforeach
        </tbody>
    </table>
    @if($items->isEmpty())
        <a href="/items/create" style="color: red; text-decoration: none; font-weight: bold; display: block; margin-bottom: 35px;">Create new item</a>
    @endif
    


    <style>
        table {
            width: 100%; 
            border-collapse: collapse;
            margin: 20px 0; 
        }
        th, td {
            border: 1px solid #ccc; 
            padding: 10px; 
            text-align: left; 
        }
        th {
            background-color: #f4f4f4; 
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>    
@endsection




