@extends("layouts.main")
@section("content")



<div>
    <form class="input-form-item" action="{{route('update.categories', $category_id)}}" method="post" style="max-width: 500px; margin: 0 auto;">
        @csrf
        @method("patch")
        <h1>Edit category {{$category->name}}</h1>
        <div class="input-form" style="margin-bottom: 10px;">
            <label for="name" style="display: block; font-weight: bold;">New name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button class= "btn-del" type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Update
        </button>
    </form>
</div>




@endsection