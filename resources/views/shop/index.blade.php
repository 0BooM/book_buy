<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <title>Book.buy | Home</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark ps-4 pe-4">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold fs-1 logo" href="#">
                Book.<span style="color: #4CAF50">buy</span>
            </a>
            <div class="navbar-nav d-flex justify-content-center align-items-center">
                <a class="nav-item nav-link active me-2" href="#">
                    <button type="button" class="btn btn-success fs-5">Utwórz aukcje</button>
                </a>
                <a class="nav-item nav-link active fs-5 me-2" href="#">Strona główna</a>
                <a class="nav-item nav-link fs-5 me-2" href="#">Obserwowane</a>
                <a class="nav-item nav-link fs-5 logout" href="#">Wyloguj</a>
            </div>
        </div>
    </nav>

</body>
</html>
