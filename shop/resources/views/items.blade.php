@extends("layouts.main")


@section("content")
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
                <td>{{$item->brand}}</td>
                <td>{{$item->category}}</td>
                <td><img src="https://www.8host.com/blog/wp-content/themes/wp-8host-new/img/logo.svg"></td>
            </tr>
           @endforeach
        </tbody>
    </table>


    <style>
        table {
            width: 100%; /* Таблица занимает всю ширину страницы */
            border-collapse: collapse; /* Убираем промежутки между границами */
            margin: 20px 0; /* Отступ сверху и снизу */
        }
        th, td {
            border: 1px solid #ccc; /* Границы ячеек */
            padding: 10px; /* Внутренний отступ */
            text-align: left; /* Выравнивание текста по левому краю */
        }
        th {
            background-color: #f4f4f4; /* Фон для заголовков */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Фон для чётных строк */
        }
    </style>    
@endsection




