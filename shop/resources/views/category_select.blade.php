@extends("layouts.main")


@section("content")


<h1 style="color: orangered;">Search by category {{$items->first()->category->name}}</h1>
<table>
        <thead>
            <tr>
                <th>ID</th>
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
                <td>{{$item->id}}</td>
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




