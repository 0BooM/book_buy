<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <title>Book.buy | Login</title>
</head>
<body>
    <div class="mt-5">
        <form action="" style="max-width:400px;margin:auto;">
            <h1 class="h3 mb-3 font-weight-normal text-center">Logowanie</h1>

            <label for="login" class="text-start">Login</label>
            <input type="text" id="login" class="form-control mb-3" placeholder="Login" required>

            <label for="password" class="text-start">Hasło</label>
            <input type="password" id="password" class="form-control" placeholder="Hasło" required>

            <div class="mt-3">
                <button class="btn btn-secondary" style="width: 100%">Zaloguj</button>
            </div>
        </form>
    </div>

</body>
</html>
