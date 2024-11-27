@extends("layouts.main")

@section("content")
    <div class="container">
        <h1>Last Visited Pages</h1>

        @if(count($last_items) > 0)
            @foreach($last_items as $item)
                <div class="visited-page">
                    <a href="{{ $item }}">{{ $item }}</a>
                </div>
            @endforeach
        @else
            <p class="no-data">No recently visited pages found.</p>
        @endif
    </div>

    <style>
        .container {
            max-width: 600px;
            margin: 50px auto; /* Исправлено на корректное выравнивание */
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .visited-page {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            word-break: break-word;
            text-align: center;
        }

        .visited-page a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .visited-page a:hover {
            text-decoration: underline;
        }

        .no-data {
            text-align: center;
            color: #777;
            font-style: italic;
        }
    </style>
@endsection
