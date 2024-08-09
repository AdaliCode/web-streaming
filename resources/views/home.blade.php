<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="oswald-400">
    <div class="container my-3">
        <h1 class="text-uppercase text-center">Movie</h1>
        <div class="row g-2">
            @for ($i = 0; $i < 6; $i++)
                <div class="col-md-3">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('storage/cover.jpeg') }}" class="card-img" alt="...">
                    </div>
                    <h5 class="text-uppercase text-center">Escape (2023)</h5>
                </div>
            @endfor
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
