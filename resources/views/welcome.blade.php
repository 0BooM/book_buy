<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Book Buy</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark ps-4 pe-4">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold fs-3" href="#">Book.<span style="color: #4CAF50">buy</span></a>
            <div class="navbar-nav">
                <a class="nav-item nav-link active fs-5 me-2" href="#">Strona główna</a>
                <a class="nav-item nav-link fs-5 me-2" href="#">Obserwowane</a>
                <a class="nav-item nav-link fs-5 logout" href="#">Wyloguj</a>
            </div>
        </div>
    </nav>

</body>
</html>
