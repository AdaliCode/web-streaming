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
            <h1 class="text-uppercase">Escape (2024)</h1>
            <h5>30. Jul, 2024 | Korea | 102 Min | Thriller</h5>
            <p>A chef with gambling problems flees to the Latin American villa of an old friend who appears to be living an
                extraordinary life.</p>
        </div>
    </div>
@endsection
