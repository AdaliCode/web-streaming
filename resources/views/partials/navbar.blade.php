<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container">
        <a class="navbar-brand fs-3" href="/">AFLIX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-primary' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                @foreach (App\Models\Genre::all() as $item)
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('movie/genre/' . $item->id) ? 'text-primary' : '' }}"
                            href="/movie/genre/{{ $item->id }}">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
