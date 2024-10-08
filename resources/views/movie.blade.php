@extends('layout.main')
@section('container')
    <iframe width="100%" height="550" src="https://www.youtube.com/embed/5pY_2ZIux9Q?autoplay" class="rounded">
    </iframe>
    <hr>
    <div class="row g-3 align-items-start">
        <div class="col-auto">
            <img src="{{ asset('storage/cover.jpeg') }}" alt="..." width="200" class="rounded">
        </div>
        <div class="col">
            <h1 class="text-uppercase">{{ $movie->title }} (2024)</h1>
            <h5>30 Jul, 2024 | 102 Min</h5>
            <p>A chef with gambling problems flees to the Latin American villa of an old friend who appears to be living an
                extraordinary life.</p>
        </div>
    </div>
    <hr>
    <p><strong>Director</strong> : Stephen Chow</p>
    <p><strong>Cast</strong> : Stephen Chow, Yuan Wah, Yuen Qiu, Lam Chi-cung, Dong Zhihua, Chiu Ci-ling, Xing Yu, DannyChan
        Kwok Khan, Leung Si-lung</p>
    <p>
        <strong>Genres</strong> :
        @foreach ($movie->genres as $key => $genre)
            <a href="/movie/genre/{{ $genre->id }}">{{ $genre->name }}</a>
            @if (!$loop->last)
                ,
            @endif
        @endforeach
    </p>
    <p><strong>Maturity Rating</strong> : 18+</p>
@endsection
