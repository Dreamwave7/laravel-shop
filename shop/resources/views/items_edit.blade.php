@extends("layouts.main")
@section("content")



<div>
    <form class="input-form-item" action="{{route('update.items', $item_id)}}" method="post" style="max-width: 500px; margin: 0 auto;">
        @csrf
        @method("patch")
        <h1>Edit item</h1>
        <div class="input-form" style="margin-bottom: 10px;">
            <label for="name" style="display: block; font-weight: bold;">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 10px;">
            <label for="description" style="display: block; font-weight: bold;">Description</label>
            <input type="text" name="description" id="description" placeholder="Enter description" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 10px;">
            <label for="price" style="display: block; font-weight: bold;">Price</label>
            <input type="number" name="price" id="price" placeholder="Enter price" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 10px;">
            <label for="brand" style="display: block; font-weight: bold;">Brand</label>
            <input type="text" name="brand" id="brand" placeholder="Enter brand" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 20px;">
            <label for="category" style="display: block; font-weight: bold;">Category</label>
            <input type="number" name="category" id="category" placeholder="Enter category" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button class= "btn-del" type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Update
        </button>
    </form>
</div>





@endsection