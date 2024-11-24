<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li>
                <a href="/items">Items</a>
            </li>
            <li>
                <a href="/categories">Category</a>
            </li>
            <li>
                <a href="/brands">Brand</a>
            </li>
            <li>
                <a href="/cart">Cart</a>
            </li>
        </ul>
    </nav>
</div>
@yield("content")
</body>
</html>
<style>
    nav ul {
        background-color: grey;
        list-style-type: none; 
        padding: 0; 
        margin: 0; 
        display: flex;
        justify-content: space-around; 
        height: 20px;
    }

    nav li {
        margin: 0 10px; 
    }

    nav a {
        text-decoration: none; 
        color: orange; 
        font-weight: bold;
    }

    nav a:hover {
        color: yellowgreen;}
</style>
