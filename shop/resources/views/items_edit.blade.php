@extends("layouts.main")
@section("content")


<h1>Edit item</h1>

<div>
    <form class = "input-form-item" action="{{route('update.items', $item_id)}}" method="post" >
        @csrf
        @method("patch")
        <div class="input-form">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" >
        </div>

        <div class="input-form">
        <label>Description</label>
        <input type="text" name="description" placeholder="Enter description" >
        </div>

        <div class="input-form">
        <label>Price</label>
        <input type="number" name="price" placeholder="Enter price" required>
        </div>

        <div class="input-form">
        <label>Brand</label>
        <input type="text" name="brand" placeholder="Enter brand" required>
        </div>

        <div class="input-form">
        <label>Category</label>
        <input type="number" name="category" placeholder="Enter category" required>
        </div>

        <button type = "submit">Update</button>
    </form>
</div>

























@endsection