@extends("layouts.main")

@section("content")



    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .total-price {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>

    <div class="container">
        <h1>Your order</h1>
        <form action="{{route('submit.order')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Name and Lastname</label>
                <input type="text" id="name" name="initials" placeholder="Enter your initials" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="email">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone without +" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" placeholder="Enter your address" required></textarea>
            </div>
            <div class="total-price">
                Total price: <span id="total-price">{{$total_price}}</span>
            </div>
            <input type="hidden" name = "total_price" value="{{$total_price}}">
            <button type="submit">Place order</button>
        </form>
    </div>







































@endsection