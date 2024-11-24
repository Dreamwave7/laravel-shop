@extends("layouts.main")

@section("content")

<div style="max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    <h1 style="text-align: center; margin-bottom: 20px;">Create Item</h1>
    <form class="input-form-item" action="{{route('post.items')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-form" style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold;">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 15px;">
            <label for="description" style="display: block; font-weight: bold;">Description</label>
            <input type="text" name="description" id="description" placeholder="Enter description" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 15px;">
            <label for="price" style="display: block; font-weight: bold;">Price</label>
            <input type="number" name="price" id="price" placeholder="Enter price" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 15px;">
            <label for="brand_id" style="display: block; font-weight: bold;">Brand</label>
            <input type="number" name="brand_id" id="brand_id" placeholder="Enter brand" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 15px;">
            <label for="category_id" style="display: block; font-weight: bold;">Category</label>
            <input type="number" name="category_id" id="category_id" placeholder="Enter category" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="input-form" style="margin-bottom: 20px;">
            <label for="image" style="display: block; font-weight: bold;">Image</label>
            <input type="file" name="image" id="image" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button type="submit" style="width: 100%; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
            Create
        </button>
    </form>
</div>

@endsection
