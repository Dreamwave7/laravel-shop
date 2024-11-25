@extends("layouts.main")

@section("content")

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за заказ</title>
    <style>
        .page-body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .message-container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        .message-title {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .message-text {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<div class="page-body">
    <div class="message-container">
        <h1 class="message-title">Thanks for order!</h1>
        <p class="message-text">We callback to you as soon as possible.</p>
        <a href="/items" class="back-button">Return to main page</a>
    </div>
    </div>
</html>































@endsection