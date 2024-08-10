@extends('layout.main')
@section('container')
    <div class="row g-2">
        <h1 class="text-uppercase text-center">Movie {{ $genre->name }}</h1>
        @for ($i = 0; $i < 10; $i++)
            <div class="col-md-3">
                <a href="/movie/{{ $genre->movies[$i]->id ?? 1 }}">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('storage/cover.jpeg') }}" class="card-img" alt="...">
                    </div>
                    <h5 class="text-uppercase text-center">{{ $genre->movies[$i]->title ?? 'Maharaja' }}
                        ({{ $genre->movies[$i]->release ?? 2024 }})</h5>
                </a>
            </div>
        @endfor
    </div>
@endsection
