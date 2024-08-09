@extends('layout.main')
@section('container')
    <h1 class="text-uppercase text-center">Movie</h1>
    <div class="row g-2">
        @for ($i = 0; $i < 6; $i++)
            <div class="col-md-3">
                <a href="/movie/escape-2024">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('storage/cover.jpeg') }}" class="card-img" alt="...">
                    </div>
                    <h5 class="text-uppercase text-center">Escape (2024)</h5>
                </a>
            </div>
        @endfor
    </div>
@endsection
