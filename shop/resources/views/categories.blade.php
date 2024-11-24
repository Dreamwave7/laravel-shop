@extends("layouts.main")

@section("content")

<h1>Categories</h1>
<div class="add-category">
    <a href="/categories/create" class="btn btn-add">Add New Category</a>
</div>
<div class="categories-list">
    
    @foreach($all_categories as $category)
    <div class="category-item">
        <p>ID: {{ $category->id }}</p>
        <p>Name: <a href="/categories/{{$category->id}}">{{ $category->name }}</a></p>
        <div class="category-actions">
            <a href="/categories/{{$category->id}}/edit" class="btn btn-edit">Edit</a>
            <form action="{{route('destroy.category', ['category_id' => $category->id])}}" method="post" style="display: inline;">
                @csrf     
                @method('delete')
                <button type="submit" class="btn btn-delete">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>


<style>
    .categories-list {
        max-width: 600px;
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    .category-item {
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
    .category-actions {
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
    .add-category {
    text-align: center; /* Выровнять текст (и кнопку) по центру */
    margin: 20px auto; /* Добавить отступы сверху и снизу */
}

</style>

@endsection
