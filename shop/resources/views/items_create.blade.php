@extends("layouts.main")

@section("content")


<div>
    <form class = "input-form-item" action="{{route('post.items')}}" method="post" >
        @csrf
        <div class="input-form">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" required>
        </div>

        <div class="input-form">
        <label>Description</label>
        <input type="text" name="description" placeholder="Enter description" required>
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

        <div class="input-form">
        <label>Image</label>
        <input type="file" name="image" placeholder="Enter name">
        </div>

        <button type = "submit">Create</button>
    </form>
</div>















<style>
        .input-form-item {
            margin: 50px ; 
        }
        .input-form{
            margin: 50px;
        }
</style>




<form>








@endsection