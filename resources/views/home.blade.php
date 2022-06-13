<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    <h1 class="text-center">Home</h1>
    <div>
        <i class="fa-brands fa-facebook"></i>
    </div>

    <div>
        <ul>
            @foreach($movies as $movie)
            <li>
                <div class="card">
                    <div class="title">{{$movie->title}}</div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>