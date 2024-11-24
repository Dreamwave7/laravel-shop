@extends("layouts.main")

@section("content")

<h1>Brands</h1>
<div class="add-brand">
    <a href="/brands/create" class="btn btn-add">Add New brand</a>
</div>
<div class="brands-list">
    
    @foreach($brands as $brand)
    <div class="brand-item">
        <p>ID: {{ $brand->id }}</p>
        <p>Name: <a href="/brands/{{$brand->id}}">{{ $brand->name }}</a></p>
        <div class="brand-actions">
            <a href="/brands/{{$brand->id}}/edit" class="btn btn-edit">Edit</a>

            <form action="{{ route('destroy.brands',['brand_id' => $brand->id])}}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-delete">Delete</button>

            </form>
        </div>
    </div>
    @endforeach
</div>









<style>
    .brands-list {
        max-width: 600px;
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    .brand-item {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .category-item:last-child {
        border-bottom: none;
    }
    .category-item p {
        margin: 5px 0;
    }
    .brand-actions {
        display: flex;
        gap: 10px;
    }
    .btn {
        padding: 5px 10px;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }
    .btn-edit {
        background-color: #4CAF50;
        color: white;
    }
    .btn-delete {
        background-color: #f44336;
        color: white;
    }
    .btn-add {
        background-color: #008CBA;
        color: white;
        padding: 10px 20px;
        margin: 20px 0;
        display: block;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    .add-brand {
    text-align: center; /* Выровнять текст (и кнопку) по центру */
    margin: 20px auto; /* Добавить отступы сверху и снизу */
}

</style>

@endsection
