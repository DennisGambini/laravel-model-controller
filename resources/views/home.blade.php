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

    <section id="all">
        <h2>{{$titles[0]}}</h2>
        <div class="row">
            
                @foreach($movies as $movie)
                
                    <div class="card">
                        <div class="title">
                            <span class="red-text">Title : </span>
                            <span class="black-text">{{$movie->title}}</span>
                        </div>
                        <div class="orig-title">
                            <span class="red-text">Original title : </span>
                            <span class="black-text">{{$movie->original_title}}</span>
                        </div>
                        <div class="nationality">
                            <span class="red-text">Nationality : </span>
                            <span class="black-text">{{$movie->nationality}}</span>
                        </div>
                        <div class="date">
                            <span class="red-text">Date : </span>
                            <span class="black-text">{{$movie->date}}</span>
                        </div>
                        <div class="vote">
                            <span class="red-text">Vote : </span>
                            <span class="black-text">{{$movie->vote}}</span>
                        </div>
                    </div>
                 
                @endforeach
            
        </div>
    </section>


    <section id="american">
        <h2>{{$titles[1]}}</h2>
        <div class="row">
                @foreach($americanMovies as $american)
                
                <div class="card">
                    <div class="title">
                        <span class="red-text">Title : </span>
                        <span class="black-text">{{$american->title}}</span>
                    </div>
                    <div class="orig-title">
                        <span class="red-text">Original title : </span>
                        <span class="black-text">{{$american->original_title}}</span>
                    </div>
                    <div class="nationality">
                        <span class="red-text">Nationality : </span>
                        <span class="black-text">{{$american->nationality}}</span>
                    </div>
                    <div class="date">
                        <span class="red-text">Date : </span>
                        <span class="black-text">{{$american->date}}</span>
                    </div>
                    <div class="vote">
                        <span class="red-text">Vote : </span>
                        <span class="black-text">{{$american->vote}}</span>
                    </div>
                </div>
                 
                @endforeach
            
        </div>
    </section>

    <section id="british">
        <h2>{{$titles[2]}}</h2>
        <div class="row">
            
                @foreach($britishMovies as $british)
                
                <div class="card">
                    <div class="title">
                        <span class="red-text">Title : </span>
                        <span class="black-text">{{$british->title}}</span>
                    </div>
                    <div class="orig-title">
                        <span class="red-text">Original title : </span>
                        <span class="black-text">{{$british->original_title}}</span>
                    </div>
                    <div class="nationality">
                        <span class="red-text">Nationality : </span>
                        <span class="black-text">{{$british->nationality}}</span>
                    </div>
                    <div class="date">
                        <span class="red-text">Date : </span>
                        <span class="black-text">{{$british->date}}</span>
                    </div>
                    <div class="vote">
                        <span class="red-text">Vote : </span>
                        <span class="black-text">{{$british->vote}}</span>
                    </div>
                </div>
                
                @endforeach
            
        </div>
    </section>
</body>
</html>